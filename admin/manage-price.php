<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['imsaid']==0)) {
  header('location:logout.php');
  } else{

// Code for deleting product from cart
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql=mysqli_query($con,"delete from flourprice where ID=$rid");

 echo "<script>alert('Data deleted');</script>"; 
  echo "<script>window.location.href = 'manage-price.php'</script>";     


}





  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SF|| Manage Product Price</title>
<?php include_once('includes/cs.php');?>
</head>
<body>

<?php include_once('includes/header.php');?>
<?php include_once('includes/sidebar.php');?>


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="manage-brand.php" class="current">Manage Product Price</a> </div>
    <h1>Manage Product Price</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
       
     
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Manage Product Price</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th style="color: blue;font-size: 16px">S.NO</th>
                  <th style="color: blue;font-size: 16px">Product Type</th>
                  <th style="color: blue;font-size: 16px">Price</th>
                  
                  <th style="color: blue;font-size: 16px">Creation Date</th>
                  <th style="color: blue;font-size: 16px">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
$ret=mysqli_query($con,"select * from productprice");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <tr class="gradeX">
                  <td><?php echo $cnt;?></td>
                  <td><?php  echo $row['Product Type'];?></td>

                  <td><?php  echo $row['Product Price'];?></td>

                  
                
                  <td><?php  echo $row['CreationDate'];?></td>
                  <td class="center"><a href="edit-price.php?editid=<?php echo $row['ID'];?>"><i class=" icon-edit"></i></a> || <a href="manage-price.php?delid=<?php echo ($row['ID']);?>" onclick="return confirm('Do you really want to Delete ?');"><i class="icon-remove-sign" aria-hidden="true"></i></a></td>
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