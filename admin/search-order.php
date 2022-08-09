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
<title>Flour Milling System|| Search Order</title>
<?php include_once('includes/cs.php');?>
</head>
<body>

<?php include_once('includes/header.php');?>
<?php include_once('includes/sidebar.php');?>


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="search.php" class="current">Search Orders</a> </div>
    <h1>Search Orders</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
       <div class="widget-content nopadding">
          <form method="post" class="form-horizontal">
           
            <div class="control-group">
              <label class="control-label">Search by Order Number :</label>
              <div class="controls">
                <input type="text" class="span11"  id="searchdata" name="searchdata" value="" required='true' />
              </div>
            </div>
          
           <div class="text-center">
                  <button class="btn btn-primary my-4" type="submit" name="search">Search</button>
                </div>
          </form>
            <br>
        </div>
   <?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4> 
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Search Orders</h5>
          </div>
          <div class="widget-content nopadding">
              <form name="cart" method="post">
            <table class="table table-bordered data-table">
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
$ret=mysqli_query($con,"select * from tblorder join customer on customer.ID=tblorder.UserId where Ordernumber like '$sdata%'");
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
                </tr>  <?php 
$cnt=$cnt+1;
} } ?>
   
<?php //} }?>
              </tbody>
            </table>
          </form>
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

<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
<?php } ?>