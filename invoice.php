<?php
session_start();
error_reporting(0);
include_once('includes/dbconnection.php');
if (strlen($_SESSION['msmsuid']==0)) {
  header('location:logout.php');
  } else{ 

    ?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SafetyFirst-Invoice</title>
</head>
<body>

<div style="margin-left:50px;">

<?php  
$oid=$_GET['oid'];
// $query=mysqli_query($con,"select order.Flatnobuldngno,order.StreetName,order.Area,order.Landmark,order.City,order.Zipcode,order.Phone,order.OrderTime,product.Image1,product.ProductName,product.Color,product.Price,payment.PId,payment.OrderNumber,payment.Quantity,payment.SubTotal from payment 
//   join product on product.ID=payment.PId 
//   join order on order.Ordernumber=payment.OrderNumber
//   where payment.OrderNumber='$oid' and payment.IsOrderPlaced=1");

$query=mysqli_query($con,"select tblorder.OrderTime,product.Image1,product.ProductName,product.Description,product.Price,payment.PId,payment.OrderNumber,payment.Quantity,payment.SubTotal from payment join product on product.ID=payment.PId 
  join tblorder on tblorder.Ordernumber=payment.OrderNumber where payment.OrderNumber='$oid' and payment.IsOrderPlaced=1");
$num=mysqli_num_rows($query);
$cnt=1;
?>

<?php
$uid=$_SESSION['msmsuid'];
$ret=mysqli_query($con,"select * from customer where ID='$uid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) 

?> 
<label style="font-size:25;"><b><center>Safety First</center></b></label><br>

<table border="1"  cellpadding="10" style="border-collapse: collapse; border-spacing:0; width: 100%; text-align: center;">



<tr align="center">
   <th colspan="7" >Invoice ID:<?php echo  $oid;?></th> 
</tr>  


<tr>
    <th colspan="4">Order Date :</th>
<td colspan="5">  </b> <?php echo $_GET['odate'];?></td>
</tr>

  <tr>
     <th>#</th>
                                
                <th>Image</th>
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Price(per kg)</th>
                <th>Quantity(KG)</th>
                <th>Total</th>
                
</tr>
<?php  
while ($row=mysqli_fetch_array($query)) {
  ?>


<tr>
  <td><?php echo $cnt;?></td>

 <td><img src="admin/images/<?php echo $row['Image1'];?>" width="60" height="40" alt=""></td> 
  <td><?php echo $row['ProductName'];?></td>   
   <td><?php echo $row['Description'];?>  </td> 
   <td>₹ <?php  echo $total=$row['Price'];?></td> 
   <td><?php  echo $row['Quantity'];?></td>
  <td><?php  echo $subtotal=$row['SubTotal'];?></td>
 
</tr>
<?php 
$grandtotal+=$subtotal;
$cnt=$cnt+1;} ?>
<tr>
  <th colspan="6" style="text-align:center">Grand Total </th>
<td width=80>₹ <?php  echo $grandtotal;?></td>
</tr>
</table>
     
     <p >
      <input name="Submit2" type="submit" class="txtbox4" value="Close" onClick="return f2();" style="cursor: pointer;"  />   <input name="Submit2" type="submit" class="txtbox4" value="Print" onClick="return f3();" style="cursor: pointer;"  /></p>
</div>

</body>
</html>

  <?php } ?>   