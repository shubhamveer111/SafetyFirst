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
<title>SafetyFirst|| Dashboard</title>

<?php include_once('includes/cs.php');?>
</head>
<body>

 



<?php include_once('includes/header.php');?>
<?php include_once('includes/sidebar.php');?>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<br />
  <div class="container-fluid">
   <div class="widget-box widget-plain">
      <div class="center">
        <ul class="stat-boxes2">
          <li>
            <?php $query1=mysqli_query($con,"Select * from category where Status='1'");
$brandcount=mysqli_num_rows($query1);
?>
            <div class="left peity_bar_neutral"><i class="fa fa-building-o fa-4x" aria-hidden="true"></i></div>
            <div class="right"> <strong><?php echo $brandcount;?></strong> <a href="manage-category.php">Total Categories</a> </div>
          </li>
          
          
          <li>
            <?php $query4=mysqli_query($con,"Select * from product where Status='1'");
$productcount=mysqli_num_rows($query4);
?>
            <div class="left peity_line_good">  <i class="fa fa-building-o fa-4x"></i></div>
            <div class="right"> <strong><?php echo $productcount;?></strong> <a href="manage-product.php">Total Products</a> </div>
          </li>
          <li>
            <?php $query5=mysqli_query($con,"Select * from customer");
$totuser=mysqli_num_rows($query5);
?>
            <div class="left peity_bar_good"><i class="fa fa-users fa-4x" aria-hidden="true"></i></div>
            <div class="right"> <strong><?php echo $totuser;?></strong> <a href="reg-users.php">Total Customers</a> </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="widget-box widget-plain">
      <div class="center">
        <ul class="stat-boxes2">
          <li>
          <?php $query7=mysqli_query($con,"Select * from tblorder");
      $totorder=mysqli_num_rows($query7);
      ?>

            <div class="left peity_bar_neutral"><span><span style="display: none;">2,4,9,7,12,10,12</span>
              <canvas width="50" height="24"></canvas>
              </span></div>
              <div class="right"> <strong><?php echo $totorder;?></strong> <a href="all-order.php">Total Orders</a> </div>
           
          </li>

          <li>
           <?php $query8=mysqli_query($con,"Select * from productrequest");
      $totmillrequest=mysqli_num_rows($query8);
      ?>

            <div class="left peity_bar_bad"><span><span style="display: none;">2,4,9,7,12,10,12</span>
              <canvas width="50" height="24"></canvas>
              </span></div>
              <div class="right"> <strong><?php echo $totmillrequest;?></strong> <a href="all-product-request.php">Total Product Requests</a> </div>
          </li>

          <li>
            <?php $query6=mysqli_query($con,"Select * from feedback");
      $totfeed=mysqli_num_rows($query6);
      ?>

            <div class="left peity_line_good"><span><span style="display: none;">12,6,9,23,14,10,25</span>
              <canvas width="50" height="24"></canvas>
              </span></div>
              <div class="right"> <strong><?php echo $totfeed;?></strong> <a href="feedback.php">Total System Feedback</a> </div>
          </li>
          <li>
            <?php $query10=mysqli_query($con,"Select * from productreview");
      $totreview=mysqli_num_rows($query10);
      ?>

            <div class="left peity_bar_good"><span><span style="display: none;">12,6,9,20,14,10,25</span>
              <canvas width="50" height="24"></canvas>
              </span></div>
              <div class="right"> <strong><?php echo $totreview;?></strong> <a href="all-reviews.php">Total Product Reviews</a> </div>
          </li>

          <li>
            <?php
//Total Sale
 $query9=mysqli_query($con,"select sum(SubTotal) as totalitmprice from payment join tblorder on tblorder.Ordernumber=payment.OrderNumber join product on product.ID=payment.PId where tblorder.OrderFinalStatus='Order Delivered'");
while($row=mysqli_fetch_array($query9))
{
$total_sale=$row['totalitmprice'];
$totalsale+=$total_sale;
}
 ?>
            <div class="left peity_line_good"><span><span style="display: none;">12,6,9,23,14,10,17</span>
              <canvas width="50" height="24"></canvas>
              </span></div>
            <div class="right"> <strong>₹<?php echo $totalsale;?></strong> <a href="#">Total Sale</a> </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
 
  <img src="images/dash.png" width=1365 height=500/>

</div>

<?php include_once('includes/footer.php');?>

<?php include_once('includes/js.php');?>
</body>
</html>
<?php } ?>