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
    $nm=$_POST['nm'];
    $email=$_POST['email'];
    $cno=$_POST['cno'];
    $add=$_POST['add'];
     $image1=$_POST['image1'];
    $idd=$_POST['idd'];
     $lic=$_POST['lic'];
     $pass=$_POST['pass'];

     $ID= mt_rand(100000000, 999999999);

 
    $query=mysqli_query($con, "insert into delivery(ID,FullName,Email,ContactNumber,Address,Image,IDProof,License,Password) value('$ID','$nm','$email','$cno','$add','$image1','$idd','$lic','$pass')");
    if ($query) {
   
    echo '<script>alert("Product has been created.")</script>';
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
<title>Flour Milling System|| Add Delivery Boy</title>
<?php include_once('includes/cs.php');?>

</head>
<body>

<!--Header-part-->
<?php include_once('includes/header.php');?>
<?php include_once('includes/sidebar.php');?>


<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="add-product.php" class="tip-bottom">Add Product</a></div>
  <h1>Add Delivery Boy</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Delivery Boy</h5>
        </div>
        <div class="widget-content nopadding">
          <form method="post" class="form-horizontal" enctype="multipart/form-data">

          <div class="control-group">
              <label class="control-label">Full Name:</label>
              <div class="controls">
              <input type="text" class="span11"  name="nm" id="nm" value="" required="true"  placeholder="Enter Full Name" />
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">Email ID:</label>
              <div class="controls">
                <input type="text" class="span11"  name="email" id="email" value="" required="true" placeholder="Enter Email ID" />
              </div>
            </div>


           <div class="control-group">
              <label class="control-label">Contact Number:</label>
              <div class="controls">
                <input type="text" class="span11" name="cno" id="cno" value="" required='true' maxlenlenght="10" placeholder="Enter Contact Number" />
              </div>
            </div>
            
            
           
            <div class="control-group">
              <label class="control-label">Address:</label>
              <div class="controls">
                <input type="textarea" class="span11"  name="add" id="add" value="" required="true"  placeholder="Enter Address Details" />
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Upload Image:</label>
              <div class="controls">
                <input type="file" class="span11" name="image1" id="image1" value="" required="true"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">ID Proof(Adhar Card/PAN Card/Voting Card):</label>
              <div class="controls">
                <input type="file" class="span11" name="idd" id="idd" value="" required="true"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Driving License:</label>
              <div class="controls">
                <input type="file" class="span11" name="lic" id="lic" value="" required="true"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password:</label>
              <div class="controls">
                <input type="password" class="span11" name="pass" id="pass" value="" />
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