<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../includes/auth.php';
require_once __DIR__ . '/../router.php';

$database = new Database();
$db = $database->getConnection();
$auth = new Auth($db);

// Verificar si está logueado y es admin
if (!$auth->isLoggedIn() || ($_SESSION['role'] ?? 'user') !== 'admin') {
    MainRouter::redirect('login');
    exit();
}

$page_title = "Gestión de Pagos - Admin";

// Obtener estadísticas de pagos
$stats_query = "SELECT 
    COUNT(*) as total_transactions,
    SUM(CASE WHEN status = 'completed' THEN amount ELSE 0 END) as total_revenue,
    SUM(CASE WHEN status = 'completed' AND DATE(created_at) = CURDATE() THEN amount ELSE 0 END) as today_revenue,
    SUM(CASE WHEN status = 'completed' AND YEAR(created_at) = YEAR(NOW()) AND MONTH(created_at) = MONTH(NOW()) THEN amount ELSE 0 END) as monthly_revenue,
    COUNT(CASE WHEN status = 'pending' THEN 1 END) as pending_payments
FROM payment_transactions";
$stats = $db->query($stats_query)->fetch(PDO::FETCH_ASSOC);

// Obtener filtros
$filter_status = $_GET['status'] ?? '';
$filter_method = $_GET['method'] ?? '';
$date_from = $_GET['date_from'] ?? '';
$date_to = $_GET['date_to'] ?? '';

// Construir query con filtros
$where_conditions = [];
$params = [];

if (!empty($filter_status)) {
    $where_conditions[] = "pt.status = ?";
    $params[] = $filter_status;
}

if (!empty($filter_method)) {
    $where_conditions[] = "pt.payment_method = ?";
    $params[] = $filter_method;
}

if (!empty($date_from)) {
    $where_conditions[] = "DATE(pt.created_at) >= ?";
    $params[] = $date_from;
}

if (!empty($date_to)) {
    $where_conditions[] = "DATE(pt.created_at) <= ?";
    $params[] = $date_to;
}

$where_clause = !empty($where_conditions) ? 'WHERE ' . implode(' AND ', $where_conditions) : '';

// Paginación
$page = $_GET['page'] ?? 1;
$per_page = 20;
$offset = ($page - 1) * $per_page;

// Obtener total de transacciones
$count_query = "SELECT COUNT(*) as total FROM payment_transactions pt $where_clause";
$count_stmt = $db->prepare($count_query);
$count_stmt->execute($params);
$total_transactions = $count_stmt->fetch(PDO::FETCH_ASSOC)['total'];
$total_pages = ceil($total_transactions / $per_page);

// Obtener transacciones con información del usuario
$query = "SELECT pt.*, u.full_name, u.email 
          FROM payment_transactions pt 
          LEFT JOIN users u ON pt.user_id = u.id 
          $where_clause 
          ORDER BY pt.created_at DESC 
          LIMIT $per_page OFFSET $offset";
$stmt = $db->prepare($query);
$stmt->execute($params);
$transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include __DIR__ . '/../src/Utils/header.php'; ?>

<div class="g-sidenav-show bg-gray-200">
    <!-- Admin Sidebar -->
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark">
        <div class="sidenav-header">
            <a class="navbar-brand m-0" href="index.php">
                <i class="material-icons opacity-6 text-white">admin_panel_settings</i>
                <span class="ms-1 font-weight-bold text-white">Admin Panel</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="users.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">group</i>
                        </div>
                        <span class="nav-link-text ms-1">Usuarios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="payments.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">payments</i>
                        </div>
                        <span class="nav-link-text ms-1">Pagos</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="index.php">Admin</a></li>
                        <li class="breadcrumb-item text-sm text-dark active">Pagos</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Gestión de Pagos</h6>
                </nav>
            </div>
        </nav>

        <!-- Content -->
        <div class="container-fluid py-4">
            <!-- Payment Statistics -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-6">payments</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Ingresos Totales</p>
                                <h4 class="mb-0">$<?php echo number_format($stats['total_revenue'], 2); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-6">today</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Hoy</p>
                                <h4 class="mb-0">$<?php echo number_format($stats['today_revenue'], 2); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-6">calendar_month</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Este Mes</p>
                                <h4 class="mb-0">$<?php echo number_format($stats['monthly_revenue'], 2); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-6">pending</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Pendientes</p>
                                <h4 class="mb-0"><?php echo number_format($stats['pending_payments']); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters Card -->
            <div class="card card-custom mb-4 mt-4">
                <div class="card-header pb-0">
                    <h6>Filtros</h6>
                </div>
                <div class="card-body">
                    <form method="GET" class="row g-3">
                        <div class="col-md-2">
                            <select class="form-select" name="status">
                                <option value="">Estado</option>
                                <option value="pending" <?php echo $filter_status === 'pending' ? 'selected' : ''; ?>>Pendiente</option>
                                <option value="completed" <?php echo $filter_status === 'completed' ? 'selected' : ''; ?>>Completado</option>
                                <option value="failed" <?php echo $filter_status === 'failed' ? 'selected' : ''; ?>>Fallido</option>
                                <option value="cancelled" <?php echo $filter_status === 'cancelled' ? 'selected' : ''; ?>>Cancelado</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" name="method">
                                <option value="">Método</option>
                                <option value="paypal" <?php echo $filter_method === 'paypal' ? 'selected' : ''; ?>>PayPal</option>
                                <option value="stripe" <?php echo $filter_method === 'stripe' ? 'selected' : ''; ?>>Stripe</option>
                                <option value="mercadopago" <?php echo $filter_method === 'mercadopago' ? 'selected' : ''; ?>>MercadoPago</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="date" class="form-control" name="date_from" value="<?php echo htmlspecialchars($date_from); ?>" placeholder="Desde">
                        </div>
                        <div class="col-md-2">
                            <input type="date" class="form-control" name="date_to" value="<?php echo htmlspecialchars($date_to); ?>" placeholder="Hasta">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn bg-gradient-primary w-100">
                                <i class="material-icons me-1">search</i>Filtrar
                            </button>
                        </div>
                        <div class="col-md-2">
                            <a href="payments.php" class="btn btn-outline-secondary w-100">
                                <i class="material-icons me-1">clear</i>Limpiar
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Transactions Table -->
            <div class="card card-custom">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>Transacciones (<?php echo number_format($total_transactions); ?> total)</h6>
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <a href="?<?php echo http_build_query(array_merge($_GET, ['export' => 'csv'])); ?>" class="btn btn-outline-primary btn-sm mb-0">
                                <i class="material-icons me-1">download</i>Exportar
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usuario</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Monto</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Método</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                                    <th class="text-secondary opacity-7">Detalles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($transactions as $transaction): ?>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">#<?php echo $transaction['id']; ?></p>
                                        <p class="text-xs text-secondary mb-0"><?php echo htmlspecialchars($transaction['transaction_id']); ?></p>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($transaction['full_name']); ?>&background=667eea&color=fff" 
                                                     class="avatar avatar-sm me-3 border-radius-lg" alt="user">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($transaction['full_name']); ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?php echo htmlspecialchars($transaction['email']); ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">$<?php echo number_format($transaction['amount'], 2); ?></p>
                                        <p class="text-xs text-secondary mb-0"><?php echo strtoupper($transaction['currency']); ?></p>
                                    </td>
                                    <td>
                                        <span class="badge badge-sm bg-gradient-info">
                                            <?php echo ucfirst($transaction['payment_method']); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?php
                                        $status_class = '';
                                        switch ($transaction['status']) {
                                            case 'completed':
                                                $status_class = 'bg-gradient-success';
                                                break;
                                            case 'pending':
                                                $status_class = 'bg-gradient-warning';
                                                break;
                                            case 'failed':
                                                $status_class = 'bg-gradient-danger';
                                                break;
                                            case 'cancelled':
                                                $status_class = 'bg-gradient-secondary';
                                                break;
                                        }
                                        ?>
                                        <span class="badge badge-sm <?php echo $status_class; ?>">
                                            <?php echo ucfirst($transaction['status']); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?php echo date('d/m/Y', strtotime($transaction['created_at'])); ?></p>
                                        <p class="text-xs text-secondary mb-0"><?php echo date('H:i', strtotime($transaction['created_at'])); ?></p>
                                    </td>
                                    <td class="align-middle">
                                        <button class="btn btn-link text-secondary mb-0" data-bs-toggle="modal" data-bs-target="#detailModal<?php echo $transaction['id']; ?>">
                                            <i class="material-icons">visibility</i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Detail Modal -->
                                <div class="modal fade" id="detailModal<?php echo $transaction['id']; ?>" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detalles de Transacción #<?php echo $transaction['id']; ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <strong>ID Transacción:</strong><br>
                                                        <span class="text-sm"><?php echo htmlspecialchars($transaction['transaction_id']); ?></span>
                                                    </div>
                                                    <div class="col-6">
                                                        <strong>Monto:</strong><br>
                                                        <span class="text-sm">$<?php echo number_format($transaction['amount'], 2); ?> <?php echo strtoupper($transaction['currency']); ?></span>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <strong>Usuario:</strong><br>
                                                        <span class="text-sm"><?php echo htmlspecialchars($transaction['full_name']); ?></span><br>
                                                        <span class="text-xs text-secondary"><?php echo htmlspecialchars($transaction['email']); ?></span>
                                                    </div>
                                                    <div class="col-6">
                                                        <strong>Método de Pago:</strong><br>
                                                        <span class="text-sm"><?php echo ucfirst($transaction['payment_method']); ?></span>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <strong>Estado:</strong><br>
                                                        <span class="badge <?php echo $status_class; ?>"><?php echo ucfirst($transaction['status']); ?></span>
                                                    </div>
                                                    <div class="col-6">
                                                        <strong>Fecha:</strong><br>
                                                        <span class="text-sm"><?php echo date('d/m/Y H:i:s', strtotime($transaction['created_at'])); ?></span>
                                                    </div>
                                                </div>
                                                <?php if ($transaction['metadata']): ?>
                                                <hr>
                                                <strong>Metadata:</strong>
                                                <pre class="text-xs mt-2"><?php echo htmlspecialchars($transaction['metadata']); ?></pre>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Pagination -->
                <?php if ($total_pages > 1): ?>
                <div class="card-footer">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                                    <a class="page-link" href="?<?php echo http_build_query(array_merge($_GET, ['page' => $i])); ?>">
                                        <?php echo $i; ?>
                                    </a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </nav>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
</div>

<?php include __DIR__ . '/../src/Utils/footer.php'; ?>
