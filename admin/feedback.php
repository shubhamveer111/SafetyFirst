<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['imsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Flour Milling System|| Feedback</title>
<?php include_once('includes/cs.php');?>
</head>
<body>

<?php include_once('includes/header.php');?>
<?php include_once('includes/sidebar.php');?>


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="customer-details.php" class="current">Feedback Details</a> </div>
    <h1>System Feedback</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
       
     
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Feedback Details</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
				<th>#</th>
											<th style="color: blue;font-size: 16px"> Name</th>
											<th width="50" style="color: blue;font-size: 16px">Email </th> 
											<th style="color: blue;font-size: 16px">System Speed</th>
											<th style="color: blue;font-size: 16px">System Performance rate</th>
											<th style="color: blue;font-size: 16px">User friendly</th>
											<th style="color: blue;font-size: 16px">Prefered to Others?</th>
											<th style="color: blue;font-size: 16px">Overall Experience</th>
											<th style="color: blue;font-size: 16px">Comments/Suggetions</th>
											
                  
                </tr>
              </thead>
              <tbody>
                <?php
$ret=mysqli_query($con,"select * from feedback");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <tr class="gradeX">
                  <td><?php echo $cnt;?></td>
                  <td><?php echo($row['Name']);?></td>
                                            <td><?php echo htmlentities($row['Email']);?></td>
                                            
											<td><?php echo htmlentities($row['System Speed']);?></td>
											<td><?php echo htmlentities($row['System Performance rate']);?></td>
											<td><?php echo htmlentities($row['User friendly']);?></td>
											
											<td><?php echo htmlentities($row['Prefered to Others?']);?></td>
											<td><?php echo htmlentities($row['Overall Experience']);?></td>
                                            <td><?php echo htmlentities($row['Comments/Suggestions']);?></td>
										
                </tr>
                <?php 
$cnt=$cnt+1;
}?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<?php include_once('includes/footer.php');?>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
<?php } ?>