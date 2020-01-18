<?php  
    session_start();
    include("functions.php");
    if($_SESSION['login'] !==true){
      header('location:../../../../../index.php');
    }
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>Guest User</title>
    
    <link rel="apple-touch-icon" href="../../../assets2/images/samcis.png">
    <link rel="shortcut icon" href="../../../assets2/images/samcis.png">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../../../global/global2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../global/global2/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../../../assets2/css/site.min.css">
    <link rel="stylesheet" type="text/css" href="../../../../global/css/style.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="../../../../global/global2/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../../../../global/global2/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../../../../global/global2/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../../../../global/global2/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../../../../global/global2/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../../../../global/global2/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="../../../../global/global2/vendor/waves/waves.css">
        <link rel="stylesheet" href="../../../../global/global2/vendor/chartist/chartist.css">
        <link rel="stylesheet" href="../../../../global/global2/vendor/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="../../../../global/global2/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
        <link rel="stylesheet" href="../../../../global/global2/vendor/jquery-tabledit/jquery-tabledit.css">
        <link rel="stylesheet" href="../../../assets2/examples/css/dashboard/v1.css">
        <link rel="stylesheet" href="../../../../global/global2/vendor/tablesaw/tablesaw.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="../../../../global/global2/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="../../../../global/global2/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <link rel="stylesheet" href="../../../../global/global2/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../../../../global/global2/fonts/brand-icons/brand-icons.min.css">
    <link rel="stylesheet" href="../../../../global/global2/fonts/7-stroke/7-stroke.css">
    <link rel="stylesheet" href="../../../../global/global2/fonts/weather-icons/weather-icons.css">
    <link rel="stylesheet" href="../../../../global/global2/fonts/mfglabs/mfglabs.css">
    <link rel="stylesheet" href="../../../../global/global2/fonts/open-iconic/open-iconic.css">
    <link rel="stylesheet" href="../../../../global/global2/fonts/ionicons/ionicons.css">
    
    <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="../../../../global/global2/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon md-more" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
          <img class="navbar-brand-logo" src="../../../assets2/images/samcis.png" title="Remark">
          <span class="navbar-brand-text hidden-xs-down"> Guest User</span>
        </div>
      </div>
    
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
          </ul>
          <!-- End Navbar Toolbar -->
    
          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            <li class="nav-item dropdown">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button">
                <span class="avatar avatar-online">
                  <img src="../../../../global/global2/portraits/5.jpg" alt="...">
                  <i></i>
                </span>
              </a>
             <div class="dropdown-menu" role="menu">
                
          <form method="post" class="dropdown-item">
            <button name="logout" class='btn btn-danger my-2'>Logout</button>
          </form>
          <?php
          if(isset($_POST['logout'])) {
            session_destroy();
            echo '<script type="text/javascript">';
            echo 'alert("You have been succesfully logout");';
            echo 'window.location.href = "../../../../../index.php";';
            echo '</script>';
          }
          ?>

          </ul>
          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->

      </div>
    </nav>    
    <div class="site-menubar">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">General</li>
              <li class="site-menu-item has-sub">
                <a href="../guest_user.php">
                        <i class="site-menu-icon icon wb-home" aria-hidden="true"></i>
                        <span class="site-menu-title">Home</span>
                </a>
              </li>
              <li class="site-menu-category">Facilities</li>
              <li class="site-menu-item has-sub">
                <a href="plaza.php">
                        <i class="site-menu-icon icon md-store" aria-hidden="true"></i>
                        <span class="site-menu-title">Devesse Plaza</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="amphi.php">
                        <i class="site-menu-icon icon md-balance" aria-hidden="true"></i>
                        <span class="site-menu-title">Amphitheater</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="avr.php">
                        <i class="site-menu-icon icon ml-display-screen" aria-hidden="true"></i>
                        <span class="site-menu-title">AVR</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="pool.php">
                        <i class="site-menu-icon icon io-droplet" aria-hidden="true"></i>
                        <span class="site-menu-title">Swimming Pool</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="oval.php">
                        <i class="site-menu-icon icon md-flag" aria-hidden="true"></i>
                        <span class="site-menu-title">Oval</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="v_court.php">
                        <i class="site-menu-icon icon pe-ball" aria-hidden="true"></i>
                        <span class="site-menu-title">Volleyball Court</span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="b_court.php">
                        <i class="site-menu-icon icon ion-ios-basketball" aria-hidden="true"></i>
                        <span class="site-menu-title">Basketball Court</span>
                </a>
              </li>
              <li class="site-menu-category">Reservation</li>
              <li class="site-menu-item has-sub">
                <a href="request.php">
                        <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                        <span class="site-menu-title">Request</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        </div>
      </div>
    
      </div>
    </div>

    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
        <div data-plugin="matchHeight" data-by-row="true">


            <!-- Panel Swipe -->
            <div class="panel">
              <header class="panel-heading">
                <h3 class="panel-title">Reservation Request</h3>
              </header>
              <div class="panel-body">
                <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
                      <thead>
                        <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Mobile Number</th>
                          <th>Organization</th>
                          <th>Position</th>
                          <th>Adviser</th>
                          <th>Event Name</th>
                          <th>No. of Participants</th>
                          <th>Faculty Department</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th>Start Time</th>
                          <th>End Time</th>
                          <th>Status</th>
                        </tr>
                      </thead>

                      <tbody>

                      </tbody>
                      
                    </table>
              </div>
            </div>
            <!-- End Panel Swipe -->

          </div>
      </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-right">
        © 2019 Facility Reservation System.
      </div>
    </footer>
    <!-- Core  -->
    <script src="../../../../global/global2/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../../../../global/global2/vendor/jquery/jquery.js"></script>
    <script src="../../../../global/global2/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../../../../global/global2/vendor/bootstrap/bootstrap.js"></script>
    <script src="../../../../global/global2/vendor/animsition/animsition.js"></script>
    <script src="../../../../global/global2/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../../../../global/global2/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../../../../global/global2/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../../../../global/global2/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="../../../../global/global2/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="../../../../global/global2/vendor/switchery/switchery.js"></script>
    <script src="../../../../global/global2/vendor/intro-js/intro.js"></script>
    <script src="../../../../global/global2/vendor/screenfull/screenfull.js"></script>
    <script src="../../../../global/global2/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="../../../../global/global2/vendor/chartist/chartist.min.js"></script>
        <script src="../../../../global/global2/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
        <script src="../../../../global/global2/vendor/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="../../../../global/global2/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../../../../global/global2/vendor/matchheight/jquery.matchHeight-min.js"></script>
        <script src="../../../../global/global2/vendor/peity/jquery.peity.min.js"></script>
        <script src="../../../../global/global2/vendor/jquery-tabledit/jquery.tabledit.min.js"></script>
        <script src="../../../../global/global2/vendor/tablesaw/tablesaw.jquery.js"></script>
    
    <!-- Scripts -->
    <script src="../../../../global/global2/js/Component.js"></script>
    <script src="../../../../global/global2/js/Plugin.js"></script>
    <script src="../../../../global/global2/js/Base.js"></script>
    <script src="../../../../global/global2/js/Config.js"></script>
    
    <script src="../../../assets2/js/Section/Menubar.js"></script>
    <script src="../../../assets2/js/Section/GridMenu.js"></script>
    <script src="../../../assets2/js/Section/Sidebar.js"></script>
    <script src="../../../assets2/js/Section/PageAside.js"></script>
    <script src="../../../assets2js/Plugin/menu.js"></script>
    
    <script src="../../../../global/global2/js/config/colors.js"></script>
    <script src="../../../assets2/js/config/tour.js"></script>
    <script>Config.set('assets', '../assets');</script>
    
    <!-- Page -->
    <script src="../../../assets2/js/Site.js"></script>
    <script src="../../../../global/global2/js/Plugin/asscrollable.js"></script>
    <script src="../../../../global/global2/js/Plugin/slidepanel.js"></script>
    <script src="../../../../global/global2/js/Plugin/switchery.js"></script>
        <script src="../../../../global/global2/js/Plugin/matchheight.js"></script>
        <script src="../../../../global/global2/js/Plugin/jvectormap.js"></script>
        <script src="../../../../global/global2/js/Plugin/peity.js"></script>
        <script src="../../../../global/global2/js/Plugin/tablesaw.js"></script>
    
        <script src="../../../assets2/examples/js/dashboard/v1.js"></script>
        <script src="../../../assets2/examples/js/tables/jqtabledit.js"></script>

    
  </body>
</html>
