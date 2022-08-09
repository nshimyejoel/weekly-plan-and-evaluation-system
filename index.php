<?php
session_start();
include 'connection.php';
$username="";
$password="";
$error=array();

if (isset($_POST["login"])) {
$username=$_POST["usernames"];
$password=$_POST["passwords"];
    if(count($error)==0){
$query="select * from user where usernames='$username' and passwords='$password'";
$sql=mysqli_query($con,$query);
       
$rows = mysqli_fetch_array($sql);
        if ($rows['status'] == '1'&& $rows['chefdep'] != '1') {
	 
                    
    $_SESSION["name"]=$rows["fullnames"];
    $_SESSION["ids"]=$rows["id"];
    $_SESSION["dep"]=$rows["depid"];
    header("location: home.php");
}
        else if($rows['status'] == '0'){
            array_push($error,"account is blocked ");
        }
        else{
            array_push($error,"incorrect username or password");
        }      
}
}  
?>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="css/login.css" type="text/css"/>
</head>
    <body>
    <div class="box">
            
        <h1><center>Login To</center></h1>
        <center><h2>Weekly plan and evaluation System</h2></center>
	<form action="" method="post">
        <?php include 'error.php'?>
        
		<div class="input-group">
			<input type="text" name="usernames" autocomplete="off" onblur="checkInput(this)" value="<?php echo $username;?>" required="required"/>
			<label for="username">Username</label>
		</div>
		<div class="input-group">
			<input type="password" name="passwords" onblur="checkInput(this)" value="<?php echo $password;?>"required="required" />
			<label for="password">Password</label>
		</div>
         <div>
             <a href="index2.php">head of department</a>
		</div>
		<input type="submit" value="login" name="login" /> 
	</form>
</div>
    </body>
</html>
