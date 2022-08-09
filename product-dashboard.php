<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>SF||About Page</title>
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome.css">
    <link rel="stylesheet" href="assets/css/vendor/plaza-icon.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Plugin CSS Files -->
    <link rel="stylesheet" href="assets/css/plugin/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugin/material-scrolltop.css">
    <link rel="stylesheet" href="assets/css/plugin/price_range_style.css">
    <link rel="stylesheet" href="assets/css/plugin/in-number.css">
    <link rel="stylesheet" href="assets/css/plugin/venobox.min.css">

    <!-- Main Style CSS File -->
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
       
       Button{
        
        font-size:20px;
        font-weight:1000;
        

    }
    
              
        
  </style>
</head>

<body>

  <?php include_once('includes/header.php');?>
   <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="index.php">Home</a></li>
                        <li class="page-breadcrumb__nav active">Product Information</li>
                        <Button style="float:right; font-size:20px;" class="Button1"><a href="product-request.php">Give Product Request</a></Button>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <div class="widget-content nopadding">
            <table class="table table-bordered data-table" >
              <thead>
                <tr>
                 
                  <th>Product Type</th>
                  <th>Product Price(per kg)</th>
                  
                  
                </tr>
              </thead>
              <tbody>
                <?php
$ret=mysqli_query($con,"select * from productprice");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <tr class="gradeX">
                  
                  <td><?php  echo $row['Product Type'];?></td>

                  <td>₹ <?php  echo $row['Product Price'];?></td>

                  </tr>
                <?php 
$cnt=$cnt+1;
}?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ::::::  End  Main Container Section  ::::::  -->

<?php include_once('includes/footer.php');?>

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>
    

    <!-- ::::::::::::::All Javascripts Files here ::::::::::::::-->

    <!-- Vendor JS Files -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.js"></script>

    <!-- Plugins JS Files -->
    <script src="assets/js/plugin/swiper.min.js"></script>
    <script src="assets/js/plugin/jquery.countdown.min.js"></script>
    <script src="assets/js/plugin/material-scrolltop.js"></script>
    <script src="assets/js/plugin/price_range_script.js"></script>
    <script src="assets/js/plugin/in-number.js"></script>
    <script src="assets/js/plugin/jquery.elevateZoom-3.0.8.min.js"></script>
    <script src="assets/js/plugin/venobox.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
