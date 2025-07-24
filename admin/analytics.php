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

$page_title = "Analytics - Admin";

// Obtener estadísticas generales
$general_stats_query = "SELECT 
    (SELECT COUNT(*) FROM users WHERE role = 'user') as total_users,
    (SELECT COUNT(*) FROM users WHERE role = 'user' AND membership_type = 'premium') as premium_users,
    (SELECT COUNT(*) FROM users WHERE role = 'user' AND DATE(created_at) = CURDATE()) as new_users_today,
    (SELECT COUNT(*) FROM users WHERE role = 'user' AND DATE(created_at) >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)) as new_users_week,
    (SELECT COUNT(*) FROM users WHERE role = 'user' AND DATE(created_at) >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)) as new_users_month,
    (SELECT COUNT(*) FROM user_creations) as total_creations,
    (SELECT COUNT(*) FROM user_creations WHERE DATE(created_at) = CURDATE()) as creations_today,
    (SELECT COUNT(*) FROM payment_transactions WHERE status = 'completed') as successful_payments,
    (SELECT SUM(amount) FROM payment_transactions WHERE status = 'completed') as total_revenue,
    (SELECT SUM(amount) FROM payment_transactions WHERE status = 'completed' AND DATE(created_at) = CURDATE()) as revenue_today,
    (SELECT SUM(amount) FROM payment_transactions WHERE status = 'completed' AND YEAR(created_at) = YEAR(NOW()) AND MONTH(created_at) = MONTH(NOW())) as revenue_month";

$general_stats = $db->query($general_stats_query)->fetch(PDO::FETCH_ASSOC);

// Estadísticas de usuarios por mes (últimos 6 meses)
$user_growth_query = "SELECT 
    DATE_FORMAT(created_at, '%Y-%m') as month,
    COUNT(*) as new_users
FROM users 
WHERE role = 'user' AND created_at >= DATE_SUB(NOW(), INTERVAL 6 MONTH)
GROUP BY DATE_FORMAT(created_at, '%Y-%m')
ORDER BY month";
$user_growth = $db->query($user_growth_query)->fetchAll(PDO::FETCH_ASSOC);

// Estadísticas de ingresos por mes (últimos 6 meses)
$revenue_growth_query = "SELECT 
    DATE_FORMAT(created_at, '%Y-%m') as month,
    SUM(amount) as revenue
FROM payment_transactions 
WHERE status = 'completed' AND created_at >= DATE_SUB(NOW(), INTERVAL 6 MONTH)
GROUP BY DATE_FORMAT(created_at, '%Y-%m')
ORDER BY month";
$revenue_growth = $db->query($revenue_growth_query)->fetchAll(PDO::FETCH_ASSOC);

// Estadísticas de herramientas más usadas
$tools_usage_query = "SELECT 
    tool_type,
    COUNT(*) as usage_count
FROM user_creations 
GROUP BY tool_type
ORDER BY usage_count DESC
LIMIT 10";
$tools_usage = $db->query($tools_usage_query)->fetchAll(PDO::FETCH_ASSOC);

// Usuarios más activos
$active_users_query = "SELECT 
    u.full_name,
    u.email,
    u.membership_type,
    COUNT(uc.id) as creation_count
FROM users u
LEFT JOIN user_creations uc ON u.id = uc.user_id
WHERE u.role = 'user'
GROUP BY u.id
ORDER BY creation_count DESC
LIMIT 10";
$active_users = $db->query($active_users_query)->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include __DIR__ . '/../src/Utils/header.php'; ?>

<div class="g-sidenav-show bg-gray-200">
    <!-- Admin Sidebar -->
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark">
        <div class="sidenav-header">
            <a class="navbar-brand m-0" href="<?php echo MainRouter::url('home'); ?>">
                <i class="material-icons opacity-6 text-white">admin_panel_settings</i>
                <span class="ms-1 font-weight-bold text-white">Admin Panel</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo MainRouter::url('home'); ?>">
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
                    <a class="nav-link text-white" href="payments.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">payments</i>
                        </div>
                        <span class="nav-link-text ms-1">Pagos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="analytics.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">analytics</i>
                        </div>
                        <span class="nav-link-text ms-1">Analytics</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="settings.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">settings</i>
                        </div>
                        <span class="nav-link-text ms-1">Configuración</span>
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
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="<?php echo MainRouter::url('home'); ?>">Admin</a></li>
                        <li class="breadcrumb-item text-sm text-dark active">Analytics</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Analytics & Reportes</h6>
                </nav>
            </div>
        </nav>

        <!-- Content -->
        <div class="container-fluid py-4">
            <!-- Key Metrics -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-6">group</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Total Usuarios</p>
                                <h4 class="mb-0"><?php echo number_format($general_stats['total_users']); ?></h4>
                                <p class="text-xs text-success mb-0">
                                    +<?php echo $general_stats['new_users_today']; ?> hoy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-6">star</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Usuarios Premium</p>
                                <h4 class="mb-0"><?php echo number_format($general_stats['premium_users']); ?></h4>
                                <p class="text-xs text-info mb-0">
                                    <?php echo $general_stats['total_users'] > 0 ? round(($general_stats['premium_users'] / $general_stats['total_users']) * 100, 1) : 0; ?>% del total
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-6">create</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Total Creaciones</p>
                                <h4 class="mb-0"><?php echo number_format($general_stats['total_creations']); ?></h4>
                                <p class="text-xs text-success mb-0">
                                    +<?php echo $general_stats['creations_today']; ?> hoy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-6">payments</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Ingresos Totales</p>
                                <h4 class="mb-0">$<?php echo number_format($general_stats['total_revenue'], 2); ?></h4>
                                <p class="text-xs text-success mb-0">
                                    +$<?php echo number_format($general_stats['revenue_today'], 2); ?> hoy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <!-- User Growth Chart -->
                <div class="col-lg-7 mb-lg-0 mb-4">
                    <div class="card card-custom">
                        <div class="card-header pb-0">
                            <h6>Crecimiento de Usuarios (Últimos 6 Meses)</h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="chart">
                                <canvas id="userGrowthChart" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Revenue Growth Chart -->
                <div class="col-lg-5">
                    <div class="card card-custom">
                        <div class="card-header pb-0">
                            <h6>Ingresos Mensuales</h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="chart">
                                <canvas id="revenueChart" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <!-- Tools Usage -->
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="card card-custom">
                        <div class="card-header pb-0">
                            <h6>Herramientas Más Utilizadas</h6>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Herramienta</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Usos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($tools_usage as $tool): ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?php echo ucfirst(str_replace('_', ' ', $tool['tool_type'])); ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success"><?php echo number_format($tool['usage_count']); ?></span>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Active Users -->
                <div class="col-lg-6">
                    <div class="card card-custom">
                        <div class="card-header pb-0">
                            <h6>Usuarios Más Activos</h6>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usuario</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Creaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($active_users as $user): ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($user['full_name']); ?>&background=667eea&color=fff" 
                                                             class="avatar avatar-sm me-3 border-radius-lg" alt="user">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($user['full_name']); ?></h6>
                                                        <p class="text-xs text-secondary mb-0">
                                                            <span class="badge badge-sm <?php echo $user['membership_type'] === 'premium' ? 'bg-gradient-success' : 'bg-gradient-secondary'; ?>">
                                                                <?php echo ucfirst($user['membership_type']); ?>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-secondary text-xs font-weight-bold"><?php echo number_format($user['creation_count']); ?></span>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Growth Summary -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card card-custom">
                        <div class="card-header pb-0">
                            <h6>Resumen de Crecimiento</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="number">
                                        <h3 class="text-gradient text-primary mb-0">+<?php echo $general_stats['new_users_week']; ?></h3>
                                        <p class="mb-0 text-sm">Usuarios esta semana</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="number">
                                        <h3 class="text-gradient text-success mb-0">+<?php echo $general_stats['new_users_month']; ?></h3>
                                        <p class="mb-0 text-sm">Usuarios este mes</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="number">
                                        <h3 class="text-gradient text-info mb-0">$<?php echo number_format($general_stats['revenue_month'], 2); ?></h3>
                                        <p class="mb-0 text-sm">Ingresos este mes</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="number">
                                        <h3 class="text-gradient text-warning mb-0"><?php echo $general_stats['successful_payments']; ?></h3>
                                        <p class="mb-0 text-sm">Pagos exitosos</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// User Growth Chart
const userGrowthCtx = document.getElementById('userGrowthChart').getContext('2d');
const userGrowthChart = new Chart(userGrowthCtx, {
    type: 'line',
    data: {
        labels: [<?php echo "'" . implode("','", array_column($user_growth, 'month')) . "'"; ?>],
        datasets: [{
            label: 'Nuevos Usuarios',
            data: [<?php echo implode(',', array_column($user_growth, 'new_users')); ?>],
            backgroundColor: 'rgba(103, 126, 234, 0.1)',
            borderColor: 'rgba(103, 126, 234, 1)',
            borderWidth: 2,
            fill: true,
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: {
                    borderDash: [5, 5]
                }
            },
            x: {
                grid: {
                    borderDash: [5, 5]
                }
            }
        }
    }
});

// Revenue Chart
const revenueCtx = document.getElementById('revenueChart').getContext('2d');
const revenueChart = new Chart(revenueCtx, {
    type: 'bar',
    data: {
        labels: [<?php echo "'" . implode("','", array_column($revenue_growth, 'month')) . "'"; ?>],
        datasets: [{
            label: 'Ingresos ($)',
            data: [<?php echo implode(',', array_column($revenue_growth, 'revenue')); ?>],
            backgroundColor: 'rgba(76, 175, 80, 0.8)',
            borderColor: 'rgba(76, 175, 80, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: {
                    borderDash: [5, 5]
                }
            },
            x: {
                grid: {
                    borderDash: [5, 5]
                }
            }
        }
    }
});
</script>

<?php include __DIR__ . '/../src/Utils/footer.php'; ?>
