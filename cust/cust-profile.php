<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ttmscid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $cid=$_SESSION['ttmscid'];
    $cname=$_POST['cname'];
  $mobno=$_POST['cmobno'];
  $cgender=$_POST['cgender'];
  $cadd=$_POST['cadd'];
  $cdob=$_POST['cdob'];
  
     $query=mysqli_query($con, "update tblcust set CustName ='$cname', CustMobilenumber='$mobno',CustGender='$cgender',CustAddress='$cadd',CustDOB='$cdob' where ID='$cid'");
    if ($query) {
    $msg="Your profile has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
  }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Toll Plaza Management System || Cust Profile</title>

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
<body>
<div id="wrapper">
     <!-- Navigation -->
        <?php include_once('includes/sidebar.php');?>
        <?php include_once('includes/header.php');?>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>My Profile</h3>
  	    <div class="well1 white">
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" method="post">
          <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
          <fieldset>
            <?php
$Custid=$_SESSION['ttmscid'];
$ret=mysqli_query($con,"select * from tblcust where ID='$Custid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
            <div class="form-group">
              <label class="control-label">Customer ID</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  readonly="true" value="<?php  echo $row['CustID'];?>">
            </div>
            <div class="form-group">
              <label class="control-label">Name</label>
              <input type="text" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" id="cname" name="cname" value="<?php  echo $row['CustName'];?>" required='true'>
            </div>
            <div class="form-group">
              <label class="control-label">Contact Number</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" id="cmobno" name="cmobno"value="<?php  echo $row['CustMobilenumber'];?>" required='true' maxlength='10' pattern='[0-9]+'>
            </div>
            <div class="form-group">
              <label class="control-label">Email address</label>
              <input type="email" id="email" name="email" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" value="<?php  echo $row['CustEmail'];?>" readonly='true'>
            </div>
            <div class="form-group">
              <label class="control-label">Gender: </label>
              <?php  if($row['CustGender']=="Female"){ ?>
              <input type="radio" name="cgender" id="cgender" value="Female" checked="true">Female
              <input type="radio" name="cgender" id="cgender" value="male">Male
              <?php } else { ?>
              <label>
              <input type="radio" name="gender" id="gender" value="Male" checked="true">Male
              <input type="radio" name="gender" id="gender" value="Female">Female
              </label>
             <?php } ?>
            </div>
            <div class="form-group">
              <label class="control-label">Address</label>
              <textarea type="text" id="cadd" name="cadd" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" rows="12" cols="4"><?php  echo $row['CustAddress'];?></textarea>
            </div>
            <div class="form-group">
              <label class="control-label"> DOB</label>
              <input type="date" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" id="cdob" name="cdob" value="<?php  echo $row['CustDOB'];?>" required="true">
            </div>
            <div class="form-group">
              <label class="control-label">Joining Date</label>
              <input type="text" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" value="<?php  echo $row['JoiningDate'];?>" required="true" readonly='true'>
            </div>
           
           
            <?php } ?>
            <div class="form-group">
             <p style="text-align: center;"> <button type="submit" name="submit" class="btn btn-primary">Update</button></p>
             
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <?php include_once('includes/footer.php');?>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
<?php } ?>