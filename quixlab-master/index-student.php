<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>eLab : Skill for a skill </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header nav-color">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <div class="logo">
                        <img src="images/logo-text.png" alt="">
                        </div>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <!--<span class="badge gradient-1 badge-pill badge-primary"></span>-->
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">No New Messages</span>  
                                    
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2 badge-primary">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Notifications</span>  
                                    
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Upcoming tutoring session</h6>
                                                    <span class="notification-text">Jane Doe</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Upcoming tutoring session</h6>
                                                    <span class="notification-text">Jane Doe</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Upcoming tutoring session</h6>
                                                    <span class="notification-text">Jennifer Smith</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li>
                                            <a href="./index.php"><i class="icon-lock"></i> <span>Change to Teaching</span></a>
                                        </li>
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../index.html">Home Page</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Apps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html">Profile</a></li>
                        </ul>
                    </li>
    
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body content-student">

            <div class="container-fluid mt-3">
                <div class="row">
                <div class="cd-switch">
                <h1 class="heading-skill">What do you want to learn today?</h1>
                <div id="cover">
                <form method="get" action="../chat.php">
                    <div class="tb">
                    <div class="td searchText"><input type="text" placeholder="Search" required></div>
                    <div class="td" id="s-cover">
                        <button id="skill-search" type="submit">
                        <div id="s-circle"></div>
                        <span></span>
                        </button>
                    </div>
                    </div>
                </form>
                </div>
            </div> 


                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Points remaining</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">40</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Skills gained</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">5</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">New Skills gained in the past week </h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">2</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-flag"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Points used</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">30</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                

                
                </div>

                <div class="row skill-view">
                        <div class="col-lg-3 col-md-6 ">
                            <div class="card card-widget">
                                <div class="card-body">
                                    <h5 class="text-muted">Learned Skills</h5>
                                    <h2 class="mt-4">8</h2>
                                    <span>Amount of Skills</span>
                                    <div class="mt-4">
                                        <h4>8 Clients</h4>
                                        <h6>English <span class="pull-right">80%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-primary" style="width: 80%;" role="progressbar"><span class="sr-only">80% </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4>4 Clients</h4>
                                        <h6 class="m-t-10 text-muted">iOS Programming <span class="pull-right">70%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-success" style="width: 70%;" role="progressbar"><span class="sr-only">50%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4>2 Clients</h4>
                                        <h6 class="m-t-10 text-muted">PhP Programming<span class="pull-right">60%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-warning" style="width: 60%;" role="progressbar"><span class="sr-only">20% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-0">
                                    <h4 class="card-title px-4 mb-3">Todo</h4>
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                                <ul id="todo_list">
                                                    <li><label><input type="checkbox"><i></i><span>Get up</span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>Stand up</span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox"><i></i><span>Don't give up the fight.</span><a href='#' class="ti-trash"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>Do something else</span><a href='#' class="ti-trash"></a></label></li>
                                                </ul>
                                            </div>
                                            <div class="px-4">
                                                <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="#">Kofrichi</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>