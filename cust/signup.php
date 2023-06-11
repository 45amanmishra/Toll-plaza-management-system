<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $adminid=$_SESSION['ttmsaid'];
    $cname=$_POST['cname'];
  $cmobnumb=$_POST['cmobnumb'];
  $cemail=$_POST['cemail'];
  $gender=$_POST['gender'];
  $caddress=$_POST['caddress'];
  $cdob=$_POST['cdob'];
  $cpassword=md5($_POST['cpassword']);
  $custid = mt_rand(100000000, 999999999);
  $ret=mysqli_query($con, "select CustEmail from tblcust where custEmail='$cemail' || custMobilenumber='$cmobnumb'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
$msg="This email or Contact Number already associated with another account";
    }
    else{
  
     $query=mysqli_query($con,"insert into tblcust(custID,custName,custMobilenumber,custEmail,custGender,custAddress,custDOB,custPassword) value('$custid','$cname','$cmobnumb','$cemail','$gender','$caddress','$cdob','$cpassword')");
    if ($query) {
     echo '<script>alert("Congrats!! Sign Up Successful.")</script>';
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
  }
}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Toll Plaza Management System || Signup Page</title>
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
  <h2 class="form-heading">Signup Up</h2>
  <div class="app-cam">
	  <form role="form" method="post" action="">
		<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
    <fieldset>
            
            <div class="form-group">
              <label class="control-label">Name</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" color="white" required="true" id="cname" name="cname" value="">
            </div>
            <div class="form-group">
              <label class="control-label">Mobile Number</label>
              <input type="text" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" id="cmobnumb" name="cmobnumb" value="" required="true" maxlength="10" pattern="[0-9]+">
            </div>
            <div class="form-group">
              <label class="control-label">Email Address</label>
              <input type="email" class="form-control1 ng-invalid ng-invalid-required ng-touched" id="cemail" name="cemail"value="" required="true" onblur="checkcustemail(this.value)">
            </div>
            <div class="form-group">
              <label class="control-label">Password</label>
              <input type="password" id="cpassword" name="cpassword" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" value="" required="true">
            </div>
            <div class="form-group">
              <label class="control-label">Gender: </label>
              <input type="radio" name="gender" id="gender" value="Female" checked="true">Female
              <input type="radio" name="gender" id="gender" value="Male">Male
              <input type="radio" name="gender" id="gender" value="Other">Other
            </div>
            <div class="form-group">
              <label class="control-label">Address</label>
              <textarea type="text" id="caddress" name="caddress" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" value="" required="true" rows="12" cols="4"></textarea>
            </div>
            <div class="form-group">
              <label class="control-label">DOB</label>
              <input type="date" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" id="cdob" name="cdob" value="" required="true">
            </div>
            <div class="form-group">
             <p style="text-align: center;"> <button type="submit" name="submit" class="btn btn-primary">Add</button></p>
            </div>
          </fieldset>
		
		<ul class="new">
			<li class="new_middle"><p><a href="index.php">Already have an account!!</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
   <?php include_once('includes/footer.php');?>
</body>
</html>
