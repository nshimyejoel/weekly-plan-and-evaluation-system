<?php session_start();
if(!isset($_SESSION["name"]))
{
    header("location:index.php");
    
}
$error = array();
?>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Week plan</title>
  <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="shortcut icon" href="../images/favicon.png" />
    <link rel="stylesheet" href="../css/error.css">
</head>
<body>
   <div class=" container-scrolle"> 
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
   <div class="container-fluid">
       <h1> <img src="../images/index.jpeg"> <b>WEEK PLAN REPORT OF <?php echo $_SESSION["name"];?></b></h1>
       <?php
       include '../connection.php';
       $planid=$_GET["planid"];
       $query=mysqli_query($con,"select * from weeklyplan where planid='$planid'");
        while($row=mysqli_fetch_array($query)){
       ?>
        <h4><p><b> From:<?php echo $row["startdate"];?></b></p></h4>     
       <h4><p><b>To:<?php echo $row["enddate"];?></b></p></h4>
       <?php } ?>
       <section class="content">
               <div class="row">
            <div class="col-xs-12">
               <div class="box">
                <div class="card-body">
                  
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
                      <thead>
                        <tr class="text-primary">
                          
                           <th>Days</th>
                        <th>Work To be Done</th>
                        <th>Expected out comes</th>
                           <th>Status</th> 
                      <th>Evaluation result</th>
                        </tr>
                      </thead>
                             <?php

            include '../connection.php';

            $planid=$_GET["planid"];
            $sql="select * from plan where planid='$planid'";
            $query=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($query)){
            ?>
                    <tbody>
                      <tr>
                       
                        <td><?php echo $row["days"];?></td>
                        <td><?php echo $row["worktobedone"];?></td>
                        <td><?php echo $row["expectedoutcomes"];?></td>
                          <td><label class="badge badge-primary"><?php  
                                if($row["status"]==1){
                                    echo "pending";
                                }
                                else if($row["status"]==2)
                                {
                                    echo "approved";
                                }
                                else if($row["status"]==3){
                                    echo "rejected";
                                }
                              ?></label></td>
                          <td>
                          <?php
                            if($row["result"]<0)
                            {
                                echo"evaluation not yet made";
                            }
                else{
                    echo"evaluation is made"; 
                }
                            ?>
                          </td>
                           
                      </tr>
                        
                    <?php } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div> 
       <button onclick="myFunction()" class="btn  btn-primary">print</button><><><><>
          <a href="myplan.php" class="btn  btn-primary">back</a>   
            <script>
function myFunction() {
    window.print();
}
</script>
           
       </section>
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