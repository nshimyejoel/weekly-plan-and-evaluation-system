<?php session_start();
if(!isset($_SESSION["email"])){
    header("location:../index.php");
}
include '../../connection.php';
$error = array(); 
if(isset($_POST["add"]))
{
    $fullname=$_POST["fullname"];
    $address=$_POST["address"];
    $telphonenumber=$_POST["telphonenumber"];
    $email =$_POST["email"];
    $gender=$_POST["gender"];
    $maritalstatus=$_POST["maritalstatus"];
    $dateofbirth=$_POST["dateofbirth"];
    $jobtitle=$_POST["jobtitle"];
    $department=$_POST["department"];
    $registereddate=date("Y-m-d");
    $status=1;
    
    if(count ($error)== 0){
    $query="insert into employee (fullname,address,telphonenumber,email,gender,maritalstatus,dateofbirth,jobtitle,department,registereddate,status) values('$fullname',' $address','$telphonenumber','$email','$gender','$maritalstatus','$dateofbirth','$jobtitle','$department',' $registereddate','$status')";
    mysqli_query($con,$query);
      array_push($error,"successfully added");
        
}  
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add employee</title>
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

 <link rel="stylesheet" href="../../css/error.css">
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
    <?php include '../../error.php'?>
    <section class="content">
        
 <div class="container-fluid"> 
<div class="row">
<div class="col-md-12">
<div class="panel">
<div class="panel-heading">
<div class="panel-title">
<h3>Fill the employee info</h3>
</div>
</div>
<div class="panel-body">

<form class="form-horizontal" method="post">
<div class="form-group">
<label for="default" class="col-sm-2 control-label">Full Name</label>
<div class="col-sm-10">
<input type="text" name="fullname" class="form-control" id="fullanme" value=""  required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">address</label>
<div class="col-sm-10">
<input type="text" name="address" class="form-control" id="rollid" value="" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">telphone number</label>
<div class="col-sm-10">
<input type="number" name="telphonenumber" class="form-control" id="rollid" value="" required="required" autocomplete="off">
</div>
</div>
    
<div class="form-group">
<label for="default" class="col-sm-2 control-label">Email</label>
<div class="col-sm-10">
<input type="email" name="email" class="form-control" id="email" value="" required="required" autocomplete="off">
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">Gender</label>
<div class="col-sm-10">
<input type="radio" name="gender" value="Male" required="required" checked>Male <input type="radio" name="gender" value="Female" required="required">Female <input type="radio" name="gender" value="Other" required="required">Other

</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">Marital Status</label>
<div class="col-sm-10">
<input type="text" name="maritalstatus" class="form-control" id="classname" value="" required="required" autocomplete="off" placeholder="married or not married">
</div>
</div>
<div class="form-group">
<label for="date" class="col-sm-2 control-label">Date Of Birth</label>
<div class="col-sm-10">
<input type="date"  name="dateofbirth" class="form-control" value="" required="required" autocomplete="off">
</div>
</div>
    
<div class="form-group">
<label for="default" class="col-sm-2 control-label">Job title</label>
<div class="col-sm-10">
<input type="text" name="jobtitle" class="form-control" id="job" value="" required="required" autocomplete="off">
</div>
</div>
    <div class="form-group">
<label for="default" class="col-sm-2 control-label">Department</label>
<div class="col-sm-10">
    <select name="department">
    <?php
    $sql="select name from department";
      $query=mysqli_query($con,$sql);
      while($row=mysqli_fetch_array($query)){
    ?>
        <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
        <?php } ?>
    </select>
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">Registered Date </label>
<div class="col-sm-10">
    
<td name="registereddate">  <?php echo $date=date("Y-m-d")?> </td>
</div>
</div>
                                                   
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit"name="add"class="btn btn-primary">Add</button>
</div>
</div>
 </form>
</div>
 </div>
</div>
 </div>              
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
