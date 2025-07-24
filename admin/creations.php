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

$page_title = "Gestión de Creaciones - Admin";

// Obtener filtros
$search = $_GET['search'] ?? '';
$filter_tool = $_GET['tool'] ?? '';
$filter_date = $_GET['date'] ?? '';

// Construir query con filtros
$where_conditions = [];
$params = [];

if (!empty($search)) {
    $where_conditions[] = "(u.full_name LIKE ? OR u.email LIKE ? OR uc.title LIKE ?)";
    $search_param = "%$search%";
    $params[] = $search_param;
    $params[] = $search_param;
    $params[] = $search_param;
}

if (!empty($filter_tool)) {
    $where_conditions[] = "uc.tool_type = ?";
    $params[] = $filter_tool;
}

if (!empty($filter_date)) {
    $where_conditions[] = "DATE(uc.created_at) = ?";
    $params[] = $filter_date;
}

$where_clause = !empty($where_conditions) ? 'WHERE ' . implode(' AND ', $where_conditions) : '';

// Paginación
$page = $_GET['page'] ?? 1;
$per_page = 20;
$offset = ($page - 1) * $per_page;

// Obtener total de creaciones
$count_query = "SELECT COUNT(*) as total FROM user_creations uc LEFT JOIN users u ON uc.user_id = u.id $where_clause";
$count_stmt = $db->prepare($count_query);
$count_stmt->execute($params);
$total_creations = $count_stmt->fetch(PDO::FETCH_ASSOC)['total'];
$total_pages = ceil($total_creations / $per_page);

// Obtener creaciones con información del usuario
$query = "SELECT uc.*, u.full_name, u.email 
          FROM user_creations uc 
          LEFT JOIN users u ON uc.user_id = u.id 
          $where_clause 
          ORDER BY uc.created_at DESC 
          LIMIT $per_page OFFSET $offset";
$stmt = $db->prepare($query);
$stmt->execute($params);
$creations = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Obtener tipos de herramientas únicos para el filtro
$tools_query = "SELECT DISTINCT tool_type FROM user_creations ORDER BY tool_type";
$tools = $db->query($tools_query)->fetchAll(PDO::FETCH_COLUMN);
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
                    <a class="nav-link text-white active bg-gradient-primary" href="creations.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">folder</i>
                        </div>
                        <span class="nav-link-text ms-1">Creaciones</span>
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
                    <a class="nav-link text-white" href="analytics.php">
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
                        <li class="breadcrumb-item text-sm text-dark active">Creaciones</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Gestión de Creaciones</h6>
                </nav>
            </div>
        </nav>

        <!-- Content -->
        <div class="container-fluid py-4">
            <!-- Filters Card -->
            <div class="card card-custom mb-4">
                <div class="card-header pb-0">
                    <h6>Filtros y Búsqueda</h6>
                </div>
                <div class="card-body">
                    <form method="GET" class="row g-3">
                        <div class="col-md-4">
                            <div class="input-group input-group-outline">
                                <label class="form-label">Buscar...</label>
                                <input type="text" class="form-control" name="search" value="<?php echo htmlspecialchars($search); ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select" name="tool">
                                <option value="">Todas las herramientas</option>
                                <?php foreach ($tools as $tool): ?>
                                    <option value="<?php echo htmlspecialchars($tool); ?>" <?php echo $filter_tool === $tool ? 'selected' : ''; ?>>
                                        <?php echo ucfirst(str_replace('_', ' ', $tool)); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control" name="date" value="<?php echo htmlspecialchars($filter_date); ?>">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn bg-gradient-primary w-100">
                                <i class="material-icons me-1">search</i>Filtrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Creations Table -->
            <div class="card card-custom">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>Creaciones (<?php echo number_format($total_creations); ?> total)</h6>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Creación</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usuario</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Herramienta</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                                    <th class="text-secondary opacity-7">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($creations as $creation): ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($creation['title'] ?: 'Sin título'); ?></h6>
                                                <p class="text-xs text-secondary mb-0">ID: #<?php echo $creation['id']; ?></p>
                                                <?php if ($creation['description']): ?>
                                                    <p class="text-xs text-secondary mb-0"><?php echo htmlspecialchars(substr($creation['description'], 0, 50)) . '...'; ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($creation['full_name']); ?>&background=667eea&color=fff" 
                                                     class="avatar avatar-sm me-3 border-radius-lg" alt="user">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($creation['full_name']); ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?php echo htmlspecialchars($creation['email']); ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-sm bg-gradient-info">
                                            <?php echo ucfirst(str_replace('_', ' ', $creation['tool_type'])); ?>
                                        </span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs"><?php echo date('d/m/Y H:i', strtotime($creation['created_at'])); ?></span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="badge badge-sm bg-gradient-success">Completado</span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-link text-secondary mb-0" type="button" data-bs-toggle="dropdown">
                                                <i class="material-icons">more_vert</i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#viewModal<?php echo $creation['id']; ?>">
                                                        <i class="material-icons me-2">visibility</i>Ver Detalles
                                                    </button>
                                                </li>
                                                <?php if ($creation['file_path']): ?>
                                                <li>
                                                    <a class="dropdown-item" href="<?php echo htmlspecialchars($creation['file_path']); ?>" target="_blank">
                                                        <i class="material-icons me-2">download</i>Descargar
                                                    </a>
                                                </li>
                                                <?php endif; ?>
                                                <li><hr class="dropdown-divider"></li>
                                                <li>
                                                    <form method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar esta creación?')">
                                                        <input type="hidden" name="action" value="delete_creation">
                                                        <input type="hidden" name="creation_id" value="<?php echo $creation['id']; ?>">
                                                        <button type="submit" class="dropdown-item text-danger">
                                                            <i class="material-icons me-2">delete</i>Eliminar
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <!-- View Modal -->
                                <div class="modal fade" id="viewModal<?php echo $creation['id']; ?>" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detalles de Creación #<?php echo $creation['id']; ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <strong>Título:</strong><br>
                                                        <span class="text-sm"><?php echo htmlspecialchars($creation['title'] ?: 'Sin título'); ?></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong>Herramienta:</strong><br>
                                                        <span class="text-sm"><?php echo ucfirst(str_replace('_', ' ', $creation['tool_type'])); ?></span>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <strong>Descripción:</strong><br>
                                                        <span class="text-sm"><?php echo htmlspecialchars($creation['description'] ?: 'Sin descripción'); ?></span>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <strong>Usuario:</strong><br>
                                                        <span class="text-sm"><?php echo htmlspecialchars($creation['full_name']); ?></span><br>
                                                        <span class="text-xs text-secondary"><?php echo htmlspecialchars($creation['email']); ?></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong>Fecha de Creación:</strong><br>
                                                        <span class="text-sm"><?php echo date('d/m/Y H:i:s', strtotime($creation['created_at'])); ?></span>
                                                    </div>
                                                </div>
                                                <?php if ($creation['input_data']): ?>
                                                <hr>
                                                <strong>Datos de Entrada:</strong>
                                                <pre class="text-xs mt-2 bg-gray-100 p-3 border-radius-md"><?php echo htmlspecialchars($creation['input_data']); ?></pre>
                                                <?php endif; ?>
                                                <?php if ($creation['output_data']): ?>
                                                <hr>
                                                <strong>Resultado:</strong>
                                                <pre class="text-xs mt-2 bg-gray-100 p-3 border-radius-md"><?php echo htmlspecialchars($creation['output_data']); ?></pre>
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
