<?php
$current_page = basename($_SERVER['REQUEST_URI'], ".php");
?>

<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav mt-4">
                    <li class="<?= $current_page == 'dashboard' ? 'active' : '' ?>">
                        <a href="dashboard"><i class="menu-icon fa fa-laptop"></i>Dashboard</a>
                    </li>
                    <li class="<?= $current_page == 'admin-appointments' ? 'active' : '' ?>">
                        <a href="admin-appointments"><i class="menu-icon fa-regular fa-calendar-check"></i>Appointments</a>
                    </li><hr>
                    <li class="<?= $current_page == 'admin-patients' ? 'active' : '' ?>">
                        <a href="admin-patients"><i class="menu-icon fa-solid fa-users"></i>Patients</a>
                    </li>
                    <li class="<?= $current_page == 'admin-packages' ? 'active' : '' ?>">
                        <a href="admin-packages"><i class="menu-icon fa-solid fa-receipt"></i>Packages</a>
                    </li>
                    <li class="<?= $current_page == 'admin-products' ? 'active' : '' ?>">
                        <a href="admin-products"><i class="menu-icon fa-solid fa-boxes-packing"></i>Products</a>
                    </li>
                    <li class="menu-item-has-children dropdown <?= $current_page == 'orders' ? 'active' : '' ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa-solid fa-box-open"></i>Orders</a>
                        <ul class="sub-menu children dropdown-menu w-100" style="border-radius: 10px; margin-bottom: 10px;">
                            <li><i class="menu-icon fa-solid fa-cubes"></i><a href="new-orderes">New orders</a></li>
                            <li><i class="menu-icon fa-solid fa-truck-fast"></i><a href="shipped-orderes">Shipped orders</a></li>
                            <li><i class="menu-icon fa-solid fa-box-open"></i><a href="delivered-orderes">Delivered orders</a></li>
                        </ul>
                    </li>
                    <li class="<?= $current_page == 'admin-testimonials' ? 'active' : '' ?>">
                        <a href="admin-testimonials"><i class="menu-icon fa-regular fa-comments"></i>Testimonials</a>
                    </li>
                    <li class="<?= $current_page == 'admin-contacts' ? 'active' : '' ?>">
                        <a href="admin-contacts"><i class="menu-icon fa-regular fa-address-card"></i>Contacts</a>
                    </li>
                    <li class="<?= $current_page == 'admin-history' ? 'active' : '' ?>">
                        <a href="admin-history"><i class="menu-icon fa-solid fa-clock-rotate-left"></i>Login History</a>
                    </li>
                    
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="dashboard"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Notification #1 .</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Notification #2 .</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Notification #3 .</p>
                                </a>
                            </div>
                        </div>

                        
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>