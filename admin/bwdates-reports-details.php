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
<title>FMS|| Between Dates Reports</title>
<?php include_once('includes/cs.php');?>
</head>
<body>

<?php include_once('includes/header.php');?>
<?php include_once('includes/sidebar.php');?>


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="all-order.php" class="current">Between Dates Reports</a> </div>
    <h1>Between Dates Reports</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
       
     
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Between Dates Reports</h5>
             <?php
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];
$rtype=$_POST['requesttype'];
?>

<hr />
<?php if($rtype=="all"){?>
 
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
               <h4 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?> of All Orders</h4>
              <thead>
                <tr>
                  <th style="color: blue;font-size: 16px">S.NO</th>
                  <th style="color: blue;font-size: 16px">Order Number</th>
                  <th style="color: blue;font-size: 16px">Name</th>
                  <th style="color: blue;font-size: 16px">Mobile Number</th>
                  <th style="color: blue;font-size: 16px">Email</th>
                  <th style="color: blue;font-size: 16px">Order Date</th>
                  <th >Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
$ret=mysqli_query($con,"select * from tblorder join customer on customer.ID=tblorder.UserId where OrderTime between '$fdate' and '$tdate'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <tr class="gradeX">
                 <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['Ordernumber'];?></td>
                  <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                  <td><?php  echo $row['MobileNumber'];?></td>
                  <td><?php  echo $row['Email'];?></td>
                  <td><?php  echo $row['OrderTime'];?></td>
                                    <td><a href="vieworder.php?orderid=<?php echo $row['Ordernumber'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?> 
              </tbody>
            </table>
            <?php } if($rtype==""){?> 
              
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <h4 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?> of Not Confirmed Orders</h4>
              <thead>
                <tr>
                  <th style="color: blue;font-size: 16px">S.NO</th>
                  <th style="color: blue;font-size: 16px">Order Number</th>
                  <th style="color: blue;font-size: 16px">Name</th>
                  <th style="color: blue;font-size: 16px">Mobile Number</th>
                  <th style="color: blue;font-size: 16px">Email</th>
                  <th style="color: blue;font-size: 16px">Order Date</th>
                  <th style="color: blue;font-size: 16px">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
$ret=mysqli_query($con,"select * from tblorder join customer on customer.ID=tblorder.UserId where OrderFinalStatus is null && OrderTime between '$fdate' and '$tdate'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <tr class="gradeX">
                 <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['Ordernumber'];?></td>
                  <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                  <td><?php  echo $row['MobileNumber'];?></td>
                  <td><?php  echo $row['Email'];?></td>
                  <td><?php  echo $row['OrderTime'];?></td>
                                    <td><a href="vieworder.php?orderid=<?php echo $row['Ordernumber'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?> 
              </tbody>
            </table>
            <?php } if($rtype=="Order Confirmed"){?>
              
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <h4 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?> of Confirmed Orders</h4>
              <thead>
                <tr>
                  <th style="color: blue;font-size: 16px">S.NO</th>
                  <th style="color: blue;font-size: 16px">Order Number</th>
                  <th style="color: blue;font-size: 16px">Name</th>
                  <th style="color: blue;font-size: 16px">Mobile Number</th>
                  <th style="color: blue;font-size: 16px">Email</th>
                  <th style="color: blue;font-size: 16px">Order Date</th>
                  <th style="color: blue;font-size: 16px">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
$ret=mysqli_query($con,"select * from tblorder join customer on customer.ID=tblorder.UserId where OrderFinalStatus='Order Confirmed' && OrderTime between '$fdate' and '$tdate'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <tr class="gradeX">
                 <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['Ordernumber'];?></td>
                  <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                  <td><?php  echo $row['MobileNumber'];?></td>
                  <td><?php  echo $row['Email'];?></td>
                  <td><?php  echo $row['OrderTime'];?></td>
                                    <td><a href="vieworder.php?orderid=<?php echo $row['Ordernumber'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?> 
              </tbody>
            </table>
           
              </table>
            <?php } if($rtype=="Order Pickup"){?>
              
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <h4 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?> of Pickup Orders</h4>
              <thead>
                <tr>
                  <th style="color: blue;font-size: 16px">S.NO</th>
                  <th style="color: blue;font-size: 16px">Order Number</th>
                  <th style="color: blue;font-size: 16px">Name</th>
                  <th style="color: blue;font-size: 16px">Mobile Number</th>
                  <th style="color: blue;font-size: 16px">Email</th>
                  <th style="color: blue;font-size: 16px">Order Date</th>
                  <th style="color: blue;font-size: 16px">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
$ret=mysqli_query($con,"select * from tblorder join customer on customer.ID=tblorder.UserId where OrderFinalStatus='Order Pickup' && OrderTime between '$fdate' and '$tdate'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <tr class="gradeX">
                 <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['Ordernumber'];?></td>
                  <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                  <td><?php  echo $row['MobileNumber'];?></td>
                  <td><?php  echo $row['Email'];?></td>
                  <td><?php  echo $row['OrderTime'];?></td>
                                    <td><a href="vieworder.php?orderid=<?php echo $row['Ordernumber'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?> 
              </tbody>
            </table>
            <?php } if($rtype=="On The Way"){?>
               
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <h4 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?> of On the Way Orders</h4>
              <thead>
                <tr>
                  <th style="color: blue;font-size: 16px">S.NO</th>
                  <th style="color: blue;font-size: 16px">Order Number</th>
                  <th style="color: blue;font-size: 16px">Name</th>
                  <th style="color: blue;font-size: 16px">Mobile Number</th>
                  <th style="color: blue;font-size: 16px">Email</th>
                  <th style="color: blue;font-size: 16px">Order Date</th>
                  <th style="color: blue;font-size: 16px">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
$ret=mysqli_query($con,"select * from tblorder join customer on customer.ID=tblorder.UserId where OrderFinalStatus='On The Way' && OrderTime between '$fdate' and '$tdate'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <tr class="gradeX">
                 <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['Ordernumber'];?></td>
                  <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                  <td><?php  echo $row['MobileNumber'];?></td>
                  <td><?php  echo $row['Email'];?></td>
                  <td><?php  echo $row['OrderTime'];?></td>
                                    <td><a href="vieworder.php?orderid=<?php echo $row['Ordernumber'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?> 
              </tbody>
            </table>
            <?php } if($rtype=="Order Delivered"){?>
             
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
               <h4 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?> of Delivered Orders</h4>
              <thead>
                <tr>
                  <th style="color: blue;font-size: 16px">S.NO</th>
                  <th style="color: blue;font-size: 16px">Order Number</th>
                  <th style="color: blue;font-size: 16px">Name</th>
                  <th style="color: blue;font-size: 16px">Mobile Number</th>
                  <th style="color: blue;font-size: 16px">Email</th>
                  <th style="color: blue;font-size: 16px">Order Date</th>
                  <th style="color: blue;font-size: 16px">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
$ret=mysqli_query($con,"select * from tblorder join customer on customer.ID=tblorder.UserId where OrderFinalStatus='Order Delivered' && OrderTime between '$fdate' and '$tdate'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <tr class="gradeX">
                 <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['Ordernumber'];?></td>
                  <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                  <td><?php  echo $row['MobileNumber'];?></td>
                  <td><?php  echo $row['Email'];?></td>
                  <td><?php  echo $row['OrderTime'];?></td>
                                    <td><a href="vieworder.php?orderid=<?php echo $row['Ordernumber'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?> 
              </tbody>
            </table>
            <?php } if($rtype=="Order Cancelled"){?>
              
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <h4 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?> of Cancelled Orders</h4>
              <thead>
                <tr>
                  <th style="color: blue;font-size: 16px">S.NO</th>
                  <th style="color: blue;font-size: 16px">Order Number</th>
                  <th style="color: blue;font-size: 16px">Name</th>
                  <th style="color: blue;font-size: 16px">Mobile Number</th>
                  <th style="color: blue;font-size: 16px">Email</th>
                  <th style="color: blue;font-size: 16px">Order Date</th>
                  <th style="color: blue;font-size: 16px">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
$ret=mysqli_query($con,"select * from tblorder join customer on customer.ID=tblorder.UserId where OrderFinalStatus='Order Cancelled' && OrderTime between '$fdate' and '$tdate'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <tr class="gradeX">
                 <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['Ordernumber'];?></td>
                  <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                  <td><?php  echo $row['MobileNumber'];?></td>
                  <td><?php  echo $row['Email'];?></td>
                  <td><?php  echo $row['OrderTime'];?></td>
                                    <td><a href="vieworder.php?orderid=<?php echo $row['Ordernumber'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?> 
              </tbody>
            </table>
          <?php } ?>
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