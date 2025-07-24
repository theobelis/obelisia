<?php
// Habilitar reporte de errores para debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    require_once __DIR__ . '/../config/config.php';
    require_once __DIR__ . '/../includes/auth.php';

    // Verificar autenticación y permisos de admin
    if (!isLoggedIn()) {
        header('Location: ../login.php');
        exit();
    }

    $user = getCurrentUser();
    if (!$user || $user['role'] !== 'admin') {
        header('Location: ../pages/error/403.php');
        exit();
    }
} catch (Exception $e) {
    die("Error de configuración: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - ObelisIA</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Admin Panel CSS -->
    <link href="../assets/css/admin-panel.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #667eea;
            --secondary-color: #764ba2;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --info-color: #17a2b8;
            --dark-color: #343a40;
            --light-color: #f8f9fa;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .admin-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            margin: 2rem;
            min-height: calc(100vh - 4rem);
        }

        .admin-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2rem;
            border-radius: 20px 20px 0 0;
            margin-bottom: 0;
        }

        .admin-nav {
            background: #f8f9fa;
            padding: 1rem 2rem;
            border-bottom: 1px solid #dee2e6;
        }

        .admin-nav .nav-link {
            color: #495057;
            font-weight: 500;
            padding: 0.75rem 1.5rem;
            margin-right: 0.5rem;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .admin-nav .nav-link:hover,
        .admin-nav .nav-link.active {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }

        .admin-content {
            padding: 2rem;
        }

        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .stat-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            opacity: 0.8;
        }

        .chart-container {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .table-container {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 1.5rem;
        }

        .btn-custom {
            border-radius: 10px;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .modal-content {
            border-radius: 15px;
            border: none;
        }

        .modal-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-radius: 15px 15px 0 0;
        }

        .form-control, .form-select {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            transition: border-color 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .admin-section {
            display: none;
        }

        .admin-section.active {
            display: block;
        }

        .loading-spinner {
            display: none;
        }

        .sidebar-collapsed .admin-container {
            margin-left: 5rem;
        }

        @media (max-width: 768px) {
            .admin-container {
                margin: 1rem;
                border-radius: 15px;
            }
            
            .admin-header {
                padding: 1.5rem;
            }
            
            .admin-content {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <!-- Header -->
        <div class="admin-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="mb-0">
                        <i class="fas fa-shield-alt me-3"></i>
                        Panel de Administración
                    </h1>
                    <p class="mb-0 opacity-75">Gestión completa del sistema ObelisIA</p>
                </div>
                <div class="col-auto">
                    <div class="d-flex align-items-center text-white">
                        <i class="fas fa-user-circle me-2"></i>
                        <span><?php echo htmlspecialchars($user['username']); ?></span>
                        <a href="../" class="btn btn-outline-light btn-sm ms-3">
                            <i class="fas fa-home me-1"></i>Inicio
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="admin-nav">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="#dashboard" data-section="dashboard">
                        <i class="fas fa-chart-line me-2"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#users" data-section="users">
                        <i class="fas fa-users me-2"></i>Usuarios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#payments" data-section="payments">
                        <i class="fas fa-credit-card me-2"></i>Pagos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tools" data-section="tools">
                        <i class="fas fa-tools me-2"></i>Herramientas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#settings" data-section="settings">
                        <i class="fas fa-cog me-2"></i>Configuración
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#notifications" data-section="notifications">
                        <i class="fas fa-bell me-2"></i>Notificaciones
                    </a>
                </li>
            </ul>
            
            <!-- Debug buttons - TEMPORAL -->
            <div class="mt-2">
                <small class="text-muted">Pruebas de navegación:</small>
                <div class="btn-group btn-group-sm">
                    <button class="btn btn-outline-info" onclick="testNavigation('dashboard')">Dashboard</button>
                    <button class="btn btn-outline-info" onclick="testNavigation('users')">Usuarios</button>
                    <button class="btn btn-outline-info" onclick="testNavigation('payments')">Pagos</button>
                    <button class="btn btn-outline-info" onclick="testNavigation('tools')">Herramientas</button>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="admin-content">
            <!-- Loading Spinner -->
            <div class="loading-spinner text-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Cargando...</span>
                </div>
            </div>

            <!-- Dashboard Section -->
            <div id="dashboard-section" class="admin-section active">
                <!-- Stats Cards -->
                <div class="row" id="stats-container">
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card text-center">
                            <i class="fas fa-users stat-icon text-primary"></i>
                            <h3 class="mb-1" id="total-users">-</h3>
                            <p class="text-muted mb-0">Total Usuarios</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card text-center">
                            <i class="fas fa-credit-card stat-icon text-success"></i>
                            <h3 class="mb-1" id="total-payments">-</h3>
                            <p class="text-muted mb-0">Total Pagos</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card text-center">
                            <i class="fas fa-tools stat-icon text-warning"></i>
                            <h3 class="mb-1" id="total-tools">-</h3>
                            <p class="text-muted mb-0">Herramientas</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card text-center">
                            <i class="fas fa-dollar-sign stat-icon text-info"></i>
                            <h3 class="mb-1" id="total-revenue">-</h3>
                            <p class="text-muted mb-0">Ingresos</p>
                        </div>
                    </div>
                </div>

                <!-- Charts -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="chart-container">
                            <h5 class="mb-4">
                                <i class="fas fa-chart-area me-2 text-primary"></i>
                                Registros por Mes
                            </h5>
                            <canvas id="registrationsChart" height="100"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="chart-container">
                            <h5 class="mb-4">
                                <i class="fas fa-chart-pie me-2 text-success"></i>
                                Tipos de Usuario
                            </h5>
                            <canvas id="userTypesChart" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users Section -->
            <div id="users-section" class="admin-section">
                <div class="alert alert-success">
                    <h4>✅ Sección de Usuarios Funcionando</h4>
                    <p>La navegación está funcionando correctamente. Esta es la sección de gestión de usuarios.</p>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2><i class="fas fa-users me-2"></i>Gestión de Usuarios</h2>
                    <button class="btn btn-primary btn-custom" onclick="adminPanel.showAddUserModal()">
                        <i class="fas fa-plus me-2"></i>Nuevo Usuario
                    </button>
                </div>

                <!-- Filtros avanzados -->
                <div class="table-container mb-4">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Buscar</label>
                            <input type="text" class="form-control" id="userSearch" placeholder="Usuario, email, nombre...">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Tipo de Membresía</label>
                            <select class="form-select" id="userMembershipFilter">
                                <option value="all">Todos</option>
                                <option value="free">Gratuita</option>
                                <option value="premium">Premium</option>
                                <option value="enterprise">Enterprise</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Estado</label>
                            <select class="form-select" id="userStatusFilter">
                                <option value="all">Todos</option>
                                <option value="active">Activos</option>
                                <option value="suspended">Suspendidos</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Ordenar por</label>
                            <select class="form-select" id="userOrderBy">
                                <option value="created_at">Fecha registro</option>
                                <option value="username">Usuario</option>
                                <option value="email">Email</option>
                                <option value="credits_remaining">Créditos</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Dirección</label>
                            <select class="form-select" id="userOrderDir">
                                <option value="DESC">Descendente</option>
                                <option value="ASC">Ascendente</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <label class="form-label">&nbsp;</label>
                            <button class="btn btn-outline-secondary w-100" onclick="adminPanel.resetUserFilters()">
                                <i class="fas fa-undo"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="table-container">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <span class="text-muted me-3">Total: <span id="userCount">0</span> usuarios</span>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    Acciones masivas
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" onclick="adminPanel.bulkSuspendUsers()"><i class="fas fa-ban me-2"></i>Suspender seleccionados</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="adminPanel.bulkActivateUsers()"><i class="fas fa-check me-2"></i>Activar seleccionados</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="adminPanel.bulkAddCredits()"><i class="fas fa-coins me-2"></i>Añadir créditos</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#" onclick="adminPanel.bulkDeleteUsers()"><i class="fas fa-trash me-2"></i>Eliminar seleccionados</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-primary" onclick="adminPanel.exportUsers('csv')">
                                <i class="fas fa-file-csv me-1"></i>CSV
                            </button>
                            <button class="btn btn-outline-success" onclick="adminPanel.exportUsers('excel')">
                                <i class="fas fa-file-excel me-1"></i>Excel
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="users-table" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="selectAllUsers" class="form-check-input"></th>
                                    <th>ID</th>
                                    <th>Usuario</th>
                                    <th>Email</th>
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                    <th>Créditos</th>
                                    <th>Estado</th>
                                    <th>Último acceso</th>
                                    <th>Registro</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Dynamic content -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Paginación -->
                    <nav aria-label="Paginación de usuarios">
                        <ul class="pagination justify-content-center" id="userPagination">
                            <!-- Dynamic pagination -->
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Payments Section -->
            <div id="payments-section" class="admin-section">
                <div class="alert alert-info">
                    <h4>💰 Sección de Pagos y Finanzas Funcionando</h4>
                    <p>Esta es la sección de gestión financiera y contabilidad completa.</p>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2><i class="fas fa-credit-card me-2"></i>Gestión Financiera y Contabilidad</h2>
                    <div>
                        <button class="btn btn-info btn-custom me-2" onclick="adminPanel.showPremiumPriceModal()">
                            <i class="fas fa-dollar-sign me-2"></i>Configurar Precios
                        </button>
                        <button class="btn btn-success btn-custom me-2" onclick="adminPanel.exportFinancialReport()">
                            <i class="fas fa-download me-2"></i>Reporte Financiero
                        </button>
                    </div>
                </div>

                <!-- Resumen Financiero -->
                <div class="row mb-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card text-center">
                            <i class="fas fa-arrow-up stat-icon text-success"></i>
                            <h3 class="mb-1" id="total-income">$0</h3>
                            <p class="text-muted mb-0">Ingresos Totales</p>
                            <small class="text-success" id="income-growth">+0% este mes</small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card text-center">
                            <i class="fas fa-arrow-down stat-icon text-danger"></i>
                            <h3 class="mb-1" id="total-expenses">$0</h3>
                            <p class="text-muted mb-0">Gastos Totales</p>
                            <small class="text-danger" id="expenses-growth">+0% este mes</small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card text-center">
                            <i class="fas fa-chart-line stat-icon text-info"></i>
                            <h3 class="mb-1" id="net-profit">$0</h3>
                            <p class="text-muted mb-0">Ganancia Neta</p>
                            <small class="text-info" id="profit-margin">0% margen</small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card text-center">
                            <i class="fas fa-users-cog stat-icon text-warning"></i>
                            <h3 class="mb-1" id="active-subscriptions">0</h3>
                            <p class="text-muted mb-0">Suscripciones Activas</p>
                            <small class="text-warning" id="subscription-trend">0 nuevas esta semana</small>
                        </div>
                    </div>
                </div>

                <!-- Gráficos Financieros -->
                <div class="row mb-4">
                    <div class="col-lg-8">
                        <div class="chart-container">
                            <h5 class="mb-4">
                                <i class="fas fa-chart-area me-2 text-primary"></i>
                                Flujo de Caja Mensual
                                <div class="float-end">
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-outline-secondary active" data-period="3months">3M</button>
                                        <button class="btn btn-outline-secondary" data-period="6months">6M</button>
                                        <button class="btn btn-outline-secondary" data-period="1year">1A</button>
                                        <button class="btn btn-outline-secondary" data-period="all">Todo</button>
                                    </div>
                                </div>
                            </h5>
                            <canvas id="cashFlowChart" height="100"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="chart-container">
                            <h5 class="mb-4">
                                <i class="fas fa-chart-pie me-2 text-success"></i>
                                Distribución de Ingresos
                            </h5>
                            <canvas id="revenueDistributionChart" height="200"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Filtros de Pagos -->
                <div class="table-container mb-4">
                    <div class="row g-3">
                        <div class="col-md-2">
                            <label class="form-label">Tipo</label>
                            <select class="form-select" id="paymentTypeFilter">
                                <option value="all">Todos</option>
                                <option value="income">Ingresos</option>
                                <option value="expense">Gastos</option>
                                <option value="subscription">Suscripciones</option>
                                <option value="refund">Reembolsos</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Estado</label>
                            <select class="form-select" id="paymentStatusFilter">
                                <option value="all">Todos</option>
                                <option value="completed">Completado</option>
                                <option value="pending">Pendiente</option>
                                <option value="failed">Fallido</option>
                                <option value="refunded">Reembolsado</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Método</label>
                            <select class="form-select" id="paymentMethodFilter">
                                <option value="all">Todos</option>
                                <option value="stripe">Stripe</option>
                                <option value="paypal">PayPal</option>
                                <option value="bank_transfer">Transferencia</option>
                                <option value="crypto">Criptomonedas</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Desde</label>
                            <input type="date" class="form-control" id="paymentDateFrom">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Hasta</label>
                            <input type="date" class="form-control" id="paymentDateTo">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Monto</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="paymentMinAmount" placeholder="Min">
                                <input type="number" class="form-control" id="paymentMaxAmount" placeholder="Max">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="table-container">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <span class="text-muted me-3">Total: <span id="paymentCount">0</span> transacciones</span>
                            <span class="badge bg-success me-2">Ingresos: $<span id="totalIncomeFiltered">0</span></span>
                            <span class="badge bg-danger me-2">Gastos: $<span id="totalExpensesFiltered">0</span></span>
                            <span class="badge bg-info">Neto: $<span id="netAmountFiltered">0</span></span>
                        </div>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-primary" onclick="adminPanel.addExpense()">
                                <i class="fas fa-minus me-1"></i>Añadir Gasto
                            </button>
                            <button class="btn btn-outline-success" onclick="adminPanel.addIncome()">
                                <i class="fas fa-plus me-1"></i>Añadir Ingreso
                            </button>
                            <button class="btn btn-outline-info" onclick="adminPanel.reconcileAccounts()">
                                <i class="fas fa-balance-scale me-1"></i>Conciliar
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="payments-table" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo</th>
                                    <th>Usuario</th>
                                    <th>Concepto</th>
                                    <th>Monto</th>
                                    <th>Estado</th>
                                    <th>Método</th>
                                    <th>Fecha</th>
                                    <th>ID Transacción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Dynamic content -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Paginación -->
                    <nav aria-label="Paginación de pagos">
                        <ul class="pagination justify-content-center" id="paymentPagination">
                            <!-- Dynamic pagination -->
                        </ul>
                    </nav>
                </div>

                <!-- Reportes Contables -->
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="table-container">
                            <h5 class="mb-3">
                                <i class="fas fa-chart-bar me-2"></i>Resumen Contable Mensual
                            </h5>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Mes</th>
                                            <th>Ingresos</th>
                                            <th>Gastos</th>
                                            <th>Neto</th>
                                            <th>Margen</th>
                                        </tr>
                                    </thead>
                                    <tbody id="monthlyAccountingSummary">
                                        <!-- Dynamic content -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="table-container">
                            <h5 class="mb-3">
                                <i class="fas fa-tags me-2"></i>Gastos por Categoría
                            </h5>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Categoría</th>
                                            <th>Monto</th>
                                            <th>% Total</th>
                                            <th>Tendencia</th>
                                        </tr>
                                    </thead>
                                    <tbody id="expensesByCategory">
                                        <!-- Dynamic content -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tools Section -->
            <div id="tools-section" class="admin-section">
                <div class="alert alert-warning">
                    <h4>🔧 Sección de Herramientas Funcionando</h4>
                    <p>Esta es la sección de gestión de herramientas del sistema.</p>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2><i class="fas fa-tools me-2"></i>Gestión de Herramientas</h2>
                    <button class="btn btn-primary btn-custom" onclick="adminPanel.showAddToolModal()">
                        <i class="fas fa-plus me-2"></i>Nueva Herramienta
                    </button>
                </div>

                <!-- Filtros para herramientas -->
                <div class="table-container mb-4">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Buscar herramienta</label>
                            <input type="text" class="form-control" id="toolSearch" placeholder="Nombre, categoría, descripción...">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Categoría</label>
                            <select class="form-select" id="toolCategoryFilter">
                                <option value="all">Todas</option>
                                <option value="ai">Inteligencia Artificial</option>
                                <option value="text">Procesamiento de Texto</option>
                                <option value="image">Imágenes</option>
                                <option value="video">Video</option>
                                <option value="code">Programación</option>
                                <option value="design">Diseño</option>
                                <option value="productivity">Productividad</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Estado</label>
                            <select class="form-select" id="toolStatusFilter">
                                <option value="all">Todos</option>
                                <option value="active">Activas</option>
                                <option value="inactive">Inactivas</option>
                                <option value="maintenance">Mantenimiento</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Ordenar por</label>
                            <select class="form-select" id="toolOrderBy">
                                <option value="name">Nombre</option>
                                <option value="category">Categoría</option>
                                <option value="total_uses">Usos totales</option>
                                <option value="monthly_uses">Usos mensuales</option>
                                <option value="credits_required">Créditos</option>
                                <option value="created_at">Fecha creación</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Vista</label>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="toolView" id="toolGridView" value="grid" checked>
                                <label class="btn btn-outline-secondary" for="toolGridView"><i class="fas fa-th"></i></label>
                                
                                <input type="radio" class="btn-check" name="toolView" id="toolListView" value="list">
                                <label class="btn btn-outline-secondary" for="toolListView"><i class="fas fa-list"></i></label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <label class="form-label">&nbsp;</label>
                            <button class="btn btn-outline-secondary w-100" onclick="adminPanel.resetToolFilters()">
                                <i class="fas fa-undo"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Vista en Grid -->
                <div id="tools-grid-view">
                    <div class="row" id="tools-container">
                        <!-- Dynamic content -->
                    </div>
                </div>

                <!-- Vista en Lista -->
                <div id="tools-list-view" style="display: none;">
                    <div class="table-container">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Total: <span id="toolCount">0</span> herramientas</span>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary" onclick="adminPanel.exportTools('csv')">
                                    <i class="fas fa-file-csv me-1"></i>CSV
                                </button>
                                <button class="btn btn-outline-success" onclick="adminPanel.bulkToggleTools()">
                                    <i class="fas fa-toggle-on me-1"></i>Toggle masivo
                                </button>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="tools-table" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAllTools" class="form-check-input"></th>
                                        <th>Nombre</th>
                                        <th>Categoría</th>
                                        <th>Descripción</th>
                                        <th>Créditos</th>
                                        <th>Estado</th>
                                        <th>Usos totales</th>
                                        <th>Usos mensuales</th>
                                        <th>Última actualización</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Dynamic content -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Settings Section -->
            <div id="settings-section" class="admin-section">
                <h2 class="mb-4"><i class="fas fa-cog me-2"></i>Configuración del Sistema</h2>
                
                <div class="row">
                    <div class="col-lg-8">
                        <div class="table-container">
                            <h5 class="mb-3">Configuraciones Generales</h5>
                            <div id="settings-container">
                                <!-- Dynamic content -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="table-container">
                            <h5 class="mb-3">Información del Sistema</h5>
                            <div class="mb-3">
                                <strong>Versión:</strong> 1.0.0
                            </div>
                            <div class="mb-3">
                                <strong>Base de Datos:</strong> MySQL
                            </div>
                            <div class="mb-3">
                                <strong>Servidor:</strong> Apache
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notifications Section -->
            <div id="notifications-section" class="admin-section">
                <h2 class="mb-4"><i class="fas fa-bell me-2"></i>Centro de Notificaciones</h2>
                
                <div class="table-container">
                    <div id="notifications-container">
                        <!-- Dynamic content -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- User Modal -->
    <div class="modal fade" id="userModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-user me-2"></i><span id="userModalTitle">Nuevo Usuario</span>
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <form id="userForm">
                                <input type="hidden" id="userId" name="id">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="username" class="form-label">Usuario</label>
                                        <input type="text" class="form-control" id="username" name="username" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="full_name" class="form-label">Nombre Completo</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label">Teléfono</label>
                                        <input type="tel" class="form-control" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="membership_type" class="form-label">Tipo de Membresía</label>
                                        <select class="form-select" id="membership_type" name="membership_type">
                                            <option value="free">Gratuita</option>
                                            <option value="premium">Premium</option>
                                            <option value="enterprise">Enterprise</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="credits_remaining" class="form-label">Créditos</label>
                                        <input type="number" class="form-control" id="credits_remaining" name="credits_remaining" min="0">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="role" class="form-label">Rol</label>
                                        <select class="form-select" id="role" name="role">
                                            <option value="user">Usuario</option>
                                            <option value="admin">Administrador</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="subscription_start" class="form-label">Inicio Suscripción</label>
                                        <input type="date" class="form-control" id="subscription_start" name="subscription_start">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="subscription_end" class="form-label">Fin Suscripción</label>
                                        <input type="date" class="form-control" id="subscription_end" name="subscription_end">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="status" class="form-label">Estado</label>
                                        <select class="form-select" id="status" name="status">
                                            <option value="active">Activo</option>
                                            <option value="suspended">Suspendido</option>
                                            <option value="banned">Baneado</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="language" class="form-label">Idioma</label>
                                        <select class="form-select" id="language" name="language">
                                            <option value="es">Español</option>
                                            <option value="en">English</option>
                                            <option value="fr">Français</option>
                                            <option value="pt">Português</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3" id="passwordSection">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <div class="form-text">Dejar vacío para mantener contraseña actual (solo edición)</div>
                                </div>
                                <div class="mb-3">
                                    <label for="notes" class="form-label">Notas del Administrador</label>
                                    <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Notas internas sobre este usuario"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">Configuraciones Avanzadas</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="email_verified" name="email_verified">
                                            <label class="form-check-label" for="email_verified">
                                                Email Verificado
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="newsletter_subscribed" name="newsletter_subscribed">
                                            <label class="form-check-label" for="newsletter_subscribed">
                                                Suscrito al Newsletter
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="notifications_enabled" name="notifications_enabled">
                                            <label class="form-check-label" for="notifications_enabled">
                                                Notificaciones Habilitadas
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="max_monthly_usage" class="form-label">Límite Mensual de Uso</label>
                                        <input type="number" class="form-control" id="max_monthly_usage" name="max_monthly_usage" placeholder="Sin límite">
                                    </div>
                                    <div class="mb-3">
                                        <label for="api_rate_limit" class="form-label">Límite de API (req/min)</label>
                                        <input type="number" class="form-control" id="api_rate_limit" name="api_rate_limit" value="60">
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3" id="userStatsCard" style="display: none;">
                                <div class="card-header">
                                    <h6 class="mb-0">Estadísticas del Usuario</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-2">
                                        <small class="text-muted">Último acceso:</small>
                                        <div id="userLastLogin">-</div>
                                    </div>
                                    <div class="mb-2">
                                        <small class="text-muted">Total de usos:</small>
                                        <div id="userTotalUsage">-</div>
                                    </div>
                                    <div class="mb-2">
                                        <small class="text-muted">Usos este mes:</small>
                                        <div id="userMonthlyUsage">-</div>
                                    </div>
                                    <div class="mb-2">
                                        <small class="text-muted">Pagos totales:</small>
                                        <div id="userTotalPayments">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-warning" id="sendWelcomeEmail" style="display: none;" onclick="adminPanel.sendWelcomeEmail()">
                        <i class="fas fa-envelope me-1"></i>Enviar Bienvenida
                    </button>
                    <button type="button" class="btn btn-primary" onclick="adminPanel.saveUser()">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tool Modal -->
    <div class="modal fade" id="toolModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-tools me-2"></i><span id="toolModalTitle">Nueva Herramienta</span>
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="toolForm">
                        <input type="hidden" id="toolId" name="id">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="toolName" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="toolName" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="toolCategory" class="form-label">Categoría</label>
                                <select class="form-select" id="toolCategory" name="category" required>
                                    <option value="ai">Inteligencia Artificial</option>
                                    <option value="text">Procesamiento de Texto</option>
                                    <option value="image">Imágenes</option>
                                    <option value="video">Video</option>
                                    <option value="code">Programación</option>
                                    <option value="design">Diseño</option>
                                    <option value="productivity">Productividad</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="toolDescription" class="form-label">Descripción</label>
                            <textarea class="form-control" id="toolDescription" name="description" rows="3" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="toolCredits" class="form-label">Créditos Requeridos</label>
                                <input type="number" class="form-control" id="toolCredits" name="credits_required" min="0" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="toolStatus" class="form-label">Estado</label>
                                <select class="form-select" id="toolStatus" name="status">
                                    <option value="active">Activo</option>
                                    <option value="inactive">Inactivo</option>
                                    <option value="maintenance">Mantenimiento</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="toolPriority" class="form-label">Prioridad</label>
                                <select class="form-select" id="toolPriority" name="priority">
                                    <option value="1">Baja</option>
                                    <option value="2" selected>Media</option>
                                    <option value="3">Alta</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="toolIcon" class="form-label">Icono (FontAwesome)</label>
                                <input type="text" class="form-control" id="toolIcon" name="icon" placeholder="fas fa-robot">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="toolColor" class="form-label">Color</label>
                                <input type="color" class="form-control form-control-color" id="toolColor" name="color" value="#667eea">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="adminPanel.saveTool()">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Premium Price Configuration Modal -->
    <div class="modal fade" id="premiumPriceModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-dollar-sign me-2"></i>Configuración de Precios Premium
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="premiumPriceForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="monthlyPrice" class="form-label">Precio Mensual ($)</label>
                                <input type="number" class="form-control" id="monthlyPrice" name="monthly_price" step="0.01" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="yearlyPrice" class="form-label">Precio Anual ($)</label>
                                <input type="number" class="form-control" id="yearlyPrice" name="yearly_price" step="0.01" required>
                                <div class="form-text">Se calculará automáticamente el descuento</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="premiumCredits" class="form-label">Créditos Premium Mensuales</label>
                                <input type="number" class="form-control" id="premiumCredits" name="premium_credits" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="enterprisePrice" class="form-label">Precio Enterprise ($)</label>
                                <input type="number" class="form-control" id="enterprisePrice" name="enterprise_price" step="0.01">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="premiumFeatures" class="form-label">Características Premium</label>
                            <textarea class="form-control" id="premiumFeatures" name="premium_features" rows="4" placeholder="Una característica por línea"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="enableTrial" name="enable_trial">
                                    <label class="form-check-label" for="enableTrial">
                                        Habilitar prueba gratuita
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="trialDays" class="form-label">Días de prueba</label>
                                <input type="number" class="form-control" id="trialDays" name="trial_days" value="7">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="adminPanel.savePremiumPrices()">Guardar Configuración</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Expense/Income Modal -->
    <div class="modal fade" id="transactionModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-plus-circle me-2"></i><span id="transactionModalTitle">Nueva Transacción</span>
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="transactionForm">
                        <input type="hidden" id="transactionType" name="type" value="expense">
                        <div class="mb-3">
                            <label for="transactionConcept" class="form-label">Concepto</label>
                            <input type="text" class="form-control" id="transactionConcept" name="concept" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="transactionAmount" class="form-label">Monto ($)</label>
                                <input type="number" class="form-control" id="transactionAmount" name="amount" step="0.01" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="transactionCategory" class="form-label">Categoría</label>
                                <select class="form-select" id="transactionCategory" name="category" required>
                                    <!-- Options will be populated dynamically based on type -->
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="transactionDate" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="transactionDate" name="date" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="transactionMethod" class="form-label">Método</label>
                                <select class="form-select" id="transactionMethod" name="method">
                                    <option value="bank_transfer">Transferencia Bancaria</option>
                                    <option value="credit_card">Tarjeta de Crédito</option>
                                    <option value="cash">Efectivo</option>
                                    <option value="paypal">PayPal</option>
                                    <option value="stripe">Stripe</option>
                                    <option value="other">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="transactionNotes" class="form-label">Notas</label>
                            <textarea class="form-control" id="transactionNotes" name="notes" rows="2"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="adminPanel.saveTransaction()">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        console.log('Cargando scripts del panel de administración');
        
        // Simple navigation function
        function showSection(sectionName) {
            console.log('Función showSection llamada con:', sectionName);
            
            // Hide all sections
            const sections = document.querySelectorAll('.admin-section');
            sections.forEach(section => {
                section.classList.remove('active');
                console.log('Ocultando sección:', section.id);
            });

            // Show target section
            const targetSection = document.getElementById(sectionName + '-section');
            if (targetSection) {
                targetSection.classList.add('active');
                console.log('Mostrando sección:', targetSection.id);
            } else {
                console.error('Sección no encontrada:', sectionName + '-section');
            }

            // Update navigation
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            
            const activeLink = document.querySelector(`[data-section="${sectionName}"]`);
            if (activeLink) {
                activeLink.classList.add('active');
            }
        }

        // Admin Panel Class
        class AdminPanel {
            constructor() {
                this.currentSection = 'dashboard';
                this.init();
            }

            init() {
                console.log('Inicializando AdminPanel');
                this.setupEventListeners();
                this.loadDashboard();
            }

            setupEventListeners() {
                console.log('Configurando event listeners');
                
                // Direct navigation setup
                const navLinks = document.querySelectorAll('.nav-link[data-section]');
                console.log('Encontrados', navLinks.length, 'enlaces de navegación');
                
                navLinks.forEach((link, index) => {
                    const section = link.getAttribute('data-section');
                    console.log(`Configurando enlace ${index + 1}: ${section}`);
                    
                    link.addEventListener('click', (e) => {
                        e.preventDefault();
                        console.log('Click en enlace:', section);
                        showSection(section);
                        return false;
                    });
                });
            }

            showSection(sectionName) {
                showSection(sectionName);
                this.loadSectionData(sectionName);
                this.currentSection = sectionName;
            }

            loadSectionData(section) {
                console.log('Cargando datos para sección:', section);
                switch (section) {
                    case 'dashboard':
                        this.loadDashboard();
                        break;
                    case 'users':
                        this.loadUsers();
                        break;
                    case 'tools':
                        this.loadTools();
                        break;
                    case 'payments':
                        this.loadPayments();
                        break;
                    case 'settings':
                        this.loadSettings();
                        break;
                    case 'notifications':
                        this.loadNotifications();
                        break;
                }
            }

            loadDashboard() {
                console.log('Cargando dashboard');
                this.loadStats();
            }

            loadStats() {
                console.log('Cargando estadísticas');
                fetch('ajax/dashboard_stats.php')
                    .then(response => {
                        console.log('Respuesta del servidor:', response.status);
                        return response.json();
                    })
                    .then(data => {
                        console.log('Datos recibidos:', data);
                        if (data.success) {
                            const stats = data.stats;
                            document.getElementById('total-users').textContent = stats.totalUsers || stats.total_users || '0';
                            document.getElementById('total-payments').textContent = stats.totalPayments || stats.total_payments || '0';
                            document.getElementById('total-tools').textContent = stats.totalTools || stats.total_tools || '0';
                            document.getElementById('total-revenue').textContent = '$' + (stats.monthlyRevenue || stats.total_revenue || '0');
                        }
                    })
                    .catch(error => {
                        console.error('Error loading stats:', error);
                        // Valores por defecto
                        document.getElementById('total-users').textContent = '0';
                        document.getElementById('total-payments').textContent = '0';
                        document.getElementById('total-tools').textContent = '0';
                        document.getElementById('total-revenue').textContent = '$0';
                    });
            }

            loadUsers() {
                console.log('Función loadUsers llamada');
            }

            loadTools() {
                console.log('Función loadTools llamada');
            }

            loadPayments() {
                console.log('Función loadPayments llamada');
            }

            loadSettings() {
                console.log('Función loadSettings llamada');
            }

            loadNotifications() {
                console.log('Función loadNotifications llamada');
            }

            // Modal functions
            showAddUserModal() {
                const modal = new bootstrap.Modal(document.getElementById('userModal'));
                modal.show();
            }

            showAddToolModal() {
                const modal = new bootstrap.Modal(document.getElementById('toolModal'));
                modal.show();
            }

            showPremiumPriceModal() {
                const modal = new bootstrap.Modal(document.getElementById('premiumPriceModal'));
                modal.show();
            }
        }

        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM cargado, inicializando panel');
            
            // Verificar que existan las secciones
            const sections = ['dashboard', 'users', 'payments', 'tools', 'settings', 'notifications'];
            sections.forEach(section => {
                const element = document.getElementById(`${section}-section`);
                if (element) {
                    console.log(`✓ Sección encontrada: ${section}-section`);
                } else {
                    console.warn(`✗ Sección no encontrada: ${section}-section`);
                }
            });
            
            // Verificar enlaces de navegación
            const navLinks = document.querySelectorAll('.nav-link[data-section]');
            console.log(`✓ Encontrados ${navLinks.length} enlaces de navegación`);
            
            // Initialize admin panel
            window.adminPanel = new AdminPanel();
            
            console.log('Panel de administración inicializado correctamente');
        });

        // Global function for testing
        window.testNavigation = function(section) {
            console.log('Probando navegación a:', section);
            showSection(section);
        };
    </script>
</body>
</html>
