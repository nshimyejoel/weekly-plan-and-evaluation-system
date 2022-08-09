<?php session_start();

if(!isset($_SESSION["name"]))
{
    header("location:../index.php");
    
}
$error = array();
include'../connection.php';
if(isset($_POST["send"]))
{
    $name=$_POST["name"];
    $date=date("d-m-Y h:m:s");
    $quality=$_POST["quality"];
    $work=$_POST["work"];
    $attitude=$_POST["attitude"];
    $job =$_POST["job"];
    $dep=$_SESSION["dep"];
    $query="insert into report (name,date,quality,work,attitude,job,depid) values('$name','$date','$quality','$work','$attitude','$job','$dep')";
    mysqli_query($con,$query);
    if(!$query){
        array_push($error,"unsuccessfully sent");
    }
    else{
        array_push($error,"successfully sent");
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
              <a class="nav-link" href="../home2.php">
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
              <a class="nav-link" href="week_plan.php">
                  <i class="fa fa-calendar"></i>
                <span class="menu-title"> week plans</span>
              </a>
            </li>
              
             
           
              <li class="nav-item">
              <a class="nav-link" href="performance_report.php">
                  <i class="fa fa-tasks"></i>
                <span class="menu-title">performance evaluation report</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="manage_repot.php">
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
                    <a class="nav-link" href="change_username.php"><i class="fa fa-ravelry"></i>
                      Change username
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="change_password.php"><i class="fa fa-ravelry"></i>
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
           
            
            <div class="panel-body">						
<form action="" method="post" >
<div class="form-group">
<label>Employee's name</label>
    <select name="name" required="required" autocomplete="off">
        <option value="">select employee name</option>
    <?php
    include '../../connection.php';
            $id=$_SESSION["dep"];
      $sql="select fullnames from user where depid='$id'";
    $result=mysqli_query($con,$sql);
      while($rows=mysqli_fetch_array($result)){
         ?> 
    
        <option value="<?php echo $rows["fullnames"];?>"><?php echo $rows["fullnames"];?></option>
        <?php }?>
    
    </select>
</div>

														

    <div class="form-group">
<label>Quality of work</label>
<p>How well does the employee’s output meet the quality standards for this job? Consider accuracy, thoroughness and neatness. If a major part of
this job is of a service nature, consider how acceptable the service is.</p>

        <p>Comment</p>
        <input type="text" name="quality" class="form-control" required="required" autocomplete="off">
</div>
 <div class="form-group">
<label>Work habits</label>
<p>Consider the employee’s planning skills,time management,safety,attendance,dependability and compliance with office practices.</p>

        <p>Comment</p>
        <input type="text" name="work" class="form-control" required="required" autocomplete="off">
</div>
    
<div class="form-group">
<label>Attitude</label>
<p>Consider how well this employee works with others and his or her willingness to take instructions and cooperate.</p>
    
        <p>Comment</p>
        <input type="text" name="attitude" class="form-control" required="required" autocomplete="off">
</div>
    <div class="form-group">
<label>Job Knowledge and Skills</label>
<p>To what extent does this employee possess and use required knowledge and skills? Consider the use of experience, judgment, skills and knowl-
edge to perform assigned tasks.</p>
    
        <p>Comment</p>
        <input type="text" name="job" class="form-control" required="required" autocomplete="off">
</div>
<button type="submit" name="send" class="btn btn-o btn-primary">send</button>
</form>
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
