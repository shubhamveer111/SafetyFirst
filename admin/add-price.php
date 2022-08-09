<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['imsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $ID=$_POST['ID'];
    $grainType=$_POST['grainType'];
    $flourPrice=$_POST['flourPrice'];

    
     

    $query=mysqli_query($con, "insert into productprice value('$ID','$grainType','$flourPrice',NOW())");
    if ($query) {
   
    echo '<script>alert("Product Price  has been added.")</script>';
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
<title>Add Product Price</title>
<?php include_once('includes/cs.php');?>
</head>
<body>

<!--Header-part-->
<?php include_once('includes/header.php');?>
<?php include_once('includes/sidebar.php');?>


<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="add-price.php" class="tip-bottom">Add Price</a></div>
  <h1>Add Product price</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Product Price</h5>
        </div>
        <div class="widget-content nopadding">
          <form method="post" class="form-horizontal">
           
            <div class="control-group">
              <label class="control-label">Product Type:</label>
              <div class="controls">
                <input type="text" class="span11" name="grainType" id="grainType" value="" required='true' />
              </div>

              <label class="control-label">Price(per kg):</label>
              <div class="controls">
                <input type="text" class="span11" name="flourPrice" id="flourPrice" value="" required='true' />
              </div>
            </div>
            
           

            <div class="form-actions">
              <button type="submit" class="btn btn-success" name="submit">Add</button>
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