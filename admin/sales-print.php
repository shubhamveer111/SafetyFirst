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
<?php include_once('includes/cs.php');?>
</head>
<body>


</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Sales Report Details</h5>
        </div>
        <div class="widget-content nopadding">
         
<?php
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];
$rtype=$_POST['requesttype'];

?>

<?php if($rtype=='mtwise'){
$month1=strtotime($fdate);
$month2=strtotime($tdate);
$m1=date("F",$month1);
$m2=date("F",$month2);
$y1=date("Y",$month1);
$y2=date("Y",$month2);
    ?>
   
<h4 align="center" style="color:blue">Sales Report  from <?php echo $m1."-".$y1;?> to <?php echo $m2."-".$y2;?></h4>
<hr />
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
<tr>
<th style="color: blue;font-size: 16px">S.NO</th>
<th style="color: blue;font-size: 16px">Month / Year </th>
<th style="color: blue;font-size: 16px">Sales</th>
</tr>
</thead>
<?php
$fstatus='Order Delivered';
$ret=mysqli_query($con,"select month(OrderTime) as lmonth,year(OrderTime) as lyear,sum(Price) as totalitmprice from payment join tblorder on tblorder.Ordernumber=payment.OrderNumber join product on product.ID=payment.PId where date(tblorder.OrderTime) between '$fdate' and '$tdate' and tblorder.OrderFinalStatus='$fstatus'  group by lmonth,lyear");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                    <td><?php echo $cnt;?></td>
                  <td><?php  echo $row['lmonth']."/".$row['lyear'];?></td>
              <td><?php  echo $total=$row['totalitmprice'];?></td>
             
                    </tr>
                <?php
$ftotal+=$total;
$cnt++;
}?>
   
   <tr>
                  <td colspan="2" align="center">Total </td>
              <td>₹<?php  echo $ftotal;?></td>
   
                 
                 
                </tr>   

</table>
<?php } else {
$year1=strtotime($fdate);
$year2=strtotime($tdate);
$y1=date("Y",$year1);
$y2=date("Y",$year2);
 ?>
     
    <h4 align="center" style="color:blue">Sales Report  from <?php echo $y1;?> to <?php echo $y2;?></h4>
<hr />
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
<tr>
<th>S.NO</th>
<th> Year </th>
<th>Sales</th>
</tr>
</thead>
<?php
$ret=mysqli_query($con,"select year(OrderTime) as lyear,sum(ItemPrice) as totalitmprice from payment join tblorder on tblorder.Ordernumber=payment.OrderNumber join product on product.ID=payment.PId where year(tblorder.OrderTime) between '$fdate' and '$tdate' group by lyear");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                    <td><?php echo $cnt;?></td>
                  <td><?php  echo $row['lyear'];?></td>
              <td><?php  echo $total=$row['totalitmprice'];?></td>
             
                    </tr>
                <?php
$ftotal+=$total;
$cnt++;
}?>
   
   <tr>
                  <td colspan="2" align="center">Total </td>
              <td><?php  echo $ftotal;?></td>
   
                 
                 
                </tr>   
               
</table>

<?php } ?>
        </div>
      </div>
    
    </div>
  </div>
 </div>
</div>
<p >
      <input name="Submit2" type="submit" class="txtbox4" value="Close" onClick="return f2();" style="cursor: pointer;"  />   <input name="Submit2" type="submit" class="txtbox4" value="Print" onClick="return f3();" style="cursor: pointer;"  /></p>
<?php include_once('includes/js.php');?>
</body>
</html>
<?php } ?>