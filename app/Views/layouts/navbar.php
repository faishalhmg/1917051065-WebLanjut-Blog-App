
<body>
<div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="../dashboard">
                            <h2>COVID</h2>
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                            <h2><?=$title?></h2>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <span>USER</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                   
                                    <li>
                                    <?php if(logged_in()) :?>
                                            <a href="/logout"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                            <?php else :?>
                                            <a href="/login"><i class="ti-layout-sidebar-left"></i>login</a>
                                            <?php endif;?>
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <div class="user-details">
                                        <span>user</span>
                                        <span id="more-details">Admin<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <?php if(logged_in()) :?>
                                            <a href="/logout"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                            <?php else :?>
                                            <a href="/login"><i class="ti-layout-sidebar-left"></i>login</a>
                                            <?php endif;?>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                          
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="/dashboard">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <a href="/dataPasien">
                                        <span class="pcoded-micon"><i class="ti-book"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Data Pasien</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <a href="/pasien">
                                        <span class="pcoded-micon"><i class="ti-book"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Ubah Data Pasien</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <a href="/daftarWilayah">
                                        <span class="pcoded-micon"><i class="ti-book"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Data Wilayah</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                               
                        </div>
                    </nav>
        
       
        
      