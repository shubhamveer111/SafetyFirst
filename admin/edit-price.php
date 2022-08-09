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
    $grainType=$_POST['grainType'];
    $flourPrice=$_POST['flourPrice'];
    
     
    $query=mysqli_query($con, "update productprice set Product Type='$grainType',Product Price='$flourPrice' where ID='$eid'");
    if ($query) {
   
    echo '<script>alert("Product price has been updated.")</script>';
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
<title>SF|| Update Category</title>
<?php include_once('includes/cs.php');?>
</head>
<body>

<!--Header-part-->
<?php include_once('includes/header.php');?>
<?php include_once('includes/sidebar.php');?>


<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <strong>Update Price</strong></div>
  <h1>Update Price</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Update</h5>
        </div>
        <div class="widget-content nopadding">
          <form method="post" class="form-horizontal">
           <?php
$eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from productprice where ID=$eid");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
            <div class="control-group">
            
              <label class="control-label">Product Name :</label>
              <div class="controls">
             
                <input type="text" class="span11" name="grainType" id="grainType" pattern="[a-zA-Z'-'\s]*" value="<?php  echo $row['Product Type'];?>" required='true' />
              </div>
              <label class="control-label">Price(per kg):</label>
              <div class="controls">
                <input type="text" class="span11" name="flourPrice" id="flourPrice" value="<?php  echo $row['Product Price'];?>" required='true' />
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