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
<title>Flour Milling System|| View Products Inventory</title>
<?php include_once('includes/cs.php');?>
</head>
<body>

<?php include_once('includes/header.php');?>
<?php include_once('includes/sidebar.php');?>


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><strong> View Products Inventory</strong> </div>
    <h1>View Products Inventory</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
       
     
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Products Inventory</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th style="color: blue;font-size: 16px">S.NO</th>
                  <th style="color: blue;font-size: 16px">Product Name</th>
                  <th style="color: blue;font-size: 16px">Category Name</th>
                  <th style="color: blue;font-size: 16px">Product ID</th>
                  <th style="color: blue;font-size: 16px">Stock</th>
                  <th style="color: blue;font-size: 16px">Remaining Stock</th>
                  <th style="color: blue;font-size: 16px">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
$ret=mysqli_query($con,"select product.ProductName,product.BrandName,product.ID as pid,product.Status,product.CreationDate,product.ModelNumber,product.Stock,sum(tblcart.ProductQty) as selledqty from product left join tblcart  on product.ID=tblcart.ProductId group by product.ProductName");
$qty=$result['selledqty'];
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
$qty=$row['selledqty'];
?>
                <tr class="gradeX">
                  <td><?php echo $cnt;?></td>
                  <td><?php  echo $row['ProductName'];?></td>
                  <td><?php  echo $row['BrandName'];?></td>
                  <td><?php  echo $row['ModelNumber'];?></td>
                  <td><?php  echo $row['Stock'];?></td>
                   <td><?php  echo ($_SESSION['rqty']=$row['Stock']-$qty);?></td>
                  <?php if($row['Status']=="1"){ ?>

                     <td><?php echo "Active"; ?></td>
<?php } else { ?>                  <td><?php echo "Inactive"; ?>
                  </td>
                  <?php } ?>
                                  
                </tr>
                <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found .</td>

  </tr>
   
<?php } ?>
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