/**
 * Admin Panel Professional JavaScript
 * Funcionalidades completas para el panel de administración
 */

class AdminPanel {
    constructor() {
        this.currentSection = 'dashboard';
        this.charts = {};
        this.tables = {};
        this.filters = {
            users: { page: 1, search: '', membership: 'all', status: 'all', orderBy: 'created_at', orderDir: 'DESC' },
            tools: { search: '', category: 'all', status: 'all', orderBy: 'name', orderDir: 'ASC', view: 'grid' },
            payments: { type: 'all', status: 'all', method: 'all', dateFrom: '', dateTo: '', page: 1 }
        };
        this.init();
    }

    init() {
        this.setupEventListeners();
        this.loadDashboard();
        this.setupCharts();
        this.startRealTimeUpdates();
        this.initializeFilters();
    }

    setupEventListeners() {
        // Navigation
        document.querySelectorAll('.nav-link[data-section]').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const section = link.getAttribute('data-section');
                this.showSection(section);
            });
        });

        // User filters
        this.setupUserFilters();
        
        // Tool filters
        this.setupToolFilters();
        
        // Payment filters
        this.setupPaymentFilters();
        
        // Modal events
        this.setupModalEvents();
        
        // Form submissions
        this.setupFormHandlers();
    }

    setupUserFilters() {
        const userSearch = document.getElementById('userSearch');
        const userMembershipFilter = document.getElementById('userMembershipFilter');
        const userStatusFilter = document.getElementById('userStatusFilter');
        const userOrderBy = document.getElementById('userOrderBy');
        const userOrderDir = document.getElementById('userOrderDir');

        if (userSearch) {
            userSearch.addEventListener('input', debounce(() => {
                this.filters.users.search = userSearch.value;
                this.filters.users.page = 1;
                this.loadUsers();
            }, 300));
        }

        [userMembershipFilter, userStatusFilter, userOrderBy, userOrderDir].forEach(element => {
            if (element) {
                element.addEventListener('change', () => {
                    this.updateUserFilters();
                    this.loadUsers();
                });
            }
        });

        // Select all users checkbox
        const selectAllUsers = document.getElementById('selectAllUsers');
        if (selectAllUsers) {
            selectAllUsers.addEventListener('change', (e) => {
                const checkboxes = document.querySelectorAll('input[name="selectedUsers"]');
                checkboxes.forEach(cb => cb.checked = e.target.checked);
            });
        }
    }

    setupToolFilters() {
        const toolSearch = document.getElementById('toolSearch');
        const toolCategoryFilter = document.getElementById('toolCategoryFilter');
        const toolStatusFilter = document.getElementById('toolStatusFilter');
        const toolOrderBy = document.getElementById('toolOrderBy');

        if (toolSearch) {
            toolSearch.addEventListener('input', debounce(() => {
                this.filters.tools.search = toolSearch.value;
                this.loadTools();
            }, 300));
        }

        [toolCategoryFilter, toolStatusFilter, toolOrderBy].forEach(element => {
            if (element) {
                element.addEventListener('change', () => {
                    this.updateToolFilters();
                    this.loadTools();
                });
            }
        });

        // Tool view toggle
        const toolViewInputs = document.querySelectorAll('input[name="toolView"]');
        toolViewInputs.forEach(input => {
            input.addEventListener('change', (e) => {
                this.filters.tools.view = e.target.value;
                this.toggleToolView(e.target.value);
                this.loadTools();
            });
        });
    }

    setupPaymentFilters() {
        const paymentTypeFilter = document.getElementById('paymentTypeFilter');
        const paymentStatusFilter = document.getElementById('paymentStatusFilter');
        const paymentMethodFilter = document.getElementById('paymentMethodFilter');
        const paymentDateFrom = document.getElementById('paymentDateFrom');
        const paymentDateTo = document.getElementById('paymentDateTo');

        [paymentTypeFilter, paymentStatusFilter, paymentMethodFilter].forEach(element => {
            if (element) {
                element.addEventListener('change', () => {
                    this.updatePaymentFilters();
                    this.loadPayments();
                });
            }
        });

        [paymentDateFrom, paymentDateTo].forEach(element => {
            if (element) {
                element.addEventListener('change', () => {
                    this.updatePaymentFilters();
                    this.loadPayments();
                });
            }
        });
    }

    updateUserFilters() {
        this.filters.users.membership = document.getElementById('userMembershipFilter')?.value || 'all';
        this.filters.users.status = document.getElementById('userStatusFilter')?.value || 'all';
        this.filters.users.orderBy = document.getElementById('userOrderBy')?.value || 'created_at';
        this.filters.users.orderDir = document.getElementById('userOrderDir')?.value || 'DESC';
        this.filters.users.page = 1;
    }

    updateToolFilters() {
        this.filters.tools.category = document.getElementById('toolCategoryFilter')?.value || 'all';
        this.filters.tools.status = document.getElementById('toolStatusFilter')?.value || 'all';
        this.filters.tools.orderBy = document.getElementById('toolOrderBy')?.value || 'name';
    }

    updatePaymentFilters() {
        this.filters.payments.type = document.getElementById('paymentTypeFilter')?.value || 'all';
        this.filters.payments.status = document.getElementById('paymentStatusFilter')?.value || 'all';
        this.filters.payments.method = document.getElementById('paymentMethodFilter')?.value || 'all';
        this.filters.payments.dateFrom = document.getElementById('paymentDateFrom')?.value || '';
        this.filters.payments.dateTo = document.getElementById('paymentDateTo')?.value || '';
        this.filters.payments.page = 1;
    }

    showSection(sectionName) {
        // Hide all sections
        document.querySelectorAll('.admin-section').forEach(section => {
            section.classList.remove('active');
        });

        // Remove active from nav links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('active');
        });

        // Show selected section
        const targetSection = document.getElementById(`${sectionName}-section`);
        if (targetSection) {
            targetSection.classList.add('active');
        }

        // Add active to nav link
        const targetNav = document.querySelector(`[data-section="${sectionName}"]`);
        if (targetNav) {
            targetNav.classList.add('active');
        }

        // Load section data
        this.loadSectionData(sectionName);
        this.currentSection = sectionName;
    }

    loadSectionData(section) {
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
                this.loadFinancialData();
                break;
            case 'settings':
                this.loadSettings();
                break;
        }
    }

    async loadUsers() {
        try {
            const params = new URLSearchParams(this.filters.users);
            const response = await fetch(`admin/ajax/get_users.php?${params}`);
            const data = await response.json();

            if (data.success) {
                this.renderUsersTable(data.data);
                this.renderUserPagination(data.pagination);
                this.updateUserCount(data.pagination.total_records);
            } else {
                this.showAlert('error', data.message);
            }
        } catch (error) {
            console.error('Error loading users:', error);
            this.showAlert('error', 'Error al cargar usuarios');
        }
    }

    renderUsersTable(users) {
        const tbody = document.querySelector('#users-table tbody');
        if (!tbody) return;

        tbody.innerHTML = users.map(user => `
            <tr>
                <td><input type="checkbox" name="selectedUsers" value="${user.id}" class="form-check-input"></td>
                <td>${user.id}</td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm bg-primary rounded-circle d-flex align-items-center justify-content-center me-2">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div>
                            <div class="fw-bold">${user.username}</div>
                            <small class="text-muted">${user.email_verified ? '<i class="fas fa-check-circle text-success"></i>' : '<i class="fas fa-exclamation-circle text-warning"></i>'}</small>
                        </div>
                    </div>
                </td>
                <td>${user.email}</td>
                <td>${user.full_name}</td>
                <td>${user.membership_badge}</td>
                <td>
                    <span class="badge bg-info">${user.credits_remaining}</span>
                    <div class="progress mt-1" style="height: 3px;">
                        <div class="progress-bar" style="width: ${Math.min((user.credits_remaining / 1000) * 100, 100)}%"></div>
                    </div>
                </td>
                <td>${user.status_badge}</td>
                <td>
                    <small class="text-muted">${user.last_login_formatted}</small>
                </td>
                <td>
                    <small class="text-muted">${user.created_at_formatted}</small>
                </td>
                <td>
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-outline-primary" onclick="adminPanel.editUser(${user.id})" title="Editar">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-outline-info" onclick="adminPanel.viewUserStats(${user.id})" title="Estadísticas">
                            <i class="fas fa-chart-line"></i>
                        </button>
                        <button class="btn btn-outline-${user.status === 'active' ? 'warning' : 'success'}" 
                                onclick="adminPanel.toggleUserStatus(${user.id}, '${user.status}')" 
                                title="${user.status === 'active' ? 'Suspender' : 'Activar'}">
                            <i class="fas fa-${user.status === 'active' ? 'ban' : 'check'}"></i>
                        </button>
                        <button class="btn btn-outline-danger" onclick="adminPanel.deleteUser(${user.id})" title="Eliminar">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
        `).join('');
    }

    async loadTools() {
        try {
            const params = new URLSearchParams(this.filters.tools);
            const response = await fetch(`admin/ajax/get_tools.php?${params}`);
            const data = await response.json();

            if (data.success) {
                if (this.filters.tools.view === 'grid') {
                    this.renderToolsGrid(data.data);
                } else {
                    this.renderToolsList(data.data);
                }
                this.updateToolCount(data.stats.total_tools);
            } else {
                this.showAlert('error', data.message);
            }
        } catch (error) {
            console.error('Error loading tools:', error);
            this.showAlert('error', 'Error al cargar herramientas');
        }
    }

    renderToolsGrid(tools) {
        const container = document.getElementById('tools-container');
        if (!container) return;

        container.innerHTML = tools.map(tool => `
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card tool-card h-100" style="border-left: 4px solid ${tool.color}">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="d-flex align-items-center">
                                <div class="tool-icon me-3" style="color: ${tool.color}">
                                    <i class="${tool.icon} fa-2x"></i>
                                </div>
                                <div>
                                    <h6 class="card-title mb-1">${tool.name}</h6>
                                    ${tool.category_badge}
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" onclick="adminPanel.editTool(${tool.id})">
                                        <i class="fas fa-edit me-2"></i>Editar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#" onclick="adminPanel.toggleTool(${tool.id})">
                                        <i class="fas fa-toggle-on me-2"></i>Toggle Estado
                                    </a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#" onclick="adminPanel.deleteTool(${tool.id})">
                                        <i class="fas fa-trash me-2"></i>Eliminar
                                    </a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="card-text text-muted small">${tool.description}</p>
                        <div class="row text-center mt-3">
                            <div class="col-4">
                                <div class="fw-bold">${tool.total_uses}</div>
                                <small class="text-muted">Total</small>
                            </div>
                            <div class="col-4">
                                <div class="fw-bold">${tool.monthly_uses}</div>
                                <small class="text-muted">Mes</small>
                            </div>
                            <div class="col-4">
                                <div class="fw-bold">${tool.credits_required}</div>
                                <small class="text-muted">Créditos</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            ${tool.status_badge}
                            <div class="d-flex align-items-center">
                                <div class="me-2">
                                    ${[...Array(5)].map((_, i) => 
                                        `<i class="fas fa-star ${i < Math.floor(tool.avg_rating) ? 'text-warning' : 'text-muted'}" style="font-size: 0.8rem;"></i>`
                                    ).join('')}
                                </div>
                                <small class="text-muted">(${tool.rating_count})</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `).join('');
    }

    async loadPayments() {
        try {
            const params = new URLSearchParams(this.filters.payments);
            const response = await fetch(`admin/ajax/get_payments.php?${params}`);
            const data = await response.json();

            if (data.success) {
                this.renderPaymentsTable(data.data);
                this.renderPaymentPagination(data.pagination);
                this.updatePaymentStats(data.stats);
            } else {
                this.showAlert('error', data.message);
            }
        } catch (error) {
            console.error('Error loading payments:', error);
            this.showAlert('error', 'Error al cargar pagos');
        }
    }

    async loadFinancialData() {
        try {
            // Cargar resumen financiero
            const summaryResponse = await fetch('admin/ajax/financial_data.php?endpoint=summary');
            const summaryData = await summaryResponse.json();
            
            if (summaryData.success) {
                this.updateFinancialSummary(summaryData.summary);
            }

            // Cargar flujo de caja
            const cashFlowResponse = await fetch('admin/ajax/financial_data.php?endpoint=cash_flow&period=6months');
            const cashFlowData = await cashFlowResponse.json();
            
            if (cashFlowData.success) {
                this.updateCashFlowChart(cashFlowData.cash_flow);
            }

            // Cargar distribución de ingresos
            const revenueResponse = await fetch('admin/ajax/financial_data.php?endpoint=revenue_distribution');
            const revenueData = await revenueResponse.json();
            
            if (revenueData.success) {
                this.updateRevenueChart(revenueData.revenue_distribution);
            }

        } catch (error) {
            console.error('Error loading financial data:', error);
        }
    }

    updateFinancialSummary(summary) {
        document.getElementById('total-income').textContent = `$${summary.total_income?.toLocaleString() || '0'}`;
        document.getElementById('total-expenses').textContent = `$${summary.total_expenses?.toLocaleString() || '0'}`;
        document.getElementById('net-profit').textContent = `$${summary.net_profit?.toLocaleString() || '0'}`;
        document.getElementById('active-subscriptions').textContent = summary.active_subscriptions || '0';
        
        document.getElementById('income-growth').textContent = `${summary.income_growth > 0 ? '+' : ''}${summary.income_growth}% este mes`;
        document.getElementById('profit-margin').textContent = `${summary.profit_margin}% margen`;
    }

    // Modal functions
    showAddUserModal() {
        document.getElementById('userModalTitle').textContent = 'Nuevo Usuario';
        document.getElementById('userForm').reset();
        document.getElementById('userId').value = '';
        document.getElementById('passwordSection').style.display = 'block';
        document.getElementById('userStatsCard').style.display = 'none';
        document.getElementById('sendWelcomeEmail').style.display = 'none';
        
        new bootstrap.Modal(document.getElementById('userModal')).show();
    }

    showAddToolModal() {
        document.getElementById('toolModalTitle').textContent = 'Nueva Herramienta';
        document.getElementById('toolForm').reset();
        document.getElementById('toolId').value = '';
        
        new bootstrap.Modal(document.getElementById('toolModal')).show();
    }

    showPremiumPriceModal() {
        this.loadPremiumSettings();
        new bootstrap.Modal(document.getElementById('premiumPriceModal')).show();
    }

    async loadPremiumSettings() {
        try {
            const response = await fetch('admin/ajax/premium_settings.php');
            const data = await response.json();
            
            if (data.success) {
                const settings = data.settings;
                document.getElementById('monthlyPrice').value = settings.monthly_price;
                document.getElementById('yearlyPrice').value = settings.yearly_price;
                document.getElementById('premiumCredits').value = settings.premium_credits;
                document.getElementById('enterprisePrice').value = settings.enterprise_price;
                document.getElementById('premiumFeatures').value = settings.premium_features;
                document.getElementById('enableTrial').checked = settings.enable_trial;
                document.getElementById('trialDays').value = settings.trial_days;
            }
        } catch (error) {
            console.error('Error loading premium settings:', error);
        }
    }

    async savePremiumPrices() {
        try {
            const formData = new FormData(document.getElementById('premiumPriceForm'));
            const data = Object.fromEntries(formData.entries());
            
            if (document.getElementById('enableTrial').checked) {
                data.enable_trial = true;
            }

            const response = await fetch('admin/ajax/premium_settings.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data)
            });

            const result = await response.json();
            
            if (result.success) {
                this.showAlert('success', result.message);
                bootstrap.Modal.getInstance(document.getElementById('premiumPriceModal')).hide();
            } else {
                this.showAlert('error', result.message);
            }
        } catch (error) {
            console.error('Error saving premium prices:', error);
            this.showAlert('error', 'Error al guardar configuración');
        }
    }

    // Utility functions
    showAlert(type, message) {
        // Implementation for showing alerts
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-${type === 'error' ? 'danger' : type} alert-dismissible fade show position-fixed`;
        alertDiv.style.cssText = 'top: 20px; right: 20px; z-index: 9999; max-width: 400px;';
        alertDiv.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        document.body.appendChild(alertDiv);
        
        setTimeout(() => {
            if (alertDiv.parentNode) {
                alertDiv.parentNode.removeChild(alertDiv);
            }
        }, 5000);
    }

    toggleToolView(view) {
        const gridView = document.getElementById('tools-grid-view');
        const listView = document.getElementById('tools-list-view');
        
        if (view === 'grid') {
            gridView.style.display = 'block';
            listView.style.display = 'none';
        } else {
            gridView.style.display = 'none';
            listView.style.display = 'block';
        }
    }

    // Placeholder functions for additional features
    resetUserFilters() { /* Implementation */ }
    resetToolFilters() { /* Implementation */ }
    editUser(id) { /* Implementation */ }
    deleteUser(id) { /* Implementation */ }
    editTool(id) { /* Implementation */ }
    deleteTool(id) { /* Implementation */ }
    addExpense() { /* Implementation */ }
    addIncome() { /* Implementation */ }
    
    // Additional methods would be implemented here...
}

// Utility function for debouncing
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Initialize admin panel
const adminPanel = new AdminPanel();
        if (titleElement) {
            titleElement.textContent = titles[section] || 'Panel de Administración';
        }
    }

    async loadSectionData(section) {
        try {
            console.log(`Loading section: ${section}`);
            switch (section) {
                case 'dashboard':
                    await this.loadDashboard();
                    break;
                case 'users':
                    await this.loadUsers();
                    break;
                case 'tools':
                    await this.loadTools();
                    break;
                case 'analytics':
                    await this.loadAnalytics();
                    break;
                case 'payments':
                    await this.loadPayments();
                    break;
                case 'settings':
                    await this.loadSettings();
                    break;
            }
        } catch (error) {
            console.error('Error loading section data:', error);
            this.showAlert(`Error al cargar los datos de ${section}: ${error.message}`, 'error');
        }
    }

    async loadDashboard() {
        try {
            console.log('Loading dashboard...');
            const response = await fetch('/ObelisIA/admin/ajax/dashboard_stats.php');
            console.log('Dashboard response status:', response.status);
            
            if (!response.ok) {
                throw new Error(`HTTP ${response.status}: ${response.statusText}`);
            }
            
            const data = await response.json();
            console.log('Dashboard data:', data);
            
            if (data.success) {
                this.updateDashboardStats(data.stats);
                this.updateRecentActivity(data.recentActivity);
                this.updateCharts(data.chartData);
            } else {
                throw new Error(data.message || 'Error desconocido del servidor');
            }
        } catch (error) {
            console.error('Error loading dashboard:', error);
            this.showAlert(`Error en dashboard: ${error.message}`, 'error');
        }
    }

    updateDashboardStats(stats) {
        console.log('Updating dashboard stats:', stats);
        
        // Update stat cards
        const statElements = {
            'total-users': stats.totalUsers,
            'premium-users': stats.premiumUsers,
            'free-users': stats.freeUsers,
            'total-tools': stats.totalTools,
            'monthly-revenue': this.formatCurrency(stats.monthlyRevenue),
            'total-creations': stats.totalCreations
        };

        Object.entries(statElements).forEach(([id, value]) => {
            const element = document.getElementById(id);
            if (element) {
                element.textContent = value;
            } else {
                console.warn(`Element with id ${id} not found`);
            }
        });

        // Update percentage changes
        if (stats.changes) {
            this.updateStatChanges(stats.changes);
        }
    }

    updateRecentActivity(recentActivity) {
        console.log('Updating recent activity:', recentActivity);
        
        const container = document.getElementById('recent-activity');
        if (!container) {
            console.warn('Recent activity container not found');
            return;
        }

        if (!recentActivity || recentActivity.length === 0) {
            container.innerHTML = '<p>No hay actividad reciente</p>';
            return;
        }

        container.innerHTML = recentActivity.map(activity => `
            <div class="activity-item">
                <div class="activity-icon ${activity.color || 'info'}">
                    <i class="fas fa-${activity.icon || 'info-circle'}"></i>
                </div>
                <div class="activity-content">
                    <div class="activity-title">${activity.title}</div>
                    <div class="activity-time">${this.formatTime(activity.time)}</div>
                </div>
            </div>
        `).join('');
    }

    formatTime(timeString) {
        const date = new Date(timeString);
        const now = new Date();
        const diffMs = now - date;
        const diffMins = Math.floor(diffMs / (1000 * 60));
        
        if (diffMins < 1) return 'Hace unos segundos';
        if (diffMins < 60) return `Hace ${diffMins} minuto${diffMins > 1 ? 's' : ''}`;
        
        const diffHours = Math.floor(diffMins / 60);
        if (diffHours < 24) return `Hace ${diffHours} hora${diffHours > 1 ? 's' : ''}`;
        
        const diffDays = Math.floor(diffHours / 24);
        return `Hace ${diffDays} día${diffDays > 1 ? 's' : ''}`;
    }

    updateStatChanges(changes) {
        Object.entries(changes).forEach(([stat, change]) => {
            const element = document.getElementById(`${stat}-change`);
            if (element) {
                const isPositive = change >= 0;
                element.className = `stat-card-change ${isPositive ? 'positive' : 'negative'}`;
                element.innerHTML = `
                    <i class="fas fa-arrow-${isPositive ? 'up' : 'down'}"></i>
                    ${Math.abs(change)}%
                `;
            }
        });
    }

    async loadUsers() {
        try {
            console.log('Loading users...');
            const response = await fetch('/ObelisIA/admin/ajax/get_users.php');
            console.log('Users response status:', response.status);
            
            if (!response.ok) {
                throw new Error(`HTTP ${response.status}: ${response.statusText}`);
            }
            
            const data = await response.json();
            console.log('Users data:', data);
            
            if (data.success) {
                this.renderUsersTable(data.users);
                this.updateUsersPagination(data.pagination);
            } else {
                throw new Error(data.message || 'Error desconocido del servidor');
            }
        } catch (error) {
            console.error('Error loading users:', error);
            this.showAlert(`Error cargando usuarios: ${error.message}`, 'error');
        }
    }

    renderUsersTable(users) {
        const tbody = document.getElementById('users-table-body');
        if (!tbody) return;

        tbody.innerHTML = users.map(user => `
            <tr>
                <td>
                    <div class="user-info">
                        <div class="user-avatar-placeholder">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <div class="user-name">${user.username}</div>
                            <div class="user-email">${user.email}</div>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="badge badge-${user.membership_type === 'premium' ? 'warning' : 'secondary'}">
                        ${user.membership_type}
                    </span>
                </td>
                <td>
                    <div class="user-status">
                        <span class="status-indicator ${user.online ? 'online' : 'offline'}"></span>
                        ${user.online ? 'En línea' : 'Desconectado'}
                    </div>
                </td>
                <td>${this.formatDate(user.created_at)}</td>
                <td>${this.formatDate(user.last_login)}</td>
                <td>
                    <div class="action-buttons">
                        <button class="btn btn-sm btn-secondary" onclick="adminPanel.viewUser(${user.id})">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-sm btn-primary" onclick="adminPanel.editUser(${user.id})">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="adminPanel.deleteUser(${user.id})">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
        `).join('');
    }

    async loadTools() {
        try {
            console.log('Loading tools...');
            const response = await fetch('/ObelisIA/admin/ajax/get_tools.php');
            console.log('Tools response status:', response.status);
            
            if (!response.ok) {
                throw new Error(`HTTP ${response.status}: ${response.statusText}`);
            }
            
            const data = await response.json();
            console.log('Tools data:', data);
            
            if (data.success) {
                this.renderToolsGrid(data.tools);
            } else {
                throw new Error(data.message || 'Error desconocido del servidor');
            }
        } catch (error) {
            console.error('Error loading tools:', error);
            this.showAlert(`Error cargando herramientas: ${error.message}`, 'error');
        }
    }

    renderToolsGrid(tools) {
        const container = document.getElementById('tools-grid');
        if (!container) return;

        container.innerHTML = tools.map(tool => `
            <div class="tool-card">
                <div class="tool-header">
                    <h3>${tool.name}</h3>
                    <div class="tool-status ${tool.active ? 'active' : 'inactive'}">
                        ${tool.active ? 'Activa' : 'Inactiva'}
                    </div>
                </div>
                <div class="tool-body">
                    <p>${tool.description}</p>
                    <div class="tool-stats">
                        <div class="tool-stat">
                            <span class="stat-label">Usos totales:</span>
                            <span class="stat-value">${tool.total_uses}</span>
                        </div>
                        <div class="tool-stat">
                            <span class="stat-label">Usos este mes:</span>
                            <span class="stat-value">${tool.monthly_uses}</span>
                        </div>
                    </div>
                </div>
                <div class="tool-actions">
                    <button class="btn btn-sm btn-secondary" onclick="adminPanel.editTool(${tool.id})">
                        <i class="fas fa-edit"></i> Editar
                    </button>
                    <button class="btn btn-sm btn-${tool.active ? 'warning' : 'success'}" 
                            onclick="adminPanel.toggleTool(${tool.id})">
                        <i class="fas fa-${tool.active ? 'pause' : 'play'}"></i>
                        ${tool.active ? 'Desactivar' : 'Activar'}
                    </button>
                </div>
            </div>
        `).join('');
    }

    setupCharts() {
        // Configurar Chart.js si está disponible
        if (typeof Chart !== 'undefined') {
            this.initializeCharts();
        }
    }

    initializeCharts() {
        // Users Growth Chart
        const usersCtx = document.getElementById('users-chart');
        if (usersCtx) {
            this.charts.users = new Chart(usersCtx, {
                type: 'line',
                data: {
                    labels: [],
                    datasets: [{
                        label: 'Usuarios Totales',
                        data: [],
                        borderColor: '#667eea',
                        backgroundColor: 'rgba(102, 126, 234, 0.1)',
                        tension: 0.4
                    }, {
                        label: 'Usuarios Premium',
                        data: [],
                        borderColor: '#ed8936',
                        backgroundColor: 'rgba(237, 137, 54, 0.1)',
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Crecimiento de Usuarios'
                        }
                    }
                }
            });
        }

        // Revenue Chart
        const revenueCtx = document.getElementById('revenue-chart');
        if (revenueCtx) {
            this.charts.revenue = new Chart(revenueCtx, {
                type: 'bar',
                data: {
                    labels: [],
                    datasets: [{
                        label: 'Ingresos Mensuales',
                        data: [],
                        backgroundColor: '#48bb78'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Ingresos por Mes'
                        }
                    }
                }
            });
        }
    }

    updateCharts(chartData) {
        if (this.charts.users && chartData.users) {
            this.charts.users.data.labels = chartData.users.labels;
            this.charts.users.data.datasets[0].data = chartData.users.total;
            this.charts.users.data.datasets[1].data = chartData.users.premium;
            this.charts.users.update();
        }

        if (this.charts.revenue && chartData.revenue) {
            this.charts.revenue.data.labels = chartData.revenue.labels;
            this.charts.revenue.data.datasets[0].data = chartData.revenue.data;
            this.charts.revenue.update();
        }
    }

    // Modal Management
    openModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
        }
    }

    closeModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.remove('show');
            document.body.style.overflow = '';
        }
    }

    // User Management
    async editUser(userId) {
        try {
            const response = await fetch(`/ObelisIA/admin/ajax/get_user.php?id=${userId}`);
            const data = await response.json();
            
            if (data.success) {
                this.populateUserForm(data.user);
                this.openModal('user-modal');
            }
        } catch (error) {
            console.error('Error loading user:', error);
        }
    }

    async deleteUser(userId) {
        if (!confirm('¿Estás seguro de que quieres eliminar este usuario?')) {
            return;
        }

        try {
            const response = await fetch('/ObelisIA/admin/ajax/delete_user.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id: userId })
            });

            const data = await response.json();
            
            if (data.success) {
                this.showAlert('Usuario eliminado correctamente', 'success');
                this.loadUsers();
            } else {
                this.showAlert('Error al eliminar usuario', 'error');
            }
        } catch (error) {
            console.error('Error deleting user:', error);
            this.showAlert('Error al eliminar usuario', 'error');
        }
    }

    // Tool Management
    async addTool() {
        this.openModal('tool-modal');
        document.getElementById('tool-form').reset();
        document.getElementById('tool-id').value = '';
    }

    async editTool(toolId) {
        try {
            const response = await fetch(`/ObelisIA/admin/ajax/get_tool.php?id=${toolId}`);
            const data = await response.json();
            
            if (data.success) {
                this.populateToolForm(data.tool);
                this.openModal('tool-modal');
            }
        } catch (error) {
            console.error('Error loading tool:', error);
        }
    }

    async toggleTool(toolId) {
        try {
            const response = await fetch('/ObelisIA/admin/ajax/toggle_tool.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id: toolId })
            });

            const data = await response.json();
            
            if (data.success) {
                this.showAlert('Estado de herramienta actualizado', 'success');
                this.loadTools();
            } else {
                this.showAlert('Error al actualizar herramienta', 'error');
            }
        } catch (error) {
            console.error('Error toggling tool:', error);
        }
    }

    // Form Handlers
    setupFormHandlers() {
        // User form
        const userForm = document.getElementById('user-form');
        if (userForm) {
            userForm.addEventListener('submit', (e) => {
                e.preventDefault();
                this.saveUser();
            });
        }

        // Tool form
        const toolForm = document.getElementById('tool-form');
        if (toolForm) {
            toolForm.addEventListener('submit', (e) => {
                e.preventDefault();
                this.saveTool();
            });
        }
    }

    async saveUser() {
        const formData = new FormData(document.getElementById('user-form'));
        const userData = Object.fromEntries(formData);

        try {
            const response = await fetch('/ObelisIA/admin/ajax/save_user.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(userData)
            });

            const data = await response.json();
            
            if (data.success) {
                this.showAlert('Usuario guardado correctamente', 'success');
                this.closeModal('user-modal');
                this.loadUsers();
            } else {
                this.showAlert(data.message || 'Error al guardar usuario', 'error');
            }
        } catch (error) {
            console.error('Error saving user:', error);
            this.showAlert('Error al guardar usuario', 'error');
        }
    }

    async saveTool() {
        const formData = new FormData(document.getElementById('tool-form'));
        const toolData = Object.fromEntries(formData);

        try {
            const response = await fetch('/ObelisIA/admin/ajax/save_tool.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(toolData)
            });

            const data = await response.json();
            
            if (data.success) {
                this.showAlert('Herramienta guardada correctamente', 'success');
                this.closeModal('tool-modal');
                this.loadTools();
            } else {
                this.showAlert(data.message || 'Error al guardar herramienta', 'error');
            }
        } catch (error) {
            console.error('Error saving tool:', error);
            this.showAlert('Error al guardar herramienta', 'error');
        }
    }

    // Search functionality
    setupSearchHandlers() {
        const searchInputs = document.querySelectorAll('.search-input');
        searchInputs.forEach(input => {
            input.addEventListener('input', (e) => {
                this.handleSearch(e.target.value, e.target.dataset.target);
            });
        });
    }

    handleSearch(query, target) {
        const rows = document.querySelectorAll(`#${target} tbody tr`);
        
        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            const matches = text.includes(query.toLowerCase());
            row.style.display = matches ? '' : 'none';
        });
    }

    // Funciones de filtrado para pagos
    filterPayments() {
        const filter = document.getElementById('payments-filter')?.value || 'all';
        const dateFrom = document.getElementById('payments-date-from')?.value || '';
        const dateTo = document.getElementById('payments-date-to')?.value || '';
        
        console.log('Filtering payments:', { filter, dateFrom, dateTo });
        
        // Recargar pagos con filtros
        this.loadPaymentsWithFilters(filter, dateFrom, dateTo);
    }

    async loadPaymentsWithFilters(filter = 'all', dateFrom = '', dateTo = '') {
        try {
            const params = new URLSearchParams({
                filter: filter,
                date_from: dateFrom,
                date_to: dateTo,
                page: 1,
                limit: 20
            });

            const response = await fetch(`admin/ajax/get_payments.php?${params}`);
            const data = await response.json();
            
            if (data.success) {
                this.renderPaymentsStats(data.stats);
                this.renderPaymentsTable(data.payments);
                this.renderPaymentsPagination(data.pagination);
                console.log('Payments filtered successfully');
            } else {
                throw new Error(data.message || 'Error desconocido');
            }
        } catch (error) {
            console.error('Error filtering payments:', error);
            this.showAlert(`Error filtrando pagos: ${error.message}`, 'error');
        }
    }

    // Utilities
    formatCurrency(amount) {
        return new Intl.NumberFormat('es-ES', {
            style: 'currency',
            currency: 'EUR'
        }).format(amount);
    }

    formatDate(dateString) {
        return new Date(dateString).toLocaleDateString('es-ES', {
            year: 'numeric',
            month: 'short',
            day: 'numeric'
        });
    }

    showAlert(message, type = 'info') {
        console.log(`Showing alert: ${type} - ${message}`);
        
        let alertContainer = document.getElementById('alert-container');
        if (!alertContainer) {
            // Crear el contenedor si no existe
            alertContainer = document.createElement('div');
            alertContainer.id = 'alert-container';
            alertContainer.className = 'alert-container';
            document.body.appendChild(alertContainer);
        }

        const alert = document.createElement('div');
        alert.className = `alert alert-${type}`;
        alert.innerHTML = `
            <i class="fas fa-${this.getAlertIcon(type)}"></i>
            ${message}
            <button type="button" class="btn-close" onclick="this.parentElement.remove()">
                <i class="fas fa-times"></i>
            </button>
        `;

        alertContainer.appendChild(alert);

        // Auto-remove after 5 seconds
        setTimeout(() => {
            if (alert.parentElement) {
                alert.remove();
            }
        }, 5000);
    }

    getAlertIcon(type) {
        const icons = {
            success: 'check-circle',
            error: 'exclamation-circle',
            warning: 'exclamation-triangle',
            info: 'info-circle'
        };
        return icons[type] || 'info-circle';
    }

    // Real-time updates
    startRealTimeUpdates() {
        // Update stats every 30 seconds
        setInterval(() => {
            if (this.currentSection === 'dashboard') {
                this.loadDashboard();
            }
        }, 30000);

        // Check for notifications every 60 seconds
        setInterval(() => {
            this.checkNotifications();
        }, 60000);
    }

    async checkNotifications() {
        try {
            const response = await fetch('/ObelisIA/admin/ajax/get_notifications.php');
            const data = await response.json();
            
            if (data.success && data.notifications.length > 0) {
                this.showNotifications(data.notifications);
            }
        } catch (error) {
            console.error('Error checking notifications:', error);
        }
    }

    showNotifications(notifications) {
        notifications.forEach(notification => {
            this.showAlert(notification.message, notification.type);
        });
    }

    setupNotifications() {
        // Setup notification system
        if ('Notification' in window && Notification.permission === 'granted') {
            this.notificationsEnabled = true;
        } else if ('Notification' in window && Notification.permission === 'default') {
            Notification.requestPermission().then(permission => {
                this.notificationsEnabled = permission === 'granted';
            });
        }
    }

    showBrowserNotification(title, options = {}) {
        if (this.notificationsEnabled) {
            new Notification(title, {
                icon: '/ObelisIA/assets/images/logo.png',
                ...options
            });
        }
    }

    async loadAnalytics() {
        try {
            console.log('Loading analytics...');
            // Por ahora, mostrar mensaje de que está en desarrollo
            this.showAlert('Sección de Analytics en desarrollo', 'info');
        } catch (error) {
            console.error('Error loading analytics:', error);
            this.showAlert(`Error cargando analytics: ${error.message}`, 'error');
        }
    }

    async loadPayments() {
        try {
            console.log('Loading payments...');
            
            // Usar ruta absoluta para evitar problemas de ruta relativa
            const baseUrl = window.location.origin + '/ObelisIA/';
            const apiUrl = baseUrl + 'admin/ajax/get_payments.php';
            
            console.log('API URL:', apiUrl);
            
            const response = await fetch(apiUrl, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                credentials: 'same-origin' // Incluir cookies de sesión
            });
            
            console.log('Response status:', response.status);
            console.log('Response headers:', response.headers);
            
            // Verificar si la respuesta HTTP es exitosa
            if (!response.ok) {
                throw new Error(`HTTP Error: ${response.status} ${response.statusText}`);
            }
            
            // Obtener el texto de la respuesta primero para diagnóstico
            const responseText = await response.text();
            console.log('Raw response:', responseText.substring(0, 200) + '...');
            
            // Intentar parsear como JSON
            let data;
            try {
                data = JSON.parse(responseText);
            } catch (jsonError) {
                console.error('JSON Parse Error:', jsonError);
                console.error('Response text:', responseText);
                
                // Si la respuesta comienza con '<', probablemente es HTML
                if (responseText.trim().startsWith('<')) {
                    throw new Error('El servidor devolvió HTML en lugar de JSON. Posible error de PHP o redirección a login.');
                } else {
                    throw new Error(`Respuesta JSON inválida: ${jsonError.message}`);
                }
            }
            
            // Verificar la estructura de la respuesta
            if (typeof data !== 'object' || data === null) {
                throw new Error('La respuesta no es un objeto JSON válido');
            }
            
            if (data.success) {
                this.renderPaymentsStats(data.stats);
                this.renderPaymentsTable(data.payments);
                this.renderPaymentsPagination(data.pagination);
                console.log('Payments loaded successfully');
            } else {
                // Manejar diferentes tipos de errores del servidor
                const errorMessage = data.message || 'Error desconocido del servidor';
                
                if (data.error_code === 'NO_SESSION') {
                    this.showAlert('Tu sesión ha expirado. Redirigiendo al login...', 'warning');
                    setTimeout(() => {
                        window.location.href = data.redirect || '/ObelisIA/login.php';
                    }, 2000);
                    return;
                } else if (data.error_code === 'INSUFFICIENT_PERMISSIONS') {
                    this.showAlert(`Permisos insuficientes. Tu rol actual: ${data.user_role}`, 'error');
                    return;
                }
                
                throw new Error(errorMessage);
            }
        } catch (error) {
            console.error('Error loading payments:', error);
            console.error('Error type:', error.constructor.name);
            console.error('Error stack:', error.stack);
            
            // Mostrar mensaje de error más específico
            let userMessage = 'Error cargando pagos: ';
            let alertType = 'error';
            
            // Distinguir entre diferentes tipos de errores
            if (error instanceof TypeError && error.message.includes('fetch')) {
                userMessage += 'No se puede conectar con el servidor. Verifica tu conexión a internet y que el servidor esté funcionando.';
                alertType = 'warning';
            } else if (error.message.includes('HTML en lugar de JSON')) {
                userMessage += 'Error del servidor o sesión expirada. Revisa la consola para más detalles.';
            } else if (error.message.includes('HTTP Error: 404')) {
                userMessage += 'Endpoint no encontrado. Verifica la ruta del archivo.';
            } else if (error.message.includes('HTTP Error: 500')) {
                userMessage += 'Error interno del servidor. Revisa los logs de PHP.';
            } else if (error.message.includes('HTTP Error')) {
                userMessage += `Error de servidor (${error.message.split(':')[1] || 'desconocido'}).`;
            } else if (error.message.includes('JSON')) {
                userMessage += 'Respuesta del servidor no válida. Puede ser un error de PHP.';
            } else {
                userMessage += error.message;
            }
            
            this.showAlert(userMessage, alertType);
            
            // Ofrecer botón de reintentar en caso de errores de conexión
            if (error instanceof TypeError && error.message.includes('fetch')) {
                setTimeout(() => {
                    this.showRetryButton();
                }, 2000);
            }
        }
    }

    renderPaymentsStats(stats) {
        // Actualizar estadísticas de pagos
        const statsContainer = document.getElementById('payments-stats');
        if (!statsContainer) return;

        statsContainer.innerHTML = `
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <div class="stat-content">
                        <h3>$${stats.total_revenue.toLocaleString()}</h3>
                        <p>Ingresos Totales</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="stat-content">
                        <h3>$${stats.monthly_revenue.toLocaleString()}</h3>
                        <p>Ingresos Este Mes</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="stat-content">
                        <h3>${stats.completed_today}</h3>
                        <p>Pagos Hoy</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-content">
                        <h3>${stats.pending_payments}</h3>
                        <p>Pendientes</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <div class="stat-content">
                        <h3>${stats.failed_payments}</h3>
                        <p>Fallidos</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-undo"></i>
                    </div>
                    <div class="stat-content">
                        <h3>${stats.refunded_payments}</h3>
                        <p>Reembolsos</p>
                    </div>
                </div>
            </div>
        `;
    }

    renderPaymentsTable(payments) {
        const tbody = document.getElementById('payments-table-body');
        if (!tbody) return;

        tbody.innerHTML = payments.map(payment => `
            <tr>
                <td>
                    <div class="payment-id">
                        <strong>#${payment.id}</strong>
                        <div class="payment-transaction">${payment.transaction_id}</div>
                    </div>
                </td>
                <td>
                    <div class="user-info">
                        <div class="user-name">${payment.username}</div>
                        <div class="user-email">${payment.email}</div>
                    </div>
                </td>
                <td>
                    <div class="payment-amount">
                        <strong>$${payment.amount}</strong>
                        <div class="payment-currency">${payment.currency}</div>
                    </div>
                </td>
                <td>
                    <span class="badge badge-${this.getPaymentStatusClass(payment.status)}">
                        ${this.getPaymentStatusText(payment.status)}
                    </span>
                </td>
                <td>
                    <div class="payment-method">
                        <i class="fas ${this.getPaymentMethodIcon(payment.payment_method)}"></i>
                        ${this.getPaymentMethodText(payment.payment_method)}
                    </div>
                </td>
                <td>
                    <div class="payment-plan">
                        ${payment.plan_type}
                    </div>
                </td>
                <td>
                    <div class="payment-gateway">
                        ${payment.gateway}
                    </div>
                </td>
                <td>${this.formatDate(payment.created_at)}</td>
                <td>
                    <div class="action-buttons">
                        <button class="btn btn-sm btn-secondary" onclick="adminPanel.viewPayment(${payment.id})" title="Ver detalles">
                            <i class="fas fa-eye"></i>
                        </button>
                        ${payment.status === 'completed' ? `
                            <button class="btn btn-sm btn-warning" onclick="adminPanel.refundPayment(${payment.id})" title="Reembolsar">
                                <i class="fas fa-undo"></i>
                            </button>
                        ` : ''}
                        ${payment.status === 'pending' ? `
                            <button class="btn btn-sm btn-success" onclick="adminPanel.approvePayment(${payment.id})" title="Aprobar">
                                <i class="fas fa-check"></i>
                            </button>
                        ` : ''}
                    </div>
                </td>
            </tr>
        `).join('');
    }

    renderPaymentsPagination(pagination) {
        // Implementar paginación similar a usuarios
        console.log('Payments pagination:', pagination);
    }

    getPaymentStatusClass(status) {
        const statusClasses = {
            'completed': 'success',
            'pending': 'warning',
            'failed': 'danger',
            'refunded': 'info',
            'cancelled': 'secondary'
        };
        return statusClasses[status] || 'secondary';
    }

    getPaymentStatusText(status) {
        const statusTexts = {
            'completed': 'Completado',
            'pending': 'Pendiente',
            'failed': 'Fallido',
            'refunded': 'Reembolsado',
            'cancelled': 'Cancelado'
        };
        return statusTexts[status] || status;
    }

    getPaymentMethodIcon(method) {
        const methodIcons = {
            'credit_card': 'fa-credit-card',
            'paypal': 'fa-paypal',
            'bank_transfer': 'fa-university',
            'crypto': 'fa-bitcoin',
            'apple_pay': 'fa-apple-pay',
            'google_pay': 'fa-google-pay'
        };
        return methodIcons[method] || 'fa-money-bill';
    }

    getPaymentMethodText(method) {
        const methodTexts = {
            'credit_card': 'Tarjeta de Crédito',
            'paypal': 'PayPal',
            'bank_transfer': 'Transferencia',
            'crypto': 'Criptomoneda',
            'apple_pay': 'Apple Pay',
            'google_pay': 'Google Pay'
        };
        return methodTexts[method] || method;
    }

    // Funciones de acción para pagos
    viewPayment(paymentId) {
        console.log('Viewing payment:', paymentId);
        this.showAlert('Funcionalidad de ver pago en desarrollo', 'info');
    }

    refundPayment(paymentId) {
        if (confirm('¿Está seguro de que desea reembolsar este pago?')) {
            console.log('Refunding payment:', paymentId);
            this.showAlert('Funcionalidad de reembolso en desarrollo', 'info');
        }
    }

    approvePayment(paymentId) {
        if (confirm('¿Está seguro de que desea aprobar este pago pendiente?')) {
            console.log('Approving payment:', paymentId);
            this.showAlert('Funcionalidad de aprobar pago en desarrollo', 'info');
        }
    }

    async loadSettings() {
        try {
            console.log('Loading settings...');
            // Por ahora, mostrar mensaje de que está en desarrollo
            this.showAlert('Sección de Configuración en desarrollo', 'info');
        } catch (error) {
            console.error('Error loading settings:', error);
            this.showAlert(`Error cargando configuración: ${error.message}`, 'error');
        }
    }

    updateUsersPagination(pagination) {
        // Función placeholder para paginación
        console.log('Updating pagination:', pagination);
    }

    showRetryButton() {
        const paymentsSection = document.getElementById('section-payments');
        if (!paymentsSection) return;
        
        const existingRetryButton = paymentsSection.querySelector('.retry-button');
        if (existingRetryButton) return; // Ya existe
        
        const retryContainer = document.createElement('div');
        retryContainer.className = 'retry-container';
        retryContainer.style.cssText = 'text-align: center; margin: 20px 0; padding: 20px; background: #f8f9fa; border-radius: 8px;';
        
        retryContainer.innerHTML = `
            <p style="margin-bottom: 15px; color: #6c757d;">No se pudo cargar los datos de pagos</p>
            <button class="btn btn-primary retry-button" onclick="adminPanel.retryLoadPayments()">
                <i class="fas fa-redo"></i> Reintentar
            </button>
        `;
        
        const paymentsStats = document.getElementById('payments-stats');
        if (paymentsStats) {
            paymentsStats.appendChild(retryContainer);
        }
    }
    
    retryLoadPayments() {
        const retryContainer = document.querySelector('.retry-container');
        if (retryContainer) {
            retryContainer.remove();
        }
        
        this.showAlert('Reintentando cargar pagos...', 'info');
        this.loadPayments();
    }

    populateUserForm(user) {
        const form = document.getElementById('user-form');
        if (!form) return;

        // Llenar campos del formulario
        const fields = {
            'user-id': user.id,
            'user-username': user.username,
            'user-email': user.email,
            'user-full-name': user.full_name,
            'user-membership': user.membership_type,
            'user-status': user.status,
            'user-credits': user.credits_remaining,
            'user-phone': user.phone || '',
            'user-bio': user.bio || '',
            'user-address': user.address || ''
        };

        Object.entries(fields).forEach(([id, value]) => {
            const element = document.getElementById(id);
            if (element) {
                element.value = value;
            }
        });

        // Actualizar título del modal
        const modalTitle = document.querySelector('#user-modal .modal-title');
        if (modalTitle) {
            modalTitle.textContent = user.id ? 'Editar Usuario' : 'Nuevo Usuario';
        }
    }

    populateToolForm(tool) {
        const form = document.getElementById('tool-form');
        if (!form) return;

        // Llenar campos del formulario
        const fields = {
            'tool-id': tool.id,
            'tool-name': tool.name,
            'tool-slug': tool.slug,
            'tool-description': tool.description,
            'tool-category': tool.category,
            'tool-icon': tool.icon,
            'tool-active': tool.active,
            'tool-premium': tool.is_premium
        };

        Object.entries(fields).forEach(([id, value]) => {
            const element = document.getElementById(id);
            if (element) {
                if (element.type === 'checkbox') {
                    element.checked = Boolean(value);
                } else {
                    element.value = value;
                }
            }
        });

        // Actualizar título del modal
        const modalTitle = document.querySelector('#tool-modal .modal-title');
        if (modalTitle) {
            modalTitle.textContent = tool.id ? 'Editar Herramienta' : 'Nueva Herramienta';
        }
    }

    // Función para ver detalles de usuario
    async viewUser(userId) {
        try {
            this.showAlert('Cargando detalles del usuario...', 'info');
            
            const response = await fetch(`/ObelisIA/admin/ajax/get_user.php?id=${userId}`);
            const data = await response.json();
            
            if (data.success) {
                this.showUserDetailsModal(data.user);
            } else {
                throw new Error(data.message || 'Error al cargar usuario');
            }
        } catch (error) {
            console.error('Error viewing user:', error);
            this.showAlert(`Error al cargar usuario: ${error.message}`, 'error');
        }
    }

    showUserDetailsModal(user) {
        // Crear modal de detalles de usuario si no existe
        let modal = document.getElementById('user-details-modal');
        if (!modal) {
            modal = this.createUserDetailsModal();
            document.body.appendChild(modal);
        }

        // Llenar datos
        const content = modal.querySelector('.modal-body');
        content.innerHTML = `
            <div class="user-details">
                <div class="user-header">
                    <div class="user-avatar">
                        ${user.profile_image ? 
                            `<img src="${user.profile_image}" alt="Avatar">` : 
                            '<i class="fas fa-user-circle fa-3x"></i>'
                        }
                    </div>
                    <div class="user-info">
                        <h3>${user.full_name}</h3>
                        <p class="user-email">${user.email}</p>
                        <span class="badge badge-${user.membership_type === 'premium' ? 'warning' : 'secondary'}">
                            ${user.membership_type}
                        </span>
                        <span class="badge badge-${user.status === 'active' ? 'success' : 'danger'}">
                            ${user.status}
                        </span>
                    </div>
                </div>
                
                <div class="user-stats">
                    <div class="stat-item">
                        <strong>Creaciones:</strong> ${user.statistics.total_creations}
                    </div>
                    <div class="stat-item">
                        <strong>Total gastado:</strong> $${user.statistics.total_spent}
                    </div>
                    <div class="stat-item">
                        <strong>Créditos restantes:</strong> ${user.credits_remaining}
                    </div>
                    <div class="stat-item">
                        <strong>Última actividad:</strong> 
                        ${user.statistics.last_activity ? this.formatDate(user.statistics.last_activity) : 'Nunca'}
                    </div>
                </div>

                <div class="user-sections">
                    <div class="section">
                        <h4>Historial de Pagos</h4>
                        <div class="payment-history">
                            ${user.payment_history.length > 0 ? 
                                user.payment_history.map(payment => `
                                    <div class="payment-item">
                                        <div class="payment-info">
                                            <strong>$${payment.amount}</strong>
                                            <span class="badge badge-${this.getPaymentStatusClass(payment.status)}">
                                                ${this.getPaymentStatusText(payment.status)}
                                            </span>
                                        </div>
                                        <div class="payment-details">
                                            ${payment.plan_type} - ${this.formatDate(payment.created_at)}
                                        </div>
                                    </div>
                                `).join('') : 
                                '<p>No hay historial de pagos</p>'
                            }
                        </div>
                    </div>

                    <div class="section">
                        <h4>Creaciones Recientes</h4>
                        <div class="recent-creations">
                            ${user.recent_creations.length > 0 ? 
                                user.recent_creations.map(creation => `
                                    <div class="creation-item">
                                        <div class="creation-info">
                                            <strong>${creation.title || 'Sin título'}</strong>
                                            <span class="creation-type">${creation.type}</span>
                                        </div>
                                        <div class="creation-details">
                                            ${creation.tool_used} - ${this.formatDate(creation.created_at)}
                                        </div>
                                    </div>
                                `).join('') : 
                                '<p>No hay creaciones recientes</p>'
                            }
                        </div>
                    </div>
                </div>
            </div>
        `;

        this.openModal('user-details-modal');
    }

    createUserDetailsModal() {
        const modal = document.createElement('div');
        modal.id = 'user-details-modal';
        modal.className = 'modal';
        modal.innerHTML = `
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Detalles del Usuario</h2>
                    <button type="button" class="btn-close" onclick="adminPanel.closeModal('user-details-modal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Content will be filled dynamically -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="adminPanel.closeModal('user-details-modal')">
                        Cerrar
                    </button>
                </div>
            </div>
        `;
        return modal;
    }

    // Funciones mejoradas para pagos
    async exportPayments() {
        try {
            this.showAlert('Generando reporte de pagos...', 'info');
            
            const filters = this.getCurrentPaymentFilters();
            const params = new URLSearchParams(filters);
            
            const response = await fetch(`/ObelisIA/admin/ajax/export_payments.php?${params}`);
            
            if (response.ok) {
                const blob = await response.blob();
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = `pagos_${new Date().toISOString().split('T')[0]}.csv`;
                document.body.appendChild(a);
                a.click();
                window.URL.revokeObjectURL(url);
                document.body.removeChild(a);
                
                this.showAlert('Reporte exportado correctamente', 'success');
            } else {
                throw new Error('Error al generar reporte');
            }
        } catch (error) {
            console.error('Error exporting payments:', error);
            this.showAlert(`Error al exportar: ${error.message}`, 'error');
        }
    }

    getCurrentPaymentFilters() {
        return {
            filter: document.getElementById('payments-filter')?.value || 'all',
            date_from: document.getElementById('payments-date-from')?.value || '',
            date_to: document.getElementById('payments-date-to')?.value || ''
        };
    }

    // Función para buscar usuarios
    async searchUsers(query) {
        try {
            const params = new URLSearchParams({
                search: query,
                page: 1,
                limit: 20
            });
            
            const response = await fetch(`/ObelisIA/admin/ajax/get_users.php?${params}`);
            const data = await response.json();
            
            if (data.success) {
                this.renderUsersTable(data.users);
                this.updateUsersPagination(data.pagination);
            } else {
                throw new Error(data.message);
            }
        } catch (error) {
            console.error('Error searching users:', error);
            this.showAlert(`Error en búsqueda: ${error.message}`, 'error');
        }
    }

    // Función para cambiar página de usuarios
    async loadUsersPage(page) {
        try {
            const params = new URLSearchParams({
                page: page,
                limit: 20
            });
            
            const response = await fetch(`/ObelisIA/admin/ajax/get_users.php?${params}`);
            const data = await response.json();
            
            if (data.success) {
                this.renderUsersTable(data.users);
                this.updateUsersPagination(data.pagination);
            } else {
                throw new Error(data.message);
            }
        } catch (error) {
            console.error('Error loading users page:', error);
            this.showAlert(`Error al cargar página: ${error.message}`, 'error');
        }
    }

    // Funciones de configuración
    async loadSystemSettings() {
        try {
            const response = await fetch('/ObelisIA/admin/ajax/get_settings.php');
            const data = await response.json();
            
            if (data.success) {
                this.renderSystemSettings(data.settings);
            } else {
                throw new Error(data.message);
            }
        } catch (error) {
            console.error('Error loading settings:', error);
            this.showAlert(`Error cargando configuración: ${error.message}`, 'error');
        }
    }

    renderSystemSettings(settings) {
        const container = document.getElementById('system-settings');
        if (!container) return;

        container.innerHTML = settings.map(setting => `
            <div class="setting-item">
                <div class="setting-info">
                    <label for="setting-${setting.id}">${setting.setting_key}</label>
                    <p class="setting-description">${setting.description}</p>
                </div>
                <div class="setting-control">
                    ${this.renderSettingInput(setting)}
                </div>
            </div>
        `).join('');
    }

    renderSettingInput(setting) {
        const baseAttrs = `id="setting-${setting.id}" data-setting-id="${setting.id}"`;
        
        switch (setting.setting_type) {
            case 'boolean':
                return `
                    <label class="switch">
                        <input type="checkbox" ${baseAttrs} ${setting.setting_value === 'true' ? 'checked' : ''}>
                        <span class="slider"></span>
                    </label>
                `;
            
            case 'number':
                return `<input type="number" ${baseAttrs} value="${setting.setting_value}" class="form-control">`;
            
            case 'json':
                return `<textarea ${baseAttrs} class="form-control" rows="3">${setting.setting_value}</textarea>`;
            
            default:
                return `<input type="text" ${baseAttrs} value="${setting.setting_value}" class="form-control">`;
        }
    }

    async saveSystemSetting(settingId, value) {
        try {
            const response = await fetch('/ObelisIA/admin/ajax/save_setting.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    id: settingId,
                    value: value
                })
            });

            const data = await response.json();
            
            if (data.success) {
                this.showAlert('Configuración guardada', 'success');
            } else {
                throw new Error(data.message);
            }
        } catch (error) {
            console.error('Error saving setting:', error);
            this.showAlert(`Error al guardar: ${error.message}`, 'error');
        }
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    window.adminPanel = new AdminPanel();
});

// Export for global access
window.AdminPanel = AdminPanel;
