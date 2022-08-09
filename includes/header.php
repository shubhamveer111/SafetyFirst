<!-- ::::::  Start  Header Section  ::::::  -->
    <header>
        <!-- ::::::  Start Large Header Section  ::::::  -->
        <div class="header header--1">
            <!-- Start Header Top area -->
            <div class="header__top header__top--style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header__top-content">
                                <div class="header__top-content--left">
                                    <div class="contact_cms">
                                        <?php

$ret=mysqli_query($con,"select * from infopages where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                        <span class="cms1">Contact Number: </span>
                                        <span class="cms2"><?php  echo $row['MobileNumber'];?></span>&nbsp;&nbsp;&nbsp;
                                        <span class="cms1">Email: </span>
                                        <span class="cms2"><?php  echo $row['Email'];?></span>
                                       
                                       
                                       
                                        <?php } ?>

                                    </div>
                                </div>
                                <div class="header__top-content--right">
                                    <?php if (strlen($_SESSION['msmsuid']==0)) {?>
                                    <div class="user-info user-set-role">
                                       
                                       
                                        <a class="user-set-role__button" href="login.php" aria-haspopup="true" style="color:blue;padding-right: 20px;">Sign in</a>
                                         <a class="user-set-role__button" data-toggle="tab" href="#lg2" aria-haspopup="true" style="color:blue;padding-right: 20px;">Sign Up</a>
                                    </div>

                                    <a class="user-set-role__button" href="admin/login.php" aria-haspopup="true" style="color:blue;padding-right: 20px;">Admin</a><?php }?>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Start Header Top area -->

            <!-- Start Header Middle area -->
            <div class="header__middle header__top--style-1 p-tb-30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="header__logo" >
                                <a href="index.php" class="header__logo-link">
                                   <h1>Safety First</h1>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row align-items-center">
                                <div class="col-lg-10">
                                    <form class="header__search-form" action="search.php" method="post">
                                       
                                        <div class="header__search-input">
                                            <input type="search" name="searchdata" placeholder="Enter your search key" required>
                                            <button class="btn btn--submit btn--blue btn--uppercase btn--weight " type="submit" name="search">Search</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-lg-2">
                                    <?php if (strlen($_SESSION['msmsuid']>0)) {?>
                                    <div class="header__wishlist-box">
                                        <!-- Start Header Wishlist Box -->
                                        <?php
                            $userid= $_SESSION['msmsuid'];
$ret2=mysqli_query($con,"select * from wishlist where UserId='$userid'");
$num1=mysqli_num_rows($ret2);

?>
                                        <div class="header__wishlist pos-relative">
                                            <a href="wishlist.php" class="header__wishlist-link">
                                                <i class="icon-heart"></i>
                                                <span class="wishlist-item-count pos-absolute"><?php echo $num1;?></span>
                                            </a>
                                        </div> <!-- End Header Wishlist Box -->

                                        <!-- Start Header Add Cart Box -->
                                        <?php
                            $userid= $_SESSION['msmsuid'];
$ret1=mysqli_query($con,"select * from payment where IsOrderPlaced is null && UserId='$userid'");
$num=mysqli_num_rows($ret1);

?>
                                        <div class="header-add-cart pos-relative m-l-40">
                                            <a href="cart.php" >
                                                <i class="icon-shopping-cart"></i>
                                                <span class="wishlist-item-count pos-absolute"><?php echo $num;?></span>
                                            </a>
                                        </div> <!-- End Header Add Cart Box -->
                                        
                                    </div> <?php }?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- End Header Middle area -->

            <!-- Start Header Menu Area -->
            <div class="header-menu">
                <div class="container">
                    <div class="row col-12">
                        <nav>
                            <ul class="header__nav">
                                <!--Start Single Nav link-->
                                <li class="header__nav-item pos-relative">
                                    
                                    <li class="header__nav-item pos-relative">
                                     <a href="index.php" class="header__nav-link">Home</a>
                                </li>
                                </li> <!-- End Single Nav link-->
<li class="header__nav-item pos-relative">
                                    
                                    <li class="header__nav-item pos-relative">
                                     <a href="about.php" class="header__nav-link">About Us</a>
                                </li>
                                 <!--Start Single Nav link-->
                                 <li class="header__nav-item pos-relative">
                                     <a href="contact.php" class="header__nav-link">Contact Us</a>
                                </li>
                                <!-- End Single Nav link-->
                                 <li class="header__nav-item pos-relative">
                                     <a href="products.php" class="header__nav-link">Products</a>
                                </li>
                              
                                
                                <li class="header__nav-item pos-relative">
                                    <a href="#" class="header__nav-link">Product Request<i class="icon-chevron-down"></i></a>
                                    <!--Single Dropdown Menu-->
                                    <ul class="dropdown__menu pos-absolute">
                                        <li class="dropdown__list">

                                            <a href="product-dashboard.php" class="dropdown__link">Product Information</a>
                                          
                                        </li>
                                        <li class="dropdown__list">

                                            <a href="product-request.php" class="dropdown__link">Product Request</a>
                                          
                                        </li>
                                        <li class="dropdown__list">

                                            <a href="view-product-request.php" class="dropdown__link">View Product Request Details</a>
                                          
                                        </li>
                                </li>
                                    </ul>
                                    </li>

                                <!--Start Single Nav link--> <?php if (strlen($_SESSION['msmsuid']>0)) {?>
                                
                                
                                <li class="header__nav-item pos-relative">
                                     <a href="my-order.php" class="header__nav-link">My Orders</a>
                                </li>
                                <li class="header__nav-item pos-relative">
                                    <a href="#" class="header__nav-link">My Account<i class="icon-chevron-down"></i></a>
                                    <!--Single Dropdown Menu-->
                                    <ul class="dropdown__menu pos-absolute">
                                        <li class="dropdown__list">

                                            <a href="dashboard.php" class="dropdown__link">Dashboard</a>
                                          
                                        </li>
                                        <li class="dropdown__list">

                                            <a href="profile.php" class="dropdown__link">Profile</a>
                                          
                                        </li>
                                        <li class="dropdown__list">
                                            <a href="change-password.php" class="dropdown__link">Change Password</a>
                                           
                                        </li>
                                       
                                        <li class="dropdown__list">
                                            <a href="logout.php" class="dropdown__link">Logout</a>
                                           
                                        </li>
                                    </ul>
                                    <!--Single Dropdown Menu-->
                                </li>
                                <?php } ?> <!-- End Single Nav link-->

                               
                            </ul>
                        </nav>
                    </div>
                </div>
            </div> <!-- End Header Menu Area -->
        </div> <!-- ::::::  Start Large Header Section  ::::::  -->
        
        <!-- ::::::  Start  Header Section  ::::::  -->
        <div class="header__mobile mobile-header--1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Header Top area -->
                        <div class="header__mobile-top">
                            <div class="mobile-header__logo">
                                <a href="index.html" class="mobile-header__logo-link">
                                    <img src="assets/img/logo/logo-color.jpg" alt="" class="mobile-header__logo-img">
                                </a>
                            </div>
                            <div class="header__wishlist-box">
                                <!-- Start Header Wishlist Box -->
                                <div class="header__wishlist pos-relative">
                                    <a href="wishlist.html" class="header__wishlist-link">
                                        <i class="icon-heart"></i>
                                        <span class="wishlist-item-count pos-absolute">3</span>
                                    </a>
                                </div> <!-- End Header Wishlist Box -->

                                <!-- Start Header Add Cart Box -->
                                <div class="header-add-cart pos-relative m-l-20">
                                    <a href="#offcanvas-add-cart__box" class="header__wishlist-link offcanvas--open-checkout offcanvas-toggle">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="wishlist-item-count pos-absolute">3</span>
                                    </a>
                                </div> <!-- End Header Add Cart Box -->

                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle m-l-20"><i class="icon-menu"></i></a>

                            </div>
                        </div> <!-- End Header  Top area -->

                       
                                       
                                           
                                           
                                        
                                
                                <div class="header__search-input header__search-input--mobile">
                                    <input type="search" placeholder="Enter your search">
                                    <button class="btn btn--submit btn--blue btn--uppercase btn--weight" type="submit"><i class="fal fa-search"></i></button>
                                </div>
                            </form>
                        </div> <!-- End Header  Middle area -->

                    </div>
                </div>
            </div>
        </div> <!-- ::::::   Header Section  ::::::  -->

       