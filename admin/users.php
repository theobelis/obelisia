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

$page_title = "Gestión de Usuarios - Admin";
$success_message = '';
$error_message = '';

// Manejar acciones de administración
if ($_POST) {
    $action = $_POST['action'] ?? '';
    $user_id = $_POST['user_id'] ?? '';
    
    switch ($action) {
        case 'toggle_status':
            $query = "UPDATE users SET status = IF(status = 'active', 'inactive', 'active') WHERE id = ? AND role = 'user'";
            $stmt = $db->prepare($query);
            if ($stmt->execute([$user_id])) {
                $success_message = "Estado del usuario actualizado correctamente.";
            } else {
                $error_message = "Error al actualizar el estado del usuario.";
            }
            break;
            
        case 'upgrade_membership':
            $query = "UPDATE users SET membership_type = 'premium', membership_expires_at = DATE_ADD(NOW(), INTERVAL 1 MONTH) WHERE id = ? AND role = 'user'";
            $stmt = $db->prepare($query);
            if ($stmt->execute([$user_id])) {
                $success_message = "Usuario actualizado a Premium correctamente.";
            } else {
                $error_message = "Error al actualizar la membresía del usuario.";
            }
            break;
            
        case 'downgrade_membership':
            $query = "UPDATE users SET membership_type = 'free', membership_expires_at = NULL, credits_remaining = 10 WHERE id = ? AND role = 'user'";
            $stmt = $db->prepare($query);
            if ($stmt->execute([$user_id])) {
                $success_message = "Usuario cambiado a plan gratuito correctamente.";
            } else {
                $error_message = "Error al cambiar la membresía del usuario.";
            }
            break;
            
        case 'delete_user':
            $query = "DELETE FROM users WHERE id = ? AND role = 'user'";
            $stmt = $db->prepare($query);
            if ($stmt->execute([$user_id])) {
                $success_message = "Usuario eliminado correctamente.";
            } else {
                $error_message = "Error al eliminar el usuario.";
            }
            break;
    }
}

// Obtener filtros
$search = $_GET['search'] ?? '';
$filter_membership = $_GET['membership'] ?? '';
$filter_status = $_GET['status'] ?? '';

// Construir query con filtros
$where_conditions = ["role = 'user'"];
$params = [];

if (!empty($search)) {
    $where_conditions[] = "(full_name LIKE ? OR email LIKE ? OR username LIKE ?)";
    $search_param = "%$search%";
    $params[] = $search_param;
    $params[] = $search_param;
    $params[] = $search_param;
}

if (!empty($filter_membership)) {
    $where_conditions[] = "membership_type = ?";
    $params[] = $filter_membership;
}

if (!empty($filter_status)) {
    $where_conditions[] = "status = ?";
    $params[] = $filter_status;
}

$where_clause = implode(' AND ', $where_conditions);

// Paginación
$page = $_GET['page'] ?? 1;
$per_page = 15;
$offset = ($page - 1) * $per_page;

// Obtener total de usuarios
$count_query = "SELECT COUNT(*) as total FROM users WHERE $where_clause";
$count_stmt = $db->prepare($count_query);
$count_stmt->execute($params);
$total_users = $count_stmt->fetch(PDO::FETCH_ASSOC)['total'];
$total_pages = ceil($total_users / $per_page);

// Obtener usuarios
$query = "SELECT * FROM users WHERE $where_clause ORDER BY created_at DESC LIMIT $per_page OFFSET $offset";
$stmt = $db->prepare($query);
$stmt->execute($params);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
                    <a class="nav-link text-white active bg-gradient-primary" href="users.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-6">group</i>
                        </div>
                        <span class="nav-link-text ms-1">Usuarios</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0">
            <div class="mx-3">
                <a class="btn bg-gradient-info mt-4 w-100" href="../dashboard.php" type="button">
                    <i class="material-icons opacity-6 me-2">person</i>Vista Usuario
                </a>
            </div>
        </div>
    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="<?php echo MainRouter::url('home'); ?>">Admin</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Usuarios</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Gestión de Usuarios</h6>
                </nav>
            </div>
        </nav>

        <!-- Content -->
        <div class="container-fluid py-4">
            <!-- Alerts -->
            <?php if (!empty($success_message)): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="material-icons me-2">check_circle</i>
                    <?php echo htmlspecialchars($success_message); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <?php if (!empty($error_message)): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="material-icons me-2">error</i>
                    <?php echo htmlspecialchars($error_message); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <!-- Filters Card -->
            <div class="card card-custom mb-4">
                <div class="card-header pb-0">
                    <h6>Filtros y Búsqueda</h6>
                </div>
                <div class="card-body">
                    <form method="GET" class="row g-3">
                        <div class="col-md-4">
                            <div class="input-group input-group-outline">
                                <label class="form-label">Buscar usuario...</label>
                                <input type="text" class="form-control" name="search" value="<?php echo htmlspecialchars($search); ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select" name="membership">
                                <option value="">Todas las membresías</option>
                                <option value="free" <?php echo $filter_membership === 'free' ? 'selected' : ''; ?>>Gratuito</option>
                                <option value="premium" <?php echo $filter_membership === 'premium' ? 'selected' : ''; ?>>Premium</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select" name="status">
                                <option value="">Todos los estados</option>
                                <option value="active" <?php echo $filter_status === 'active' ? 'selected' : ''; ?>>Activo</option>
                                <option value="inactive" <?php echo $filter_status === 'inactive' ? 'selected' : ''; ?>>Inactivo</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn bg-gradient-primary w-100">
                                <i class="material-icons me-1">search</i>Filtrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Users Table -->
            <div class="card card-custom">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>Usuarios (<?php echo number_format($total_users); ?> total)</h6>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usuario</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Membresía</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Registro</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Último Acceso</th>
                                    <th class="text-secondary opacity-7">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($user['full_name']); ?>&background=667eea&color=fff" 
                                                     class="avatar avatar-sm me-3 border-radius-lg" alt="user">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($user['full_name']); ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?php echo htmlspecialchars($user['email']); ?></p>
                                                <p class="text-xs text-secondary mb-0">@<?php echo htmlspecialchars($user['username']); ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-sm <?php echo $user['membership_type'] === 'premium' ? 'bg-gradient-success' : 'bg-gradient-secondary'; ?>">
                                            <?php echo ucfirst($user['membership_type']); ?>
                                        </span>
                                        <?php if ($user['membership_type'] === 'premium' && $user['membership_expires_at']): ?>
                                            <br><small class="text-xs text-secondary">
                                                Expira: <?php echo date('d/m/Y', strtotime($user['membership_expires_at'])); ?>
                                            </small>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <span class="badge badge-sm <?php echo $user['status'] === 'active' ? 'bg-gradient-success' : 'bg-gradient-danger'; ?>">
                                            <?php echo ucfirst($user['status']); ?>
                                        </span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs"><?php echo date('d/m/Y H:i', strtotime($user['created_at'])); ?></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs">
                                            <?php echo $user['last_login'] ? date('d/m/Y H:i', strtotime($user['last_login'])) : 'Nunca'; ?>
                                        </span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-link text-secondary mb-0" type="button" data-bs-toggle="dropdown">
                                                <i class="material-icons">more_vert</i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <form method="POST" class="d-inline">
                                                        <input type="hidden" name="action" value="toggle_status">
                                                        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="material-icons me-2">
                                                                <?php echo $user['status'] === 'active' ? 'block' : 'check_circle'; ?>
                                                            </i>
                                                            <?php echo $user['status'] === 'active' ? 'Desactivar' : 'Activar'; ?>
                                                        </button>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form method="POST" class="d-inline">
                                                        <input type="hidden" name="action" value="<?php echo $user['membership_type'] === 'premium' ? 'downgrade_membership' : 'upgrade_membership'; ?>">
                                                        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="material-icons me-2">
                                                                <?php echo $user['membership_type'] === 'premium' ? 'star_border' : 'star'; ?>
                                                            </i>
                                                            <?php echo $user['membership_type'] === 'premium' ? 'Cambiar a Free' : 'Upgrade Premium'; ?>
                                                        </button>
                                                    </form>
                                                </li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li>
                                                    <form method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este usuario?')">
                                                        <input type="hidden" name="action" value="delete_user">
                                                        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                                                        <button type="submit" class="dropdown-item text-danger">
                                                            <i class="material-icons me-2">delete</i>
                                                            Eliminar
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
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
