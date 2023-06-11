<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['ttmsaid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Toll Plaza Management System || Login Page</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style1.css">
  <!-- Font Awesome CDN Link for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.php"><strong style="color: black font-size:medium">Toll Plaza Management System</strong></a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <form method="post">
		<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
    <input type="text" class="text" name="username" placeholder="Username" required="true">
		<input type="password" name="password" class="text" placeholder="Password" required="true">

    <div class="wrapper">
    <div class="captcha-area">
      <div class="captcha-img">
        <img src="images/captcha-bg.png" alt="Captch Background" length="500" width = "200">
        <span class="captcha"></span>
      </div>
      <button class="reload-btn"><i class="fas fa-redo-alt"></i></button>
    </div>
    <form action="#" class="input-area">
      <input type="text" placeholder="Enter captcha" maxlength="6" spellcheck="false" required>


		
		<div class="submit"><input type="submit"  value="Login" name="login"></div>

    
		<ul class="new">
			<li class="new_left"><p><a href="forgot-password.php">Forgot Password ?</a></p></li>
      <li class="new_right"><p><a href="../index.php">Back to Home</a></p></li>
			</li>
			<div class="clearfix"></div>
		</ul>
	</form>
  <div class="status-text"></div>
  </div>
  <script src="js/script.js"></script>
  </div>
   <?php include_once('includes/footer.php');?>
</body>
</html>
