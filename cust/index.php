<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $semail=$_POST['semail'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tblcust where  CustEmail='$semail' && CustPassword='$password'");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['ttmscid']=$ret['ID'];
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
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.php"><strong style="color: black">Toll Tax Management System</strong></a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <form method="post">
		<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
    <input type="text" class="text" name="semail" placeholder="Cust Email" required="true">
		<input type="password" name="password" class="text" placeholder="Password" required="true">
		<div class="submit"><input type="submit"  value="Login" name="login"></div>
		
		<ul class="new">
			<li class="new_left"><p><strong><a href="forgot-password.php">Forgot Password ?</a></strong></p></li>
      <li class="new_right"><p><strong>Don't have an account? <a href="signup.php">Sign Up Here</a></strong></p></li>
      
    </li>
    <div class="clearfix"></div>
  </ul>
  <ul class="new">
      <li class="new_middle"><p><strong><a href="../index.php">Back to Home</a></strong></p></li>
      
			</li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
  
   <?php include_once('includes/footer.php');?>
</body>
</html>
