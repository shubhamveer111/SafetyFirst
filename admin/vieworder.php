<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['imsaid']==0)) {
   header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    
    $oid=$_GET['orderid'];
    $ressta=$_POST['status'];
    $remark=$_POST['restremark'];
 
    
    $query=mysqli_query($con,"insert into tbltracking(OrderId,remark,status) value('$oid','$remark','$ressta')"); 
   $query=mysqli_query($con, "update  tblorder set OrderFinalStatus='$ressta' where Ordernumber='$oid'");
    if ($query) {
   
    echo '<script>alert("Order Has been updated.")</script>';
    echo "<script type='text/javascript'> document.location ='all-order.php'; </script>";
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
<title>Flour Milling System|| View Orders Details</title>
<?php include_once('includes/cs.php');?>
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
</head>
<body>

<?php include_once('includes/header.php');?>
<?php include_once('includes/sidebar.php');?>


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="all-order.php" class="current">All Orders</a> </div>
    <h1>View Order Details</h1>
    
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
       
     
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View Order Details</h5>
            <p>
 <!--<a href="javascript:void(0);" onClick="popUpWindow('Flour Milling System-sem2/invoice.php?&oid=<?php echo $oid;?>&&odate=<?php echo $od;?>');" title="Order Invoice" style="color:#000" class="btn btn--box btn--small btn--blue btn--uppercase btn--weight">  Invoice</a></p>-->
          </div>
          
          <div class="widget-content nopadding">
             <?php
 $oid=$_GET['orderid'];
$ret=mysqli_query($con,"select * from tblorder join customer on customer.ID=tblorder.UserId where tblorder.Ordernumber='$oid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
            <table class="table table-bordered data-table">
 <tr align="center">
<td colspan="2" style="font-size:20px;color:blue">
 User Details</td></tr>

    <tr>
    <th style="color: blue;font-size: 16px">Order Number</th>
    <td><?php  echo $row['Ordernumber'];?></td>
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
    <th style="color: blue;font-size: 16px">Flat no./buldng no.</th>
    <td><?php  echo $row['Flatnobuldngno'];?></td>
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
    <th style="color: blue;font-size: 16px">Order Final Status</th>
    <td> <?php  
    $orserstatus=$row['OrderFinalStatus'];
if($row['OrderFinalStatus']=="Order Confirmed")
{
  echo "Order Confirmed";
}

if($row['OrderFinalStatus']=="On The Way")
{
  echo "Order On The Way";
}
if($row['OrderFinalStatus']=="Order Delivered")
{
  echo "Order Delivered";
}
if($row['OrderFinalStatus']=="Wait for confirmation")
{
  echo "Wait for shop approval";
}
if($row['OrderFinalStatus']=="Order Cancelled")
{
  echo "Order Cancelled";
}


     ;?></td>
      <th style="color: blue;font-size: 16px">Order Date</th>
    <td><?php  echo $row['OrderTime'];?></td>
  </tr>
</table>

  
<table class="table table-bordered data-table">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Order  Details</td></tr> 

 <tr>
    <th style="color: black;font-size: 16px">#</th>
<th style="color: black;font-size: 16px" >Product Image </th>
<th style="color: black;font-size: 16px">Product Name</th>
<th style="color: black;font-size: 16px">Delivey Type</th>
<th style="color: black;font-size: 16px">Price(per kg)</th>
<th style="color: black;font-size: 16px">Quantity(KG)</th>
<th style="color: black;font-size: 16px">Total</th>
</tr>

<?php  
$oid=$_GET['orderid'];
$query=mysqli_query($con,"select product.Image1,product.ProductName,product.CategoryName,product.Price,product.Description,payment.PId,payment.PaymentType,payment.Quantity,payment.SubTotal from product join payment on product.ID=payment.PId where payment.IsOrderPlaced=1 and payment.OrderNumber='$oid' ");
$num=mysqli_num_rows($query);

$cnt=1;
while ($row1=mysqli_fetch_array($query)) {?>
<tr>
  <td><?php echo $cnt;?></td>
 <td><img src="images/<?php echo $row1['Image1']?>" width="60" height="40" alt="<?php echo $row1['ProductName']?>"></td> 
  <td><?php  echo $row1['ProductName'];?></td> 
  <td><?php  echo $row1['PaymentType'];?></td>
   <td>₹ <?php  echo $total=$row1['Price'];?></td> 
   <td><?php  echo $row1['Quantity'];?></td>
  <td><?php  echo  $subtotal=$row1['SubTotal'];?></td>
</tr>
<?php 
$grandtotal+= $subtotal;
$cnt=$cnt+1;} ?>
<tr>
  <th colspan="6" style="text-align:center; color: red; font-size:15px;">Grand Total </th>
<td>₹ <?php  echo $grandtotal;?></td>
</tr> 


</table>  


    

<?php } ?>


<?php  if($orserstatus!="Wait for confirmation"){
$ret=mysqli_query($con,"select tbltracking.OrderCanclledByUser,tbltracking.remark,tbltracking.status as fstatus,tbltracking.StatusDate from tbltracking where tbltracking.OrderId ='$oid'");
$cnt=1;

 $cancelledby=$row['OrderCanclledByUser'];
 ?>
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; margin-top:1%;">
  <tr align="center">
   <th colspan="4" style="color: black;font-size: 16px">Tracking History</th> 
  </tr>
  <tr>
    <th style="color: black;font-size: 16px">#</th>
<th style="color: black;font-size: 16px">Remark</th>
<th style="color: black;font-size: 16px">Status</th>
<th style="color: black;font-size: 16px">Time</th>
</tr>
<?php  
while ($row=mysqli_fetch_array($ret)) { 
  ?>
<tr>
  <td><?php echo $cnt;?></td>
 <td><?php  echo $row['remark'];?></td> 
  <td><?php  echo $row['fstatus'];
if($cancelledby==1){
echo "("."by user".")";
} else {

echo "("."by Shop".")";
}

  ?></td> 
   <td><?php  echo $row['StatusDate'];?></td> 
</tr>
<?php $cnt=$cnt+1;} ?>
</table>
<?php  }  
?>
                      

<?php

  if($orserstatus=="Order Confirmed" || $orserstatus=="On The Way" || $orserstatus=="Wait for confirmation" ){ ?>

   <table class="table table-bordered data-table">
<form name="submit" method="post"> 
<tr>
    <th style="color: black;font-size: 16px">Shop Remark :</th>
    <td colspan="6">
    <textarea name="restremark" placeholder="" rows="5" cols="14" class="span11" required="true"></textarea></td>
  </tr>

  <tr>
    <th style="color: black;font-size: 16px">Shop Status :</th>
    <td>
   <select name="status" class="span11" required="true" >

    <?php  if($orserstatus=='Wait for confirmation'): ?>
     <option value="Order Confirmed" selected="true">Order Confirmed</option>
      <option value="Order Cancelled">Order Cancelled</option>
<?php endif;
if($orserstatus=='Order Confirmed'):
?>
    
     <option value="On The Way">Order On The Way</option>
     
<?php endif;

if($orserstatus=='On The Way'):
?>
<option value="Order Delivered">Order Delivered</option>
<?php endif;
?>
   </select></td>
  </tr>
    <tr align="center" style="text-align: center';">
    <td ><button type="submit" name="submit" class="btn btn-primary">Update order</button></td>
  </tr>
</form>
  <?php } ?>
 


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