<aside class="main-sidebar elevation-4 sidebar-light-navy">
    <!-- Brand-Logo -->
    <a href="dashboard.html" class="brand-link navbar-light">
        <img src="{{asset('assets/adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3" style="opacity: 0.8;" />
        <span class="brand-text font-weight-light">HR-POS V1.0.0</span>
    </a>
    <!-- End-Brand-Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar-User-Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('assets/adminlte/dist/img/user4-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image" />
        </div>
        <div class="info">
            <a href="profile.html" class="d-block">Hasan Nashar</a>
        </div>
        </div>
        <!-- End-Sidebar-User-Panel -->

        <!-- Sidebar-Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
            <a href="dashboard.html" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Dashboard
                </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa fa-shopping-cart"></i>
                <p>
                Transaction
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    Entry
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="entry_sale.html" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Entry Sale</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="entry_purchase.html" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Entry Purchase</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    Data
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="sale_data.html" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Sale Data</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="purchase_data.html" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Purchase Data</p>
                    </a>
                    </li>
                </ul>
                </li>
            </ul>
            </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-database"></i>
                <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    Products Data
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="product_item.html" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Items</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="product_category.html" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Categories</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="product_unit.html" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Units</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item">
                <a href="supplier.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Suppliers Data</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="customer.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Customers Data</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="bank.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Banks Data</p>
                </a>
                </li>
            </ul>
            </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-tie"></i>
                <p>
                User/Employee
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="employee.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Employee Data</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="employee_history_login.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Employee History Login</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="employee_log_activity.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Employee Log Activity</p>
                </a>
                </li>
            </ul>
            </li>
            <li class="nav-item">
            <a href="announcement.html" class="nav-link">
                <i class="nav-icon fas fa-bullhorn"></i>
                <p>
                Annonucement
                </p>
            </a>
            </li>
            <li class="nav-header">Reports</li>
            <li class="nav-item">
            <a href="report_sale.html" class="nav-link">
                <i class="nav-icon fas fa-money-check-alt"></i>
                <p>
                Sale
                </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="report_purchase.html" class="nav-link">
                <i class="nav-icon fa fa-credit-card"></i>
                <p>
                Purchase
                </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="report_chart.html" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                Chart
                </p>
            </a>
            </li>
            <li class="nav-header">Helper</li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-wrench"></i>
                <p>
                Tools
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="tool_generate_barcode.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Generate Barcode</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="tool_generate_qrcode.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Generate QRCode</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="tool_backup_data.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Backup Data</p>
                </a>
                </li>
            </ul>
            </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Settings
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="menu_management.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Menu Management</p>
                </a>
                </li>
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                    User
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="user_level.html" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>User Level</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="user_access.html" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>User Access</p>
                    </a>
                    </li>
                </ul>
                </li>
            </ul>
            </li>
            <li class="nav-header"></li>
            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-moon"></i>
                <p>
                Dark Mode
                </p>
            </a>
            </li>
        </ul>
        </nav>
        <!-- End-Sidebar-Menu -->
    </div>
    <!-- End-Sidebar -->
    </aside>