<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['imsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $eid=$_GET['editid'];
    $pname=$_POST['pname'];
    $bname=$_POST['bname'];
    
     $price=$_POST['price'];
    $status=$_POST['status'];
     $desc=$_POST['desc'];
    
   
    $query=mysqli_query($con, "update product set ProductName='$pname',CategoryName='$bname',Price='$price',Status='$status',Description='$desc' where ID='$eid'");
    if ($query) {
   
    echo '<script>alert("Product has been updated.")</script>';
  }
  else
    {
     echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Flour Milling System|| Update Products</title>
<?php include_once('includes/cs.php');?>

</head>
<body>

<!--Header-part-->
<?php include_once('includes/header.php');?>
<?php include_once('includes/sidebar.php');?>


<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <strong>Update Product</strong></div>
  <h1>Update Product</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Update Product</h5>
        </div>
        <div class="widget-content nopadding">
          <form method="post" class="form-horizontal">
            <?php
            $eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from product where product.ID='$eid'");

$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

             
           
            
            
            <div class="control-group">
              <label class="control-label">Category Name:</label>
              <div class="controls">
                <select type="text" class="span11" name="bname" id="bname" value="" required='true' />
                  <option value="<?php echo $row['CategoryName'];?>"><?php echo $row['CategoryName'];?></option>
                  <?php $query1=mysqli_query($con,"select * from category where Status='1'");
              while($row1=mysqli_fetch_array($query1))
              {
              ?>
                  <option value="<?php echo $row1['CategoryName'];?>"><?php echo $row1['CategoryName'];?></option><?php } ?>
                </select>
              </div>
            </div>
           
            

            <div class="control-group">
              <label class="control-label">Product Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="pname" pattern="[a-zA-Z'-'\s]*" id="pname" value="<?php echo $row['ProductName'];?>" required='true'/>
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Product Description:</label>
              <div class="controls">
                <input type="text" class="span11"  name="desc" pattern="[a-zA-Z'-'\s]*" id="desc" value="<?php echo $row['Description'];?>" required="true" />              </div>
            </div>
            
           
            <div class="control-group">
              <label class="control-label">Image1 :</label>
              <div class="controls">
                <img src="images/<?php echo $row['Image1'];?>" width="100" height="100" value="<?php echo $row['Image1'];?>>"><a href="changeimage1.php?editid=<?php echo $row['ID'];?>"> &nbsp; Edit Image</a>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Image2 :</label>
              <div class="controls">
               <img src="images/<?php echo $row['Image2'];?>" width="100" height="100" value="<?php echo $row['Image2'];?>>"><a href="changeimage2.php?editid=<?php echo $row['ID'];?>"> &nbsp; Edit Image</a>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Image3 :</label>
              <div class="controls">
                <img src="images/<?php echo $row['Image3'];?>" width="100" height="100" value="<?php echo $row['Image3'];?>>"><a href="changeimage3.php?editid=<?php echo $row['ID'];?>"> &nbsp; Edit Image</a>
              </div>
            </div>
           
            <div class="control-group">
              <label class="control-label">Price(per kg) :</label>
              <div class="controls">
                <input type="text" class="span11" name="price" pattern="[0-9]+" id="price" value="<?php echo $row['Price'];?>" required="true"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                <?php  if($row['Status']=="1"){ ?>
                <input type="checkbox"  name="status" id="status" value="1"  checked="true"/>
                <?php } else { ?>
                  <input type="checkbox" value='1' name="status" id="status" />
                  <?php } ?>
              </div>
            </div>         
           <?php } ?>
            <div class="form-actions">
              <button type="submit" class="btn btn-success" name="submit">Update</button>
            </div>
          </form>
        </div>
      </div>
    
    </div>
  </div>
 </div>
</div>
<?php include_once('includes/footer.php');?>
<?php include_once('includes/js.php');?>
</body>
</html>
<?php } ?>