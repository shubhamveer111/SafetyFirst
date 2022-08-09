<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['imsaid']==0)) {
   header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {
    
    $rid=$_POST['rid'];
    $date=$_POST['date'];
    $RequestRemark=$_POST['restremark'];
    $RequestFinalStatus=$_POST['status'];

   $query=mysqli_query($con, "update  productrequest set PickUpDate='$date',RequestRemark='$RequestRemark',RequestFinalStatus='$RequestFinalStatus' where prid='$rid'");
    if ($query) {
   
    echo '<script>alert("Request status has been updated.")</script>';
    echo "<script type='text/javascript'> document.location ='all-product-request.php'; </script>";
  }
  else
    {
    
      echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }

  
}
  

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SF|| View Product Request</title>
<?php include_once('includes/cs.php');?>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
</head>
<body>

<?php include_once('includes/header.php');?>
<?php include_once('includes/sidebar.php');?>


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="all-order.php" class="current"> All Mill Request</a> </div>
    <h1> View Product Request</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
       
     
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5> View Product Request</h5>
          </div>
          <div class="widget-content nopadding">
             <?php
 $rid=$_GET['prid'];
 $uid=$_GET['uid'];
 $ret=mysqli_query($con,"select * from productrequest,customer where customer.ID=productrequest.UserId and productrequest.UserId=$uid and productrequest.prid=$rid");
while ($row=mysqli_fetch_array($ret)) {
?>
            <table class="table table-bordered data-table">
 <tr align="center">
<td colspan="2" style="font-size:20px;color:blue">
 User Details</td></tr>

    <tr>
    <th style="color: blue;font-size: 16px"> Product Request Number</th>
    <td><?php  echo $row['prid'];?></td>
    <th style="color: blue;font-size: 16px">First Name</th>
    <td><?php  echo $row['FirstName'];?></td>
 </tr>
    
 
    <th style="color: blue;font-size: 16px">Last Name</th>
    <td><?php  echo $row['LastName'];?></td>
    <th style="color: blue;font-size: 16px">Email</th>
    <td><?php  echo $row['Email'];?></td>
  </tr>
  <tr>
    
    <th style="color: blue;font-size: 16px">Mobile Number</th>
    <td><?php  echo $row['MobileNumber'];?></td>
    <th style="color: blue;font-size: 16px">Buldng Name/Nu.</th>
    <td><?php  echo $row['Flatname/bname'];?></td>
  </tr>
  
  <tr>
    
       <th style="color: blue;font-size: 16px">StreetName</th>
    <td><?php  echo $row['StreetName'];?></td>
     <th style="color: blue;font-size: 16px">Area</th>
    <td><?php  echo $row['Area'];?></td>
  </tr>
 
  <tr>
   
     <th style="color: blue;font-size: 16px">Land Mark</th>
    <td><?php  echo $row['Landmark'];?></td>
     <th style="color: blue;font-size: 16px">City</th>
    <td><?php  echo $row['City'];?></td>
  </tr>
  
  <tr>
    <th style="color: blue;font-size: 16px">Request Final Status</th>
    <td> 
      <?php  
    $status=$row['RequestFinalStatus'];
if($row['RequestFinalStatus']=="Request Accepted")
{
  echo "Request Accepted";
}


if($row['RequestFinalStatus']=="Request Rejected")
{
  echo "Request Rejected";
}

if($row['RequestFinalStatus']=="")
{
  echo "Wait for approval";
}


     ;?>
     </td>
      <th style="color: blue;font-size: 16px">Another Contact Number</th>
    <td><?php  echo $row['AnotherContact'];?></td>
  </tr>
</table>

  
<table class="table table-bordered data-table">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Request  Details</td></tr> 

 <tr>
    <th style="color: black;font-size: 16px">#</th>
  
<th style="color: black;font-size: 16px">Product Type</th>
    <td><?php  echo $row['Product Type'];?></td>
  
  <th style="color: black;font-size: 16px">Quantity(KG)</th>
    <td><?php  echo $row['Quantity'];?></td>

    <th style="color: black;font-size: 16px">Product Description</th>
    <td><?php  echo $row['Description'];?></td>
  
<th style="color: black;font-size: 16px">Pick Up Date</th>
    <td><?php  echo $row['PickUpDate'];?></td>
  </tr>
</table>  

<?php } ?>


<?php  if($status!=""){
$ret=mysqli_query($con,"select * from productrequest where productrequest.prid='$rid'");
$cnt=1;

 
 ?>
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; margin-top:1%;">
  <tr align="center">
   <th colspan="4" style="color: blue;font-size: 16px">Request History Details</th> 
  </tr>
  <tr>
    <th style="color: black;font-size: 16px">#</th>
<th style="color: black;font-size: 16px">Remark</th>
<th style="color: black;font-size: 16px">Status</th>
<th style="color: black;font-size: 16px">Product Request Date</th>
</tr>
<?php  
while ($row=mysqli_fetch_array($ret)) { 
  ?>
<tr>
  <td><?php echo $cnt;?></td>
 <td><?php  echo $row['RequestRemark'];?></td> 
  <td><?php  echo $row['RequestFinalStatus']; echo ": -";?> <?php  echo $row['PickUpDate'];?></td> 
  <td><?php  echo $row['RequestDate'];?></td>
</tr>
<?php $cnt=$cnt+1;} ?>
</table>
<?php  }  
?>                    


  


  <table class="table table-bordered data-table">
<?php

  if($status=="" ){ ?>
<form name="submit" method="post"> 
<tr>

<th style="color: black;font-size: 16px">PickUp date & time</th>
<td>
           
    <input type="date" id="date_picker" name="date" class="form-control" value="<?php  echo $row['PickUpDate'];?>"  >
  </td>
  <script language="javascript">
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0');
                var yyyy = today.getFullYear();
                today = yyyy + '-' + mm + '-' + dd;
               $('#date_picker').attr('min',today);
     </script>
  </tr>
  <tr>
    <th style="color: black;font-size: 16px">Remark :</th>
    <td colspan="6">
    <textarea name="restremark" placeholder="" rows="5" cols="14" class="span11" required="true"></textarea></td>
  </tr>

  <tr>
    <th style="color: black;font-size: 16px">Status :</th>
    <td>
      <input value="<?php echo $rid; ?>" name="rid" hidden/>
   <select name="status" class="span11" required="true" >
     <option value="Request Accepted" selected="true">Request Accepted</option>
      <option value="Request Rejected">Request Rejected</option>

   </select></td>
  </tr>
    <tr align="center" style="text-align: center';">
    <td ><button type="submit" name="submit" class="btn btn-primary">Update order</button></td>
  </tr>
</form>
  <?php  }?>
 


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