<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
{
$pid=$_POST['pid'];
$userid= $_SESSION['msmsuid'];
$query=mysqli_query($con,"insert into payment(UserId,PId) values('$userid','$pid') ");
if($query)
{
 echo "<script>alert('Product has been added in to the cart');</script>";
 echo "<script type='text/javascript'> document.location ='cart.php'; </script>";   
} else {
 echo "<script>alert('Something went wrong.');</script>";      
}
}

if(isset($_POST['wsubmit']))
{
$wpid=$_POST['wpid'];
$userid= $_SESSION['msmsuid'];
$query=mysqli_query($con,"insert into wishlist(UserId,ProductId) values('$userid','$wpid') ");
if($query)
{
 echo "<script>alert('Product has been added to the wishlist');</script>";
 echo "<script type='text/javascript'> document.location ='wishlist.php'; </script>";   
} else {
 echo "<script>alert('Something went wrong.');</script>";      
}
}
  ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>FMS</title>
   
    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

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
</head>

<body>

    <!-- ::::::  Start  Header Section  ::::::  -->
   <?php include_once('includes/header.php');?>
    
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="index.php">Home</a></li>
                        <li class="page-breadcrumb__nav active">Safety First</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                 <!-- Start Rightside - Content -->
                <div class="col-12">
                   
                    <!-- ::::::  Start Sort Box Section  ::::::  -->
                    <div class="sort-box m-tb-30">
                        <!-- Start Sort Left Side -->
                        <div class="sort-box__left">
                            <div class="sort-box__tab">
                                <ul class="sort-box__tab-list nav">
                                    <li><a class="sort-nav-link active" data-toggle="tab" href="#sort-grid"><i class="icon-grid"></i>  </a></li>
                                    <li><a class="sort-nav-link" data-toggle="tab" href="#sort-list"><i class="icon-list"></i></a></li>
                                </ul>
                            </div>
                           
                        </div> <!-- Start Sort Left Side -->

                        <div class="sort-box__right">
                           
                            <div class="sort-box__option">
                                
                            </div>
                        </div>
                    </div> <!-- ::::::  Start Sort Box Section  ::::::  -->

                    <div class="product-tab-area">
                        <div class="tab-content ">
                            <div class="tab-pane show active clearfix" id="sort-grid">
                                <!-- Start Single Default Product -->
                                <?php
                                
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  
 if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }

    $total_records_per_page = 8;
    $offset = ($page_no-1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2"; 

    $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM product where ProductName like  '$sdata%' && CategoryName like '$sdata%'");
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1; // total page minus 1
                    
$ret=mysqli_query($con,"select * from product where ProductName like  '$sdata%' && BrandName like '$sdata%' LIMIT $offset, $total_records_per_page");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <div class="product__box product__box--default product__box--border-hover text-center float-left float-4">
                                    <div class="product__img-box">
                                        <a href="single.php?pid=<?php  echo $row['ID'];?>" class="product__img--link">
                                            <img class="product__img" src="admin/images/<?php echo $row['Image1'];?>" width="150" height="150" alt="">
                                        </a>

                                    <?php if($_SESSION['msmsuid']==""){?>
                                    <a href="login.php" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to Cart</a>
<?php } else {?>
    <form method="post"> 
    <input type="hidden" name="pid" value="<?php echo $row['ID'];?>">   
<button type="submit" name="submit" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to Cart</button>
  </form> 
<?php }?>
                                       
                                       <?php if($_SESSION['msmsuid']==""){?>
                                                    <a href="login.php?wpid=<?php  echo $row['ID'];?>" class="product__wishlist-icon"><i class="icon-heart"></i></a>
                                                    <?php } else {?>
                                                        <form method="post"> 
    <input type="hidden" name="wpid" value="<?php echo $row['ID'];?>">   
<button type="submit" name="wsubmit" class="product__wishlist-icon"><i class="icon-heart"></i></button>
  </form> 
<?php }?>
                                    </div>
                                    <div class="product__price m-t-10">
                                       
                                        <span class="product__price-reg">₹<?php echo $row['Price'];?></span>
                                    </div>
                                    <a href="single.php?pid=<?php  echo $row['ID'];?>" class="product__link product__link--underline product__link--weight-light m-t-15">
                                        <?php echo $row['ProductName'];?>
                                    </a>
                                </div><?php 
$cnt=$cnt+1;
} } else { 
  echo 'No record found against this search';

  ?>
   
<?php } ?> <!-- End Single Default Product -->
                                <!-- Start Single Default Product -->
                                
                                
                            </div>
                        </div>
                    </div>

                    <div class="page-pagination">
                        <span></span>
                        <ul class="page-pagination__list">
                            <li class="page-pagination__item">
                              <a class="page-pagination__link btn btn--gray"  href="#"><i class="icon-chevron-left"></i> Previous</a>
                            </li>
                            <li class="page-pagination__item"><a class="page-pagination__link active btn btn--gray"  href="#">1</a></li>
                            <li class="page-pagination__item"><a class="page-pagination__link btn btn--gray"  href="#">2</a></li>
                            <li class="page-pagination__item">
                              <a class="page-pagination__link btn btn--gray"  href="#">Next<i class="icon-chevron-right"></i></a>
                            </li>
                          </ul>
                          
                    </div>
                </div>  <!-- Start Rightside - Content -->
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

    <!-- ::::::  Start  Footer Section  ::::::  -->
  <?php include_once('includes/footer.php');?>

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    
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

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugin/plugins.min.js"></script> -->

    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="assets/js/main.js"></script>
</body>

</html>
