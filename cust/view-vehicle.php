<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ttmscid']==0)) {
  header('location:logout.php');
  } else {
  
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Toll Plaza Management System || View Vehicle</title>

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
  	    <h3>View Vehicle</h3>
  	    <div class="well1 white" id="exampl">
          
  <?php
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblcustvehi where ID='$vid'");
if(!$ret){
  echo mysqli_error($con);
}
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
          <fieldset>
            
             <table border="1" class="table table-bordered mg-b-0" width="100%">
              <tr>
    <th>Registration Number</th>
    <td><?php echo $row['reg_no'];?></td>
  </tr>
              <tr>
    <th>Owner Name</th>
    <td><?php echo $row['own_name'];?></td>
  </tr>
        <tr>
    <th>Model Name</th>
    <td><?php echo $row['model_name'];?></td>
  </tr> 
  <tr>
    <th>Owner Address</th>
    <td><?php echo $row['own_add'];?></td>
  </tr> 
  <tr>
    <th>Chasis Number</th>
    <td><?php echo $row['chasis_no'];?></td>
  </tr> 
    <tr>
    <th>Engine Number</th>
    <td><?php echo $row['engine_no'];?></td>
  </tr> 
  <tr>
    <th>Registration Date</th>
    <td><?php echo $row['reg_date'];?></td>
  </tr>   
  
        
         <?php } ?>
       </table>
            <div class="form-group">
           <p style="margin-top:1%"  align="center">
  <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
</p>
     </div>        
            
          </fieldset>
    
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

<script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>
</body>
</html>
<?php } ?>