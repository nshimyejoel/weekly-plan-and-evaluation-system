<?php
session_start();
include 'connection.php';
$username="";
$password="";
$email="";
$fullnames="";
$department="";
$error = array(); 
if(isset($_POST["signup"]))
{
    $username=$_POST["usernames"];
    $password=$_POST["passwords"];
    $email=$_POST["emails"];
    $fullname=$_POST["fullnames"];
    $status=1;
    $department=$_POST["department"];
    if(strlen($_POST["passwords"])<6 ){array_push($error,"password must contain 6 characters");}
   $sql="select * from user where emails='$email'";
    $result=mysqli_query($con,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows>0){
        $row=mysqli_fetch_array($result);
        if($email==$row["emails"]){
             array_push($error,"Email already exists");
        }
    }
    
     if(count ($error)== 0){
            $sql="insert into user (usernames,passwords,emails,fullnames,status,depid) values('$username','$password','$email','$fullname','$status','$department')";
         $query=mysqli_query($con,$sql);
         if(!$query){
             array_push($error,"Account unsuccessfully created ");
         }
         else{
         array_push($error,"Account successfully created ");
         array_push($error,"click already have account to login");
             echo "<meta http-equiv='refresh' content='4; url=signup.php'>";
         }
    }
}
?>
<html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="css/login.css" type="text/css"/>
</head>
    <body>
    <div class="box">
      <form action="" method="post">
          <?php include('error.php');?>
	<h1>Sign up</h1>
	<form action="" method="post">
		<div class="input-group">
			<input type="text" name="usernames"  required="required" autocomplete="off" value="<?php echo $username;?>">
			<label for="username">Username</label>
		</div>
		<div class="input-group">
			<input type="password" name="passwords" required="required" autocomplete="off" value="<?php echo $password;?>">
			<label for="password">Password</label>
		</div>
         <div class="input-group">
			<input type="text" name="emails" placeholder="abc@example.com" required="required" autocomplete="off"value="<?php echo $email;?>">
			<label for="E-mail">E-mail</label>
		</div>
         <div class="input-group">
             <select name="department" required="required" autocomplete="off" value="<?php echo $department;?>">
                 <option value="">select department</option>
                 <?php
                 include'connection.php';
                 $query=mysqli_query($con,"select * from department");
                 while($row=mysqli_fetch_array($query)){
                 ?>
                 <option value="<?php echo $row["depid"];?>"><?php echo $row["name"];?></option>
                 <?php
                 }
                 ?>
             </select>
		</div>
        <div class="input-group">
			<input type="text" name="fullnames" required="required" autocomplete="off" value="<?php echo $fullnames;?>">
			<label>user full names</label>
		</div>
        <div ><a href="index.php">already have account</a></div>
		<input type="submit" value="sign up" name="signup" />
        <input type="reset" value="reset"/>
</form>
</div>
    </body>
</html>
