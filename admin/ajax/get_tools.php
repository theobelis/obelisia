<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../src/Config/config.php';

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
    $database = new \ObelisIA\Database\Database();
    $conn = $database->getConnection();
    
    // Parámetros de filtrado
    $search = $_GET['search'] ?? '';
    $category = $_GET['category'] ?? 'all';
    $status = $_GET['status'] ?? 'all';
    $orderBy = $_GET['order_by'] ?? 'name';
    $orderDir = $_GET['order_dir'] ?? 'ASC';
    $view = $_GET['view'] ?? 'grid';
    
    // Construir condiciones WHERE
    $whereConditions = [];
    $params = [];
    
    // Filtro de búsqueda
    if (!empty($search)) {
        $whereConditions[] = "(name LIKE ? OR description LIKE ? OR category LIKE ?)";
        $searchParam = "%$search%";
        $params[] = $searchParam;
        $params[] = $searchParam;
        $params[] = $searchParam;
    }
    
    if ($category !== 'all') {
        $whereConditions[] = "category = ?";
        $params[] = $category;
    }
    
    if ($status !== 'all') {
        $whereConditions[] = "status = ?";
        $params[] = $status;
    }
    
    $whereClause = !empty($whereConditions) ? "WHERE " . implode(" AND ", $whereConditions) : "";
    
    // Validar orden
    $allowedOrderBy = ['name', 'category', 'status', 'total_uses', 'monthly_uses', 'credits_required', 'created_at', 'updated_at'];
    if (!in_array($orderBy, $allowedOrderBy)) {
        $orderBy = 'name';
    }
    
    $allowedOrderDir = ['ASC', 'DESC'];
    if (!in_array($orderDir, $allowedOrderDir)) {
        $orderDir = 'ASC';
    }
    
    // Consulta principal con más campos
    $stmt = $conn->prepare("
        SELECT 
            id, name, description, category, credits_required, status, 
            total_uses, monthly_uses, icon, color, priority, created_at, updated_at,
            (SELECT COUNT(*) FROM tool_usage WHERE tool_id = tools.id AND DATE(created_at) = CURDATE()) as today_uses,
            (SELECT COUNT(*) FROM tool_usage WHERE tool_id = tools.id AND created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)) as week_uses,
            (SELECT AVG(rating) FROM tool_ratings WHERE tool_id = tools.id) as avg_rating,
            (SELECT COUNT(*) FROM tool_ratings WHERE tool_id = tools.id) as rating_count
        FROM tools 
        $whereClause 
        ORDER BY $orderBy $orderDir
    ");
    
    $stmt->execute($params);
    $tools = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Formatear datos
    foreach ($tools as &$tool) {
        $tool['created_at_formatted'] = date('d/m/Y', strtotime($tool['created_at']));
        $tool['updated_at_formatted'] = date('d/m/Y H:i', strtotime($tool['updated_at']));
        $tool['avg_rating'] = $tool['avg_rating'] ? round($tool['avg_rating'], 1) : 0;
        
        // Badge de estado
        $statusBadges = [
            'active' => '<span class="badge bg-success">Activa</span>',
            'inactive' => '<span class="badge bg-danger">Inactiva</span>',
            'maintenance' => '<span class="badge bg-warning">Mantenimiento</span>'
        ];
        $tool['status_badge'] = $statusBadges[$tool['status']] ?? '<span class="badge bg-secondary">Desconocido</span>';
        
        // Badge de categoría
        $categoryBadges = [
            'ai' => '<span class="badge bg-primary">IA</span>',
            'text' => '<span class="badge bg-info">Texto</span>',
            'image' => '<span class="badge bg-success">Imágenes</span>',
            'video' => '<span class="badge bg-warning">Video</span>',
            'code' => '<span class="badge bg-dark">Código</span>',
            'design' => '<span class="badge bg-purple">Diseño</span>',
            'productivity' => '<span class="badge bg-orange">Productividad</span>'
        ];
        $tool['category_badge'] = $categoryBadges[$tool['category']] ?? '<span class="badge bg-secondary">' . ucfirst($tool['category']) . '</span>';
        
        // Tendencia de uso
        $tool['usage_trend'] = 'stable';
        if ($tool['week_uses'] > $tool['monthly_uses'] / 4) {
            $tool['usage_trend'] = 'up';
        } elseif ($tool['week_uses'] < $tool['monthly_uses'] / 6) {
            $tool['usage_trend'] = 'down';
        }
        
        // Popularidad
        $tool['popularity'] = 'low';
        if ($tool['total_uses'] > 1000) {
            $tool['popularity'] = 'high';
        } elseif ($tool['total_uses'] > 100) {
            $tool['popularity'] = 'medium';
        }
        
        // Icono por defecto
        if (empty($tool['icon'])) {
            $tool['icon'] = match($tool['category']) {
                'ai' => 'fas fa-robot',
                'text' => 'fas fa-file-text',
                'image' => 'fas fa-image',
                'video' => 'fas fa-video',
                'code' => 'fas fa-code',
                'design' => 'fas fa-palette',
                'productivity' => 'fas fa-tasks',
                default => 'fas fa-tools'
            };
        }
        
        // Color por defecto
        if (empty($tool['color'])) {
            $tool['color'] = '#667eea';
        }
    }
    
    // Estadísticas generales
    $statsStmt = $conn->prepare("
        SELECT 
            COUNT(*) as total_tools,
            SUM(CASE WHEN status = 'active' THEN 1 ELSE 0 END) as active_tools,
            SUM(CASE WHEN status = 'inactive' THEN 1 ELSE 0 END) as inactive_tools,
            SUM(CASE WHEN status = 'maintenance' THEN 1 ELSE 0 END) as maintenance_tools,
            SUM(total_uses) as total_all_uses,
            SUM(monthly_uses) as monthly_all_uses
        FROM tools
    ");
    $statsStmt->execute();
    $stats = $statsStmt->fetch(PDO::FETCH_ASSOC);
    
    echo json_encode([
        'success' => true,
        'data' => $tools,
        'stats' => $stats,
        'view' => $view
    ]);

} catch (Exception $e) {
    error_log("Error en get_tools.php: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Error interno del servidor',
        'error' => $e->getMessage()
    ]);
}
?>
    }
    
    // Obtener herramientas con estadísticas de uso
    $toolsQuery = "
        SELECT 
            t.id,
            t.name,
            t.slug,
            t.description,
            t.category,
            t.icon,
            t.is_active,
            t.is_premium,
            t.created_at,
            t.updated_at,
            COUNT(tu.id) as total_uses,
            COUNT(CASE WHEN tu.created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH) THEN 1 END) as monthly_uses,
            COUNT(CASE WHEN tu.created_at >= DATE_SUB(NOW(), INTERVAL 1 WEEK) THEN 1 END) as weekly_uses,
            COUNT(CASE WHEN tu.created_at >= DATE_SUB(NOW(), INTERVAL 1 DAY) THEN 1 END) as daily_uses
        FROM tools t
        LEFT JOIN tool_usage tu ON t.id = tu.tool_id
        $whereClause
        GROUP BY t.id
        ORDER BY $orderBy $orderDir
    ";
    
    $stmt = $conn->prepare($toolsQuery);
    $stmt->execute($params);
    $tools = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Formatear datos
    $formattedTools = array_map(function($tool) {
        return [
            'id' => (int)$tool['id'],
            'name' => $tool['name'],
            'slug' => $tool['slug'],
            'description' => $tool['description'],
            'category' => $tool['category'],
            'icon' => $tool['icon'],
            'active' => (bool)$tool['is_active'],
            'is_premium' => (bool)$tool['is_premium'],
            'total_uses' => (int)$tool['total_uses'],
            'monthly_uses' => (int)$tool['monthly_uses'],
            'weekly_uses' => (int)$tool['weekly_uses'],
            'daily_uses' => (int)$tool['daily_uses'],
            'created_at' => $tool['created_at'],
            'updated_at' => $tool['updated_at']
        ];
    }, $tools);
    
    // Obtener estadísticas generales
    $stats = [];
    
    // Total de herramientas
    $stmt = $conn->query("SELECT COUNT(*) as total FROM tools");
    $stats['total_tools'] = (int)$stmt->fetch()['total'];
    
    // Herramientas activas
    $stmt = $conn->query("SELECT COUNT(*) as active FROM tools WHERE is_active = 1");
    $stats['active_tools'] = (int)$stmt->fetch()['active'];
    
    // Herramientas premium
    $stmt = $conn->query("SELECT COUNT(*) as premium FROM tools WHERE is_premium = 1");
    $stats['premium_tools'] = (int)$stmt->fetch()['premium'];
    
    // Usos totales del mes
    $stmt = $conn->query("SELECT COUNT(*) as monthly_uses FROM tool_usage WHERE created_at >= DATE_SUB(NOW(), INTERVAL 1 MONTH)");
    $stats['monthly_uses'] = (int)$stmt->fetch()['monthly_uses'];
    
    // Herramienta más usada
    $stmt = $conn->query("
        SELECT t.name, COUNT(tu.id) as uses 
        FROM tools t 
        LEFT JOIN tool_usage tu ON t.id = tu.tool_id 
        GROUP BY t.id 
        ORDER BY uses DESC 
        LIMIT 1
    ");
    $mostUsed = $stmt->fetch();
    $stats['most_used_tool'] = $mostUsed ? $mostUsed['name'] : 'N/A';
    
    echo json_encode([
        'success' => true,
        'data' => $formattedTools,  // Cambiar de 'tools' a 'data'
        'stats' => $stats,
        'filters' => [
            'category' => $category,
            'status' => $status,
            'order_by' => $orderBy,
            'order_dir' => $orderDir
        ]
    ]);

} catch (Exception $e) {
    error_log("Get tools error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Error del servidor: ' . $e->getMessage()
    ]);
}
?>
