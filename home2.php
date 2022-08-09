<?php session_start();
include 'connection.php';
if(!isset($_SESSION["name"]))
{
    header("location:index.php");
    
}
$error = array();
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>home</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="stylesheet" href="css/error.css">
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-center">
          <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="../home.php"><img src="images/log.png" /></a>
      </div>
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="images/index.png" alt="">
            <p class="name"><?php echo $_SESSION["name"];?></p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="home.php">
                  <i class="fa fa-home"></i>
                <span class="menu-title">Home</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/logout.php">
                <i class="fa fa-power-off"></i>
                <span class="menu-title">logout</span>
              </a>
            </li>
           
               <li class="nav-item">
              <a class="nav-link" href="pages/week_plan.php">
                  <i class="fa fa-calendar"></i>
                <span class="menu-title">Week plans</span>
              </a>
            </li>
              
             
            <li class="nav-item">
              <a class="nav-link" href="pages/performance_report.php">
                  <i class="fa fa-tasks"></i>
                <span class="menu-title">performance evaluation report</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="pages/manage_repot.php">
                  <i class="fa fa-tasks"></i>
                <span class="menu-title">manage performance report</span>
              </a>
            </li>
              <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                  <i class="fa fa-gears"></i>
                <span class="menu-title">account setting<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item" active>
                    <a class="nav-link" href="pages/change_username.php"><i class="fa fa-ravelry"></i>
                      Change username
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/change_password.php"><i class="fa fa-ravelry"></i>
                      Change password
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
       <?php include 'error.php'?>
        <!-- partial -->
        <div class="content-wrapper">
          <h3 class="page-heading mb-4">Dashboard</h3>
          
<center> <img src="admin/radiant.gif"></center>
            <br><br><br><br><br><br><br><br><br><center><h1><b>Weekly plan and evaluation system </b></h1><center>
        </div>
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="home.php">weekly plan and evaluation system</a> &copy; 2018
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>

  </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/chart.js"></script>
  <script src="js/maps.js"></script>
</body>

</html>
