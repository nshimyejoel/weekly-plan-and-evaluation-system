<?php session_start();
$error=array();
include '../../connection.php';
if(!isset($_SESSION["email"]))
{
    header("location:../index.php");
}
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $sql=("delete from user where id='$id'");
    mysqli_query($con,$sql);
array_push($error,"user is  deleted succesfully");
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>standard user accountsa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../dist/css/error.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>SESSION</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
             <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../dist/img/avator.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION["email"];?></span>
            </a>
          </li>
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Control Sidebar Toggle Button -->
            <li>
                <a href="logout.php">
                    <i class="fa fa-power-off"></i>
                    <span>logout</span>
                </a>
            </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
       <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="../home.php"><i class="fa fa-circle-o"></i>Home</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Evaluation process</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="weekplan.php"><i class="fa fa-circle-o"></i>week plans</a></li>
            
            
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-o  "></i>
            <span>accounts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin.php"><i class="fa fa-circle-o"></i> admin users</a></li>
            <li><a href="user.php"><i class="fa fa-circle-o"></i> standard users</a></li>
              
          </ul>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>create account</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="register.php"><i class="fa fa-circle-o text-red"></i> admin user</a></li>
            <li><a href="register2.php"><i class="fa fa-circle-o text-green"></i> standard user</a></li>
          </ul>
        </li>
       
        
          <li class="treeview">
          <a href="#">
            <i class="fa fa-address-book-o "></i> <span>Employees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addemployee.php"><i class="fa fa-circle-o text-red"></i> add employee</a></li>
            <li><a href="employee.php"><i class="fa fa-circle-o text-green"></i>manage employee</a></li>
          </ul>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>departments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="adddepartment.php"><i class="fa fa-circle-o text-red"></i> create new</a></li>
            <li><a href="department.php"><i class="fa fa-circle-o text-green"></i>manage departments</a></li>
          </ul>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i> <span>performance report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="report.php"><i class="fa fa-circle-o text-red"></i>add performance report</a></li>
            <li><a href="managereport.php"><i class="fa fa-circle-o text-green"></i>manage performance report</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>weeklyplan and evaluation system</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php include'../error.php';?>
     <!-- write your text here -->
    <div class="table-responsive">
                  <table class="table center-aligned-table">
                    <thead>
                      <tr class="text-primary">
                        <th>id</th>
                        <th>usernames</th>
                        <th>passwords</th>
                        <th>email</th>
                        <th>fullname</th>
                          <th>department</th>
                          <th>head of department</th>
                          <th>status</th>
                      </tr>
                    </thead>
                      <?php
                      $query=mysqli_query($con,"select * from user");
                      while($row=mysqli_fetch_array($query))
                      {
                      ?>
                    <tbody>
                      <tr class="">
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["usernames"];?></td>
                        <td><?php echo $row["passwords"];?></td>
                        <td><?php echo $row["emails"];?></td>
                          <td><?php echo $row["fullnames"];?></td>
                          <td>
                          <?php 
								$userid=$row['depid'];
								
								$selects = mysqli_query($con,"SELECT * FROM department where depid='$userid'");
								$rowuser=mysqli_fetch_array($selects);
								echo $rowuser["name"]; ?>
                          </td>
                          <td>
                          <?php 
                          if($row["chefdep"]==1){
                              echo"chef of department";
                          }
                              ?>
                          </td>
                          <td><?php 
                          if( $row["status"]==1){
                              echo "active";
                          }
                          else{
                              echo "blocked";
                          }
                          ;?></td>
                          <td><a href="editaccount2.php?id=<?php echo $row["id"];?>" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i>edit</a></td>
                          <td><a href="?id=<?php echo $row["id"];?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-trash"></i>delete</a></td>
                      </tr>
                      <?php
                      }
                        ?>
                    </tbody>
                  </table>
                </div>    
        
        
    </section>
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2018.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  
</div>
        
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
