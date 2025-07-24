<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/auth.php';

// Verificar autenticación y permisos de admin
if (!isLoggedIn()) {
    die("Error: No está logueado");
}

$user = getCurrentUser();
if ($user['role'] !== 'admin') {
    die("Error: No es admin");
}

echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Admin Panel - Versión Simple</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <style>
        body { padding: 20px; background: #f8f9fa; }
        .section { background: white; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .nav-pills .nav-link { margin-right: 10px; }
        .admin-section { display: none; }
        .admin-section.active { display: block; }
        .alert { margin: 10px 0; }
    </style>
</head>
<body>
    <div class='container-fluid'>
        <h1>🛡️ Panel de Administración - Versión Simplificada</h1>
        <p class='text-muted'>Usuario: <strong>{$user['username']}</strong> | Rol: <strong>{$user['role']}</strong></p>
        
        <div class='section'>
            <ul class='nav nav-pills mb-3'>
                <li class='nav-item'>
                    <a class='nav-link active' href='#' onclick='showSection(\"dashboard\")'>Dashboard</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#' onclick='showSection(\"users\")'>Usuarios</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#' onclick='showSection(\"test\")'>Test AJAX</a>
                </li>
            </ul>
        </div>
        
        <!-- Dashboard Section -->
        <div id='dashboard-section' class='admin-section active section'>
            <h3>📊 Dashboard</h3>
            <div class='row'>
                <div class='col-md-3'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Usuarios</h5>
                            <h2 class='text-primary' id='stat-users'>-</h2>
                        </div>
                    </div>
                </div>
                <div class='col-md-3'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Pagos</h5>
                            <h2 class='text-success' id='stat-payments'>-</h2>
                        </div>
                    </div>
                </div>
                <div class='col-md-3'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Herramientas</h5>
                            <h2 class='text-warning' id='stat-tools'>-</h2>
                        </div>
                    </div>
                </div>
                <div class='col-md-3'>
                    <div class='card text-center'>
                        <div class='card-body'>
                            <h5 class='card-title'>Ingresos</h5>
                            <h2 class='text-info' id='stat-revenue'>-</h2>
                        </div>
                    </div>
                </div>
            </div>
            <button class='btn btn-primary mt-3' onclick='loadDashboardStats()'>Cargar Estadísticas</button>
        </div>
        
        <!-- Users Section -->
        <div id='users-section' class='admin-section section'>
            <h3>👥 Gestión de Usuarios</h3>
            <div id='users-content'>
                <button class='btn btn-primary' onclick='loadUsers()'>Cargar Usuarios</button>
                <div id='users-table-container' class='mt-3'></div>
            </div>
        </div>
        
        <!-- Test AJAX Section -->
        <div id='test-section' class='admin-section section'>
            <h3>🧪 Test de Endpoints AJAX</h3>
            <div class='row'>
                <div class='col-md-6'>
                    <h5>Test Individual:</h5>
                    <button class='btn btn-info btn-sm' onclick='testEndpoint(\"dashboard_stats.php\")'>Test Dashboard Stats</button>
                    <button class='btn btn-info btn-sm' onclick='testEndpoint(\"get_users.php\")'>Test Get Users</button>
                    <button class='btn btn-info btn-sm' onclick='testEndpoint(\"get_tools.php\")'>Test Get Tools</button>
                    <button class='btn btn-info btn-sm' onclick='testEndpoint(\"get_payments.php\")'>Test Get Payments</button>
                </div>
                <div class='col-md-6'>
                    <h5>Resultado:</h5>
                    <div id='test-result' class='border p-3' style='height: 200px; overflow-y: auto; background: #f8f9fa;'></div>
                </div>
            </div>
        </div>
        
        <!-- Error Display -->
        <div id='error-container'></div>
    </div>
    
    <script src='https://code.jquery.com/jquery-3.7.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
    <script>
        function showSection(section) {
            // Hide all sections
            document.querySelectorAll('.admin-section').forEach(s => s.classList.remove('active'));
            // Show selected section
            document.getElementById(section + '-section').classList.add('active');
            // Update nav
            document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
            event.target.classList.add('active');
        }
        
        function showError(message) {
            document.getElementById('error-container').innerHTML = 
                `<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    <strong>Error:</strong> ${message}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>`;
        }
        
        function showSuccess(message) {
            document.getElementById('error-container').innerHTML = 
                `<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    <strong>Éxito:</strong> ${message}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>`;
        }
        
        async function loadDashboardStats() {
            try {
                console.log('Cargando estadísticas del dashboard...');
                const response = await fetch('/ObelisIA/admin/ajax/dashboard_stats.php');
                console.log('Response status:', response.status);
                
                if (!response.ok) {
                    throw new Error(`HTTP ${response.status}: ${response.statusText}`);
                }
                
                const data = await response.json();
                console.log('Data received:', data);
                
                if (data.success) {
                    document.getElementById('stat-users').textContent = data.stats.total_users || '0';
                    document.getElementById('stat-payments').textContent = data.stats.total_payments || '0';
                    document.getElementById('stat-tools').textContent = data.stats.total_tools || '0';
                    document.getElementById('stat-revenue').textContent = '$' + (data.stats.total_revenue || '0');
                    showSuccess('Estadísticas cargadas correctamente');
                } else {
                    throw new Error(data.message || 'Error desconocido');
                }
            } catch (error) {
                console.error('Error:', error);
                showError('Error cargando estadísticas: ' + error.message);
            }
        }
        
        async function loadUsers() {
            try {
                console.log('Cargando usuarios...');
                const response = await fetch('/ObelisIA/admin/ajax/get_users.php');
                console.log('Response status:', response.status);
                
                if (!response.ok) {
                    throw new Error(`HTTP ${response.status}: ${response.statusText}`);
                }
                
                const data = await response.json();
                console.log('Data received:', data);
                
                if (data.success) {
                    let html = '<table class=\"table table-striped\"><thead><tr><th>ID</th><th>Usuario</th><th>Email</th><th>Rol</th><th>Tipo</th></tr></thead><tbody>';
                    data.users.forEach(user => {
                        html += `<tr>
                            <td>${user.id}</td>
                            <td>${user.username}</td>
                            <td>${user.email}</td>
                            <td><span class=\"badge bg-${user.role === 'admin' ? 'danger' : 'primary'}\">${user.role}</span></td>
                            <td><span class=\"badge bg-info\">${user.membership_type}</span></td>
                        </tr>`;
                    });
                    html += '</tbody></table>';
                    document.getElementById('users-table-container').innerHTML = html;
                    showSuccess(`${data.users.length} usuarios cargados correctamente`);
                } else {
                    throw new Error(data.message || 'Error desconocido');
                }
            } catch (error) {
                console.error('Error:', error);
                showError('Error cargando usuarios: ' + error.message);
            }
        }
        
        async function testEndpoint(endpoint) {
            const resultDiv = document.getElementById('test-result');
            resultDiv.innerHTML = `<div class=\"text-info\">🔄 Testing ${endpoint}...</div>`;
            
            try {
                const startTime = Date.now();
                const response = await fetch(`/ObelisIA/admin/ajax/${endpoint}`);
                const endTime = Date.now();
                const duration = endTime - startTime;
                
                resultDiv.innerHTML += `<div class=\"text-muted\">⏱️ Response time: ${duration}ms</div>`;
                resultDiv.innerHTML += `<div class=\"text-muted\">📊 Status: ${response.status} ${response.statusText}</div>`;
                
                const responseText = await response.text();
                
                if (response.ok) {
                    try {
                        const data = JSON.parse(responseText);
                        resultDiv.innerHTML += `<div class=\"text-success\">✅ JSON válido</div>`;
                        resultDiv.innerHTML += `<pre class=\"small\">${JSON.stringify(data, null, 2)}</pre>`;
                    } catch (e) {
                        resultDiv.innerHTML += `<div class=\"text-warning\">⚠️ No es JSON válido</div>`;
                        resultDiv.innerHTML += `<pre class=\"small\">${responseText.substring(0, 500)}...</pre>`;
                    }
                } else {
                    resultDiv.innerHTML += `<div class=\"text-danger\">❌ Error HTTP</div>`;
                    resultDiv.innerHTML += `<pre class=\"small\">${responseText.substring(0, 500)}...</pre>`;
                }
            } catch (error) {
                resultDiv.innerHTML += `<div class=\"text-danger\">❌ Exception: ${error.message}</div>`;
            }
        }
        
        // Auto-load dashboard stats on page load
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Page loaded, auto-loading dashboard stats...');
            loadDashboardStats();
        });
    </script>
</body>
</html>";
?>
