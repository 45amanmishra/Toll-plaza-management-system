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
    $regno=$_POST['regno'];
    $ownername=$_POST['ownername'];
    $modelname=$_POST['modelname'];
    $owneradd=$_POST['owneradd'];
    $chasisno=$_POST['chasisno'];
    $engineno=$_POST['engineno'];
    $regdate=$_POST['regdate'];
   
       $query=mysqli_query($con, "insert into  tblcustvehi(cust_id,reg_no,own_name,model_name,own_add,chasis_no,engine_no,reg_date) value('$cid','$regno','$ownername','$modelname','$owneradd','$chasisno','$engineno','$regdate')");
    if ($query) {
     echo '<script>alert("New Vehicle has been added.")</script>';
echo "<script>window.location.href ='add-vehicle.php'</script>";
  }
  else
    {
      echo mysqli_error($con);
      echo '<script>alert("Something Went Wrong. Please try again"</script>';
    }

}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Toll Plaza Management System || Add New Vehicle</title>

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
  	    <h3>Add New Vehicle</h3>
  	    <div class="well1 white">
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" method="post">
          <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
          <fieldset>
            
            <div class="form-group">
              <label class="control-label">Registration Number</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="regno" name="regno" value="">
            </div>
            <div class="form-group">
              <label class="control-label">Owner Name</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="ownername" name="ownername" value="">
            </div>
            <div class="form-group">
              <label class="control-label">Model Name</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="modelname" name="modelname" value="">
            </div>
            <div class="form-group">
              <label class="control-label">Owner Address</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="owneradd" name="owneradd" value="">
            </div>
            <div class="form-group">
              <label class="control-label">Chasis Number</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="chasisno" name="chasisno" value="">
            </div>
            <div class="form-group">
              <label class="control-label">Engine Number</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="engineno" name="engineno" value="">
            </div>
            <div class="form-group">
              <label class="control-label">Registration Date</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="regdate" name="regdate" value="">
            </div>
            
         
            <div class="form-group">
             <p style="text-align: center;"> <button type="submit" name="submit" class="btn btn-primary">Add</button></p>
             
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