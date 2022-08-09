<?php session_start();

if(!isset($_SESSION["name"]))
{
    header("location:../index.php");
    
}
$error=array();
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Week planning</title>
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
            <h3>Week plan</h3>
            
            

<div>

<script language="javascript" type="text/javascript">
<!--

var NumOfRow=0;
var row, cell;
cell=document.createElement('td');
cell.appendChild(document.createTextNode(i+' '+j))
row.appendChild(cell);
function Button1_onclick()
{
NumOfRow++;

// get the refference of the main Div

//===============================================
var mainDiv=document.getElementById('MainDiv');

// create new div that will work as a container
var newDiv=document.createElement('div');
newDiv.setAttribute('id','innerDiv'+NumOfRow);

//create span to contain the text
var newSpan=document.createElement('span');
newSpan.innerHTML="";


// create new textbox for email entry
var newTextBox=document.createElement('TEXTAREA');
newTextBox.type='text';
newTextBox.setAttribute('id','txtAddr'+NumOfRow);
newTextBox.setAttribute('maxlength', 200);
newTextBox.setAttribute('name','days[]');
newTextBox.setAttribute('cols',18);
newTextBox.setAttribute('rows',2);
/*==========================*/
var newTextBox2=document.createElement('TEXTAREA');
newTextBox2.type='text';
newTextBox2.setAttribute('id','txtAddr'+NumOfRow);
newTextBox2.setAttribute('maxlength', 200);
newTextBox2.setAttribute('name','worktobedone[]');
newTextBox2.setAttribute('cols',18);
newTextBox2.setAttribute('rows',2);

var newTextBox3=document.createElement('TEXTAREA');
newTextBox3.type='text';
newTextBox3.setAttribute('id','txtAddr'+NumOfRow);
newTextBox3.setAttribute('maxlength', 200);
newTextBox3.setAttribute('name','expectedoutcomes[]');
newTextBox3.setAttribute('cols',18);
newTextBox3.setAttribute('rows', 2);







/*==========================*/

// create remove button for each email adress

var newButton=document.createElement('input');
newButton.type='button';
newButton.value='Remove['+NumOfRow+']';
newButton.id='btn'+NumOfRow;



// atach event for remove button click
newButton.onclick=function RemoveEntry() { var mainDiv=document.getElementById('MainDiv');
mainDiv.removeChild(this.parentNode);
}

// append the span, textbox and the button
newDiv.appendChild(newSpan);
newDiv.appendChild(newTextBox);
newDiv.appendChild(newTextBox2);
newDiv.appendChild(newTextBox3);


newDiv.appendChild(newButton);

// finally append the new div to the main div
mainDiv.appendChild(newDiv);

}
// -->
</script>
<style type="text/css">
<!--
.style9 {color: #FF0000}
.style11 {
	color: #FFFF66;
	font-style: italic;
}
.style12 {color: #FFFF00}
.style1 {font-size: 10px}
.style2 {	font-size: 12px;
	font-weight: bold;
}
-->
</style>
 <?php include '../error.php';?>
<form id="form1" name="" method="POST" action="">
<h4 align="center">
  <table  border="1">
    <tr>
      <td bgcolor="#3366FF">
	  <h4 align="center">
	  <table  border="0">
        
       
       
		<h2 align="center">
        <tr>
          <td bordercolor="#000066" bgcolor="#99CCCC" >        <div align="center">
            <p>&nbsp;</p>
       <p>week planning</p>
            <p><span class="style2">Add File</span>
                <input name="buttonAdd" type="button" id="Button1" onclick="Button1_onclick()" value="Add More" />
 </p>       
              <p><b>from:</b><?php echo $startdates=date("Y-m-d");?> | <b>to:</b><?php echo $enddates=date('Y-m-d', strtotime(' +7 day'));?></p>    
              
              
              
           <?php
              include'../connection.php';
             
             
				$idadded="1";
				$querypazzos=mysqli_query($con," select * from weeklyplan ");
				if(mysqli_num_rows($querypazzos))
				{
				$querytest=mysqli_query($con," select max(planid) as lastreq from weeklyplan ");
				$numitems=mysqli_num_rows($querytest);
				if($numitems>0)
				{
					
				$recor=mysqli_fetch_array($querytest);
				
				$lastrequi=$recor["lastreq"];
				
				$queryitem=mysqli_query($con," select * from plan where planid='$lastrequi' ");
				$numitem=mysqli_num_rows($queryitem);
				if($numitem>0)
				{
                    $ids=$_SESSION["ids"];
                    $department=$_SESSION["dep"];
					$startdates=date("Y-m-d");
					$enddates=date('Y-m-d', strtotime(' +7 day'));
                     if(isset($_SESSION["curids"]))
                    {
                       $idadded=$_SESSION["curidss"]; 
                    }else{
				$query=mysqli_query($con," insert into weeklyplan values('','$ids','$startdates','$enddates','$department')");
                    $querytest=mysqli_query($con," select max(planid) as lastreq from weeklyplan ");
                    $recor=mysqli_fetch_array($querytest);
                     }
				$lastrequi=$recor["lastreq"];
				$idadded=$lastrequi;
				}
				else{
					$idadded=$lastrequi;
				}
				}
				}
				else{
					$startdates=date("Y-m-d");
					$enddates=date('Y-m-d', strtotime(' +7 day'));
					 $ids=$_SESSION["ids"];
                    $department=$_SESSION["dep"];
                    
                    if(isset($_SESSION["curids"]))
                    {
                       $idadded=$_SESSION["curidss"]; 
                    }else{
                    
				$query=mysqli_query($con," insert into weeklyplan  values('','$ids','$startdates','$enddates','$department')");
                    
                    
                     $querytest=mysqli_query($con," select max(planid) as lastreq from weeklyplan ");
                    $recor=mysqli_fetch_array($querytest);
				
				$lastrequi=$recor["lastreq"];
				$idadded=$lastrequi;
                        }
				//$idadded=mysqli_insert_id();
				}
				?>
              
              
              
              
             <p><br/>Week plan Number:<strong> No-000<?php
                 
                
                 if(isset($_SESSION["curids"]))
                    {
                       $idadded=$_SESSION["curidss"]; 
                    }
                 
                 echo $idadded; ?></strong><br/></p>
               <input type="hidden" name="idreq" value="<?php echo $idadded; ?>">
            <table  border="1" >
              <tr>
                <th width="240" scope="col"><span class="style1">Days </span></th>
				 <th width="240" scope="col"><span class="style1">Work to be done </span></th>
                <th width="240" scope="col"><span class="style1">Expected out comes</span></th>
              </tr>
              <tr>
                <td colspan="7">
                  <div id="MainDiv"> </div>
                  <input name="Send" type="submit" value="Send" />
                </td>
              </tr>
            </table>
           
<p>&nbsp;</p>
           
          </div>
        <tr>
          
          
        </table>
      </td>
    </tr>
  </table></td>
    </tr>
  </table>
</form>
<?php 
    include '../connection.php';
    
    if(isset($_POST['Send'])){
							
								$day=$_POST['days'];
                                 $work=$_POST['worktobedone'];
                                $outcome=$_POST['expectedoutcomes'];
								@$idreq=$_POST['idreq'];
        
                                  $_SESSION["curids"]="1";
                                  $_SESSION["curidss"]=$idreq;
        
        
        
								$date=date("Y-m-d");
                               $result=-1;
                                $status=1;
								while (list ($key,$val) = @each ($day) ) {
                                       list ($key,$val2) = @each ($work); 
                                       list ($key,$val3) = @each ($outcome);
									   mysqli_query($con,"INSERT INTO plan VALUES ('','$val','$val2','$val3','$status','$idreq','$result')");
                                    
                                    
                                    
                                    
                                  
                                    
                                    
								}
        
        ?>
							<script>
								
											alert("Weekly Plan Added");
											window.location = ("week.php")
										
									
							</script>
							<?php
							

    
    }
							 
							?>
    
    
    
    
    
    


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
