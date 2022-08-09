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
<title>FMS|| Accept Reviews</title>
<?php include_once('includes/cs.php');?>
</head>
<body>

<?php include_once('includes/header.php');?>
<?php include_once('includes/sidebar.php');?>


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="all-reviews.php" class="current">Accept Reviews</a> </div>
    <h1>Accept Reviews</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
       
     
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Accept Reviews</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th style="color: blue;font-size: 16px">S.NO</th>
                  <th style="color: blue;font-size: 16px">Product Name</th>
                  <th style="color: blue;font-size: 16px">Name</th>
                  <th style="color: blue;font-size: 16px">Review Title</th>
                  <th style="color: blue;font-size: 16px">Date of Review</th>
                  <th style="color: blue;font-size: 16px">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
$ret=mysqli_query($con,"select productreview.ID,productreview.ProductID,productreview.ReviewTitle,productreview.Name,productreview.DateofReview,product.ProductName from productreview join product on product.ID=productreview.ProductID where productreview.Status='Review Accept'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <tr class="gradeX">
                 <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['ProductName'];?></td>
                  <td><?php  echo $row['Name'];?></td>
                  <td><?php  echo $row['ReviewTitle'];?></td>
                  <td><?php  echo $row['DateofReview'];?></td>
                                    <td><a href="view-reviews.php?rid=<?php echo $row['ID'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
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