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
 echo "<script type='text/javascript'> document.location ='index.php'; </script>";   
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
 
    <title>Safety First||Home Page</title>
   
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

    <link rel="stylesheet" href="assets/css/main.css">
    

</head>

<body>
  <?php include_once('includes/header.php');?>

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container m-t-30">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3 col-xl-3">
                    <!-- menu content -->
                    <div class="header-menu-vertical d-lg-block d-none">
                        <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i> All Categories</h4>
                        <ul class="menu-content">
                        <?php
              
$ret=mysqli_query($con,"select * from category where Status='1'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                            <li class="menu-item"><a href="category-details.php?bname=<?php  echo $row['CategoryName'];?>"><?php  echo $row['CategoryName'];?></a></li>
                           <?php }?>
                        </ul>
</h4>
                       

	

                    </div>
                    <!-- ::::::  Start Product-Style - Counter Section  ::::::  -->
                   

                </div>

                <div class="col-lg-9 col-xl-9">
                    <!-- ::::::  Start Hero Section  ::::::  -->
                    <div class="hero hero-slider hero---2">
                        <div class="swiper-wrapper">
                            <!-- Start Hero Image -->
                            <div class="hero-img hero-img--2 swiper-slide" style="background-image: url(assets/img/safetycloth2.jpg);">
                                <div class="hero__content">
                                    <div class="row">
                                        <div class="col-9 offset-1">
                                            <div class="title title--normal title--thin">New Products</div>
                                            <div class="title title--normal title--regular">Check Cloth & Shoes</div>
                        
                                            <a href="products.php" class="btn btn--box btn--large btn--blue btn--uppercase btn--weight">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End Hero Image -->
                            <!-- Start Hero Image -->
                            <div class="hero-img hero-img--2  swiper-slide" style="background-image: url(assets/img/safetycloth.jpg);">
                                <div class="hero__content">
                                    <div class="row">
                                        <div class="col-9 offset-1">
                                            <div class="title title--normal title--white title--thin">Fire and Safety Cloth</div>
                                            <div class="title title--normal title--white title--regular">Check differnt SafetyCloth</div>
                                          
                                            <a href="products.php" class="btn btn--box btn--large btn--blue btn--uppercase btn--weight">Buy Now</a>
                                        </div>
                                    </div>
                                </div> <!-- End Hero Image -->
                            </div>
                            <!-- Start Hero Image -->
                            <div class="hero-img hero-img--2 swiper-slide" style="background-image: url(assets/img/Fireextinguisher3.jpg);">
                                <div class="hero__content">
                                    <div class="row">
                                    <div class="row">
                                        <div class="col-9 offset-1">
                                            <div class="title title--normal title--thin">New Products</div>
                                            <div class="title title--normal title--regular">Check Different Fire Extinguisher</div>
                        
                                            <a href="products.php" class="btn btn--box btn--large btn--blue btn--uppercase btn--weight">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div> <!-- End Hero Image -->

                            <div class="hero-img hero-img--2 swiper-slide" style="background-image: url(assets/img/Firebaneerimg.jpg);">
                                <div class="hero__content">
                                    <div class="row">
                                    <div class="col-9 offset-1">
                                            <div class="title title--normal title--white title--thin">Fireextinguisher</div>
                                            <div class="title title--normal title--white title--regular">Check different Fireextinguisher</div>
                                          
                                            <a href="products.php" class="btn btn--box btn--large btn--blue btn--uppercase btn--weight">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End-->

                            <!-- Add Pagination -->
                            <div class="swiper-pagination hero__dots hero__dots--2"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <!-- Add Arrows -->
                                <div class="swiper-button-next hero__nav hero__nav--next"><i class="far fa-chevron-right"></i></div>
                                <div class="swiper-button-prev hero__nav hero__nav--prev"><i class="far fa-chevron-left"></i></div>
                            </div>
                        </div> <!-- ::::::  End Hero Section  ::::::  -->
                    </div> <!-- ::::::  ENd Hero Section  ::::::  -->

                    <!-- ::::::  Start  Product Style - Default Section [2column]  ::::::  -->
                    <div class="product product--1 swiper-outside-arrow-hover">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-content section-content--border d-md-flex align-items-center justify-content-between">
                                    <h5 class="section-content__title">Products</h5>
                                    <a href="products.php">Show All Products <i class="icon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="swiper-outside-arrow-fix pos-relative">
                                    <div class="product-default-slider-4grid-2row overflow-hidden  m-t-50">
                                        <div class="swiper-wrapper">
                                            <!-- Start Single Default Product -->
                                <?php
//Getting default page number
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
// Formula for pagination
        $no_of_records_per_page = 4;
        $offset = ($pageno-1) * $no_of_records_per_page;
// Getting total number of pages
        $total_pages_sql = "SELECT COUNT(*) FROM product where Status='1'";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
                    
$ret=mysqli_query($con,"select * from product where Status='1' LIMIT $offset, $no_of_records_per_page");
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
                                                    <a href="login.php" class="product__wishlist-icon"><i class="icon-heart"></i></a>
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
                                </div><?php } ?> <!-- End Single Default Product -->
                                <!-- Start Single Default Product --> <!-- ::::::  End  Product Style - Default Section [2column]  ::::::  -->

                    <!-- ::::::  Start banner Section  ::::::  -->
                    <div class="banner banner--1">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner__box">
                                    
                                        <img src="assets/img/company.jpg"  alt="" class="banner__img">
                                  
                                </div>
                            </div>
                        </div>
                    </div> <!-- ::::::  End banner Section  ::::::  -->

      

                </div>
                
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- ::::::  Start CMS Section  ::::::  -->
                    <div class="cms cms--1">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                                <!-- Start Single CMS box -->
                                <div class="cms__content">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="assets/img/icon/cms/icon1.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">Free Delivery</h6>
                                        <span class="cms__des">For all oders</span>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                            <!-- Start Single CMS box -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="cms__content">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="assets/img/icon/cms/icon2.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">Safe Payment</h6>
                                        <span class="cms__des">100% secure payment</span>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                            <!-- Start Single CMS box -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="cms__content">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="assets/img/icon/cms/icon3.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">Shop With Confidence</h6>
                                        <span class="cms__des">If goods have problems</span>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                            <!-- Start Single CMS box -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="cms__content">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="assets/img/icon/cms/icon4.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">24/7 Help Center</h6>
                                        <span class="cms__des">Dedicated 24/7 support</span>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                        </div>
                    </div> <!-- ::::::  End CMS Section  ::::::  -->
                </div>
            </div>
        </div><br>
        
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->
    <div>
    <a href="feedback.php">
      <img src="assets/img/feed.png"  style="width:1600px; height:500px;" >
                                                    </a>
                                                    </div>
    <!-- ::::::  Start  Footer Section  ::::::  -->
    <?php include_once('includes/footer.php');?>


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
