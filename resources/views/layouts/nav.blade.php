<nav class="main-header navbar navbar-expand accent-navy navbar-light navbar-white">
    <!-- Left-Navbar-Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link toastsDefaultFullImage">Contact</a>
        </li>
    </ul>
    <!-- End-Left-Navbar-Links -->

    <!-- Search-Form -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
            </button>
        </div>
        </div>
    </form>
    <!-- End-Search-Form -->

    <!-- Right-Navbar-Links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages-Dropdown-Menu -->
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-success navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="messages_message.html" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
                <img src="{{asset('assets/adminlte/dist/img/user1-128x128.jpg')}}" alt="User Avatar"
                class="img-size-50 mr-3 img-circle" />
                <div class="media-body">
                <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted">
                    <i class="far fa-clock mr-1"></i> 4 Hours Ago
                </p>
                </div>
            </div>
            <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="messages.html" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
        </li>
        <!-- End-Messages-Dropdown-Menu -->

        <!-- Notifications-Dropdown-Menu -->
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-primary navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="messages_message.html" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="announcement.html" class="dropdown-item">
            <i class="fas fa-bullhorn mr-2"></i> 3 new announcement
            <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="notifications.html" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
        </li>
        <!-- End-Notifications-Dropdown-Menu -->

        <!-- Settings-UI -->
        <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
        </a>
        </li>
        <!-- End-Settings-UI -->
    </ul>
    <!-- End-Right-Navbar-Links -->
</nav>