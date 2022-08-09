<?php session_start();

if(!isset($_SESSION["name"]))
{
    header("location:../index.php");
    
}
$error = array();
include'../connection.php';
if(isset($_GET["id"]))
{
  $id=$_GET["id"];
    $sql="delete from report where id='$id'";
    $query=mysqli_query($con,$sql);
    if(!$sql){
        array_push($error,"unsuccessfully deleted");
    }
    else{
        array_push($error,"successfully delete");
    }
}
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Performance report</title>
  <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="shortcut icon" href="../images/favicon.png" />
    <link rel="stylesheet" href="../css/error.css">
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:../partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="../home.php"><img src="../images/log.png" /></a>
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
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="../home.php">
                  <i class="fa fa-home"></i>
                <span class="menu-title">Home</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                <i class="fa fa-power-off"></i>
                <span class="menu-title">logout</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="week.php">
                  <i class="fa fa-calendar-o"></i>
                <span class="menu-title">week plan</span>
              </a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="myplan.php">
                  <i class="fa fa-calendar"></i>
                <span class="menu-title">My week plans</span>
              </a>
            </li>
             
            
           
              <li class="nav-item">
              <a class="nav-link" href="performance.php">
                  <i class="fa fa-tasks"></i>
                <span class="menu-title">performance evaluation report</span>
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
                    <a class="nav-link" href="changeusername.php"><i class="fa fa-ravelry"></i>
                      Change username
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="changepassword.php"><i class="fa fa-ravelry"></i>
                      Change password
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>

        <!-- partial -->
        <div class="content-wrapper">
            <?php include '../error.php'?>
            <h3>Performance report</h3>
           
            
            
               <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
                      <thead>
                        <tr class="text-primary">
                           <th>No</th>
                          <th>Name</th>
                          <th>Date</th>
                          
                          
                        </tr>
                      </thead>
                             <?php
            include '../connection.php';
            $name=$_SESSION["name"];
            $sql="select * from report where name='$name'";
            $query=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($query)){
            ?>
                    <tbody>
                      <tr>
                         <td><?php echo $row["id"];?></td>
                          <td><?php echo $row["name"];?></td>
                          <td><?php echo $row["date"];?></td>
                         
                          <td><a href="viewperformance.php?id2=<?php echo $row["id"];?>" class="btn btn-primary btn-sm">View</a></td>
                          
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div> 
           
            
            
            
            
        </div>
        <!-- partial:../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
               <a href="../home.php">weekly plan and evaluation system</a> &copy; 2018
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
