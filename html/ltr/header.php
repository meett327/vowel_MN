<?php
session_start();
// include('../index.php');
// include('link_sr.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
</head>
<body>
<div class="navbar">
    <div class="navbar-inner">
        <div class="sidebar-pusher">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="logo-box">
            <a href="Dashboard" class="logo-text"><span>VOWEL</span></a>
        </div><!-- Logo Box -->
        <div class="search-button">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i
                    class="fa fa-search"></i></a>
        </div>
        <div class="topmenu-outer">
            <div class="top-menu">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i
                                class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i
                                class="fa fa-diamond"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"
                            class="waves-effect waves-button waves-classic toggle-fullscreen"><i
                                class="fa fa-expand"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic"
                            data-toggle="dropdown">
                            <i class="fa fa-cogs"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                            <li class="li-group">
                                <ul class="list-unstyled">
                                    <li class="no-link" role="presentation">
                                        Fixed Header
                                        <div class="ios-switch pull-right switch-md">
                                            <input type="checkbox" class="js-switch pull-right fixed-header-check"
                                                checked>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="li-group">
                                <ul class="list-unstyled">
                                    <li class="no-link" role="presentation">
                                        Fixed Sidebar
                                        <div class="ios-switch pull-right switch-md">
                                            <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                        </div>
                                    </li>
                                    <li class="no-link" role="presentation">
                                        Horizontal bar
                                        <div class="ios-switch pull-right switch-md">
                                            <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                        </div>
                                    </li>
                                    <li class="no-link" role="presentation">
                                        Toggle Sidebar
                                        <div class="ios-switch pull-right switch-md">
                                            <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                        </div>
                                    </li>
                                    <li class="no-link" role="presentation">
                                        Compact Menu
                                        <div class="ios-switch pull-right switch-md">
                                            <input type="checkbox" class="js-switch pull-right compact-menu-check">
                                        </div>
                                    </li>
                                    <li class="no-link" role="presentation">
                                        Hover Menu
                                        <div class="ios-switch pull-right switch-md">
                                            <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="li-group">
                                <ul class="list-unstyled">
                                    <li class="no-link" role="presentation">
                                        Boxed Layout
                                        <div class="ios-switch pull-right switch-md">
                                            <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="li-group">
                                <ul class="list-unstyled">
                                    <li class="no-link" role="presentation">
                                        Choose Theme Color
                                        <div class="color-switcher">
                                            <a class="colorbox color-blue" href="?theme=blue" title="Blue Theme"
                                                data-css="blue"></a>
                                            <a class="colorbox color-green" href="?theme=green" title="Green Theme"
                                                data-css="green"></a>
                                            <a class="colorbox color-red" href="?theme=red" title="Red Theme"
                                                data-css="red"></a>
                                            <a class="colorbox color-white" href="?theme=white" title="White Theme"
                                                data-css="white"></a>
                                            <a class="colorbox color-purple" href="?theme=purple" title="purple Theme"
                                                data-css="purple"></a>
                                            <a class="colorbox color-dark" href="?theme=dark" title="Dark Theme"
                                                data-css="dark"></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i
                                class="fa fa-search"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic"
                            data-toggle="dropdown"><i class="fa fa-envelope"></i><span
                                class="badge badge-success pull-right">4</span></a>
                        <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                            <li>
                                <p class="drop-title">You have 4 new messages !</p>
                            </li>
                            <li class="dropdown-menu-list slimscroll messages">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <div class="msg-img">
                                                <div class="online on"></div><img class="img-circle"
                                                    src="../../assets/images/avatar2.png" alt="">
                                            </div>
                                            <p class="msg-name">Sandra Smith</p>
                                            <p class="msg-text">Hey ! I'm working on your project</p>
                                            <p class="msg-time">3 minutes ago</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="msg-img">
                                                <div class="online off"></div><img class="img-circle"
                                                    src="../../assets/images/avatar4.png" alt="">
                                            </div>
                                            <p class="msg-name">Amily Lee</p>
                                            <p class="msg-text">
                                                <?php echo $_SESSION['username']; ?>
                                            </p>
                                            <p class="msg-time">8 minutes ago</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="msg-img">
                                                <div class="online off"></div><img class="img-circle"
                                                    src="../../assets/images/avatar3.png" alt="">
                                            </div>
                                            <p class="msg-name">Christopher Palmer</p>
                                            <p class="msg-text">See you soon !</p>
                                            <p class="msg-time">56 minutes ago</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="msg-img">
                                                <div class="online on"></div><img class="img-circle"
                                                    src="../../assets/images/avatar5.png" alt="">
                                            </div>
                                            <p class="msg-name">Nick Doe</p>
                                            <p class="msg-text">Nice to meet you</p>
                                            <p class="msg-time">2 hours ago</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="msg-img">
                                                <div class="online on"></div><img class="img-circle"
                                                    src="../../assets/images/avatar2.png" alt="">
                                            </div>
                                            <p class="msg-name">Sandra Smith</p>
                                            <p class="msg-text">Hey ! I'm working on your project</p>
                                            <p class="msg-time">5 hours ago</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="msg-img">
                                                <div class="online off"></div><img class="img-circle"
                                                    src="../../assets/images/avatar4.png" alt="">
                                            </div>
                                            <p class="msg-name">Amily Lee</p>
                                            <p class="msg-text">Hi David !</p>
                                            <p class="msg-time">9 hours ago</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic"
                            data-toggle="dropdown"><i class="fa fa-bell"></i><span
                                class="badge badge-success pull-right">3</span></a>
                        <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                            <li>
                                <p class="drop-title">You have 3 pending tasks !</p>
                            </li>
                            <li class="dropdown-menu-list slimscroll tasks">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <div class="task-icon badge badge-success"><i class="icon-user"></i></div>
                                            <span class="badge badge-roundless badge-default pull-right">1min ago</span>
                                            <p class="task-details">New user registered.</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="task-icon badge badge-danger"><i class="icon-energy"></i></div>
                                            <span class="badge badge-roundless badge-default pull-right">24min
                                                ago</span>
                                            <p class="task-details">Database error.</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="task-icon badge badge-info"><i class="icon-heart"></i></div>
                                            <span class="badge badge-roundless badge-default pull-right">1h ago</span>
                                            <p class="task-details">Reached 24k likes</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic"
                            data-toggle="dropdown">
                            <span class="user-name">
                                <?php echo $_SESSION['username']; ?><i class="fa fa-angle-down"></i>
                            </span>
                            <img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40"
                                alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-list" role="menu">
                            <li role="presentation"><a href="profile"><i class="fa fa-user"></i>Profile</a></li>
                            <li role="presentation"><a href="add_users"><i class="fas fa-users"></i>User Managment</a></li>
                            <li role="presentation"><a href="department"><i class="fa fa-sitemap"></i>Department Panel</a></li>
                            <li role="presentation"><a href="designation"><i class="fa fa-user-tie"></i>Designation Panel</a></li>
                            <li role="presentation"><a href="mail_panel"><i class="fa fa-envelope"></i>Mail Panel</a></li>
                            <li role="presentation"><a href="company_profile"><i class="fa fa-building"></i>Company Profile</a></li>
                            <li role="presentation"><a href="calendar.html"><i class="fa fa-calendar"></i>Calendar</a>
                            </li>
                            <!-- <li role="presentation"><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox<span
                                        class="badge badge-success pull-right">4</span></a></li> -->
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock screen</a>
                            </li>
                            <li role="presentation"><a href="login.html"><i class="fa fa-sign-out m-r-xs"></i>Log
                                    out</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="login.html" class="log-out waves-effect waves-button waves-classic">
                            <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic" id="showRight">
                            <i class="fa fa-comments"></i>
                        </a>
                    </li>
                </ul><!-- Nav -->
            </div><!-- Top Menu -->
        </div>
    </div>
</div><!-- Navbar -->
</body>
</html>


<!-- Styles -->
<!-- <link href='http://fonts.googleapis.
    com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet" />
<link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet" />
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css" /> -->

<!-- Theme Styles -->
<!-- <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css" />
<link href="assets/css/custom.css" rel="stylesheet" type="text/css" />

<script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
<script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script> -->