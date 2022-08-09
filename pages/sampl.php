<?php session_start();

if(!isset($_SESSION["name"]))
{
    header("location:index.php");
    
}
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin</title>
  <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:../partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="../home.php"><img src="../images/logo_star_black.png" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          
        </ul>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="../images/index.png" alt="">
            <p class="name"><?php echo $_SESSION["name"];?></p>
            <p class="designation">Manager</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="../home.php">
                  <i class="fa fa-home"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                <i class="fa fa-power-off"></i>
                <span class="menu-title">logout</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/index.html">
                  <i class="fa fa-calendar-o"></i>
                <span class="menu-title">week plan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-elements/buttons.html">
                  <i class="fa fa-clipboard"></i>
                <span class="menu-title">evaluation report</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/index.html">
                  <i class="fa fa-calendar"></i>
                <span class="menu-title">My week plans</span>
              </a>
            </li>
              <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                  <i class="fa fa-gears"></i>
                <span class="menu-title">account setting<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/blank_page.html">
                      Change username
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/500.html">
                      Change password
                    </a>
                  </li>
                </ul>
              </div>
          </ul>
        </nav>

        <!-- partial -->
        <div class="content-wrapper">
          <h3 class="page-heading mb-4">Widgets</h3>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <i class="fa fa-users float-right icon-grey-big"></i>
                  </div>
                  <h4 class="card-title font-weight-normal text-success">45465</h4>
                  <h6 class="card-subtitle mb-4">Visitors</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-success-gadient" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <i class="fa fa-shopping-cart float-right icon-grey-big"></i>
                  </div>
                  <h4 class="card-title font-weight-normal text-info">7895</h4>
                  <h6 class="card-subtitle mb-4">Sales</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info-gadient" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <i class="fa fa-bookmark float-right icon-grey-big"></i>
                  </div>
                  <h4 class="card-title font-weight-normal text-warning">1569</h4>
                  <h6 class="card-subtitle mb-4">Orders</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-warning-gadient" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <i class="fa fa-pie-chart float-right icon-grey-big"></i>
                  </div>
                  <h4 class="card-title font-weight-normal text-danger">$ 63259</h4>
                  <h6 class="card-subtitle mb-4">Revenue</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-danger-gadient" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title font-weight-normal text-success">7896</h4>
                  <p class="card-text">Visitors</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title font-weight-normal text-info">5623</h4>
                  <p class="card-text">Sales</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title font-weight-normal text-warning">1236</h4>
                  <p class="card-text">Orders</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title font-weight-normal text-danger">$ 7832</h4>
                  <p class="card-text">Revenue</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title font-weight-normal text-info">7896</h6>
                  <h6 class="card-subtitle mb-4 text-muted">Visitors</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title font-weight-normal text-info">7523</h6>
                  <h6 class="card-subtitle mb-4 text-muted">Sales</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title font-weight-normal text-info">6932</h6>
                  <h6 class="card-subtitle mb-4 text-muted">Orders</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title font-weight-normal text-info">$ 54123</h6>
                  <h6 class="card-subtitle mb-4 text-muted">Revenue</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title font-weight-normal text-info">23658</h6>
                  <h6 class="card-subtitle mb-4 text-muted">New clients</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title font-weight-normal text-info">8965</h6>
                  <h6 class="card-subtitle mb-4 text-muted">Comments</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Global Sales by Top Locations</h5>
                  <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="../images/flags/US.png">
                              </div>
                            </td>
                            <td>USA</td>
                            <td class="text-right">
                              2.920
                            </td>
                            <td class="text-right">
                              53.23%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="../images/flags/DE.png">
                              </div>
                            </td>
                            <td>Germany</td>
                            <td class="text-right">
                              1.300
                            </td>
                            <td class="text-right">
                              20.43%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="../images/flags/AU.png">
                              </div>
                            </td>
                            <td>Australia</td>
                            <td class="text-right">
                              760
                            </td>
                            <td class="text-right">
                              10.35%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="../images/flags/GB.png">
                              </div>
                            </td>
                            <td>United Kingdom</td>
                            <td class="text-right">
                              690
                            </td>
                            <td class="text-right">
                              7.87%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="../images/flags/RO.png">
                              </div>
                            </td>
                            <td>Romania</td>
                            <td class="text-right">
                              600
                            </td>
                            <td class="text-right">
                              5.94%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="../images/flags/BR.png">
                              </div>
                            </td>
                            <td>Brasil</td>
                            <td class="text-right">
                              550
                            </td>
                            <td class="text-right">
                              4.34%
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12">
                      <div id="map" style="min-height:300px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-deck">
            <div class="card col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4" style="min-height:395px;">
              <div class="card-body">
                <h5 class="card-title mb-4">Testimonial</h5>
                <div class="row d-flex align-items-center justify-items-center flex-column">
                  <div class="text-center">
                    <img src="../images/faces/face8.jpg" class="rounded-circle" width="100" height="100" />
                  </div>
                  <div class="text-center mt-3">
                    <i class="fa fa-quote-right icon-grey-big"></i>
                  </div>
                  <p class="font-italic text-muted mt-3 mb-4 text-center">
                    Your products, all the kits that I have downloaded from your site and worked with are sooo cool!. Keep up the great work!
                  </p>
                  <h5 class="text-center bolder">Tom Swayer</h5>
                  <h6 class="text-center text-muted">Co-founder</h6>
                </div>
              </div>
            </div>
            <div class="card col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4" style="min-height:395px;">
              <div class="card-body">
                <h5 class="card-title mb-4">Employees</h5>
                <table class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Salary</th>
                      <th>Country</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Bob Williams</td>
                      <td>$23,566</td>
                      <td>USA</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Mike Tyson</td>
                      <td>$10,200</td>
                      <td>Canada</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Tim Sebastian</td>
                      <td>$32,190</td>
                      <td>Netherlands</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Philip Morris</td>
                      <td>$31,123</td>
                      <td>Korea, South</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Minerva Hooper</td>
                      <td>$23,789</td>
                      <td>South Africa</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Cooper</td>
                      <td>$27,789</td>
                      <td>Canada</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Philip</td>
                      <td>$13,789</td>
                      <td>South Africa</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Star Admin</a> &copy; 2017
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>

  </div>

  <script src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/misc.js"></script>
  <script src="../js/chart.js"></script>
  <script src="../js/maps.js"></script>
</body>

</html>
