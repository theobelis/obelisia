<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../src/Config/config.php';
$database = new \ObelisIA\Database\Database();
$conn = $database->getConnection();
$auth = new \ObelisIA\Auth\Auth($conn);

// Verificar si es admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    http_response_code(403);
    echo json_encode([
        'success' => false, 
        'message' => 'Acceso denegado'
    ]);
    exit;
}

try {
    $database = new Database();
    $conn = $database->getConnection();
    
    $endpoint = $_GET['endpoint'] ?? 'summary';
    
    switch ($endpoint) {
        case 'summary':
            // Resumen financiero general
            $summaryStmt = $conn->prepare("
                SELECT 
                    SUM(CASE WHEN amount > 0 THEN amount ELSE 0 END) as total_income,
                    SUM(CASE WHEN amount < 0 THEN ABS(amount) ELSE 0 END) as total_expenses,
                    SUM(amount) as net_profit,
                    COUNT(*) as total_transactions,
                    (SELECT COUNT(*) FROM users WHERE membership_type = 'premium' AND subscription_end > NOW()) as active_subscriptions
                FROM financial_transactions 
                WHERE YEAR(transaction_date) = YEAR(CURDATE())
            ");
            $summaryStmt->execute();
            $summary = $summaryStmt->fetch(PDO::FETCH_ASSOC);
            
            // Crecimiento mensual
            $growthStmt = $conn->prepare("
                SELECT 
                    SUM(CASE WHEN amount > 0 THEN amount ELSE 0 END) as current_month_income,
                    (SELECT SUM(CASE WHEN amount > 0 THEN amount ELSE 0 END) 
                     FROM financial_transactions 
                     WHERE YEAR(transaction_date) = YEAR(CURDATE() - INTERVAL 1 MONTH) 
                     AND MONTH(transaction_date) = MONTH(CURDATE() - INTERVAL 1 MONTH)) as previous_month_income
                FROM financial_transactions 
                WHERE YEAR(transaction_date) = YEAR(CURDATE()) 
                AND MONTH(transaction_date) = MONTH(CURDATE())
            ");
            $growthStmt->execute();
            $growth = $growthStmt->fetch(PDO::FETCH_ASSOC);
            
            $incomeGrowth = 0;
            if ($growth['previous_month_income'] > 0) {
                $incomeGrowth = (($growth['current_month_income'] - $growth['previous_month_income']) / $growth['previous_month_income']) * 100;
            }
            
            echo json_encode([
                'success' => true,
                'summary' => array_merge($summary, [
                    'income_growth' => round($incomeGrowth, 2),
                    'profit_margin' => $summary['total_income'] > 0 ? round(($summary['net_profit'] / $summary['total_income']) * 100, 2) : 0
                ])
            ]);
            break;
            
        case 'cash_flow':
            // Flujo de caja mensual
            $period = $_GET['period'] ?? '6months';
            $months = match($period) {
                '3months' => 3,
                '6months' => 6,
                '1year' => 12,
                'all' => 24,
                default => 6
            };
            
            $cashFlowStmt = $conn->prepare("
                SELECT 
                    DATE_FORMAT(transaction_date, '%Y-%m') as month,
                    SUM(CASE WHEN amount > 0 THEN amount ELSE 0 END) as income,
                    SUM(CASE WHEN amount < 0 THEN ABS(amount) ELSE 0 END) as expenses,
                    SUM(amount) as net
                FROM financial_transactions 
                WHERE transaction_date >= DATE_SUB(CURDATE(), INTERVAL ? MONTH)
                GROUP BY DATE_FORMAT(transaction_date, '%Y-%m')
                ORDER BY month ASC
            ");
            $cashFlowStmt->execute([$months]);
            $cashFlow = $cashFlowStmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode([
                'success' => true,
                'cash_flow' => $cashFlow
            ]);
            break;
            
        case 'revenue_distribution':
            // Distribución de ingresos por fuente
            $revenueStmt = $conn->prepare("
                SELECT 
                    'Suscripciones Premium' as source,
                    SUM(amount) as amount
                FROM payments 
                WHERE status = 'completed' 
                AND YEAR(created_at) = YEAR(CURDATE())
                
                UNION ALL
                
                SELECT 
                    'Pagos únicos' as source,
                    SUM(amount) as amount
                FROM payments 
                WHERE status = 'completed' 
                AND payment_type = 'one_time'
                AND YEAR(created_at) = YEAR(CURDATE())
                
                UNION ALL
                
                SELECT 
                    category as source,
                    SUM(amount) as amount
                FROM financial_transactions 
                WHERE amount > 0 
                AND type = 'income'
                AND YEAR(transaction_date) = YEAR(CURDATE())
                GROUP BY category
                HAVING amount > 0
            ");
            $revenueStmt->execute();
            $revenue = $revenueStmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode([
                'success' => true,
                'revenue_distribution' => $revenue
            ]);
            break;
            
        case 'monthly_accounting':
            // Resumen contable mensual
            $accountingStmt = $conn->prepare("
                SELECT 
                    DATE_FORMAT(transaction_date, '%Y-%m') as month,
                    DATE_FORMAT(transaction_date, '%M %Y') as month_name,
                    SUM(CASE WHEN amount > 0 THEN amount ELSE 0 END) as income,
                    SUM(CASE WHEN amount < 0 THEN ABS(amount) ELSE 0 END) as expenses,
                    SUM(amount) as net,
                    CASE 
                        WHEN SUM(CASE WHEN amount > 0 THEN amount ELSE 0 END) > 0 
                        THEN ROUND((SUM(amount) / SUM(CASE WHEN amount > 0 THEN amount ELSE 0 END)) * 100, 2)
                        ELSE 0 
                    END as margin
                FROM financial_transactions 
                WHERE transaction_date >= DATE_SUB(CURDATE(), INTERVAL 12 MONTH)
                GROUP BY DATE_FORMAT(transaction_date, '%Y-%m')
                ORDER BY month DESC
                LIMIT 12
            ");
            $accountingStmt->execute();
            $accounting = $accountingStmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode([
                'success' => true,
                'monthly_accounting' => $accounting
            ]);
            break;
            
        case 'expenses_by_category':
            // Gastos por categoría
            $expensesStmt = $conn->prepare("
                SELECT 
                    category,
                    SUM(ABS(amount)) as total_amount,
                    COUNT(*) as transaction_count,
                    ROUND((SUM(ABS(amount)) / (SELECT SUM(ABS(amount)) FROM financial_transactions WHERE amount < 0 AND YEAR(transaction_date) = YEAR(CURDATE()))) * 100, 2) as percentage
                FROM financial_transactions 
                WHERE amount < 0 
                AND YEAR(transaction_date) = YEAR(CURDATE())
                GROUP BY category
                ORDER BY total_amount DESC
            ");
            $expensesStmt->execute();
            $expenses = $expensesStmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode([
                'success' => true,
                'expenses_by_category' => $expenses
            ]);
            break;
            
        default:
            throw new Exception("Endpoint no válido");
    }

} catch (Exception $e) {
    error_log("Error en financial_data.php: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
?>
