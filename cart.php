<?php
session_start();
error_reporting(0);
include_once('includes/dbconnection.php');
if (strlen($_SESSION['msmsuid']==0)) {
  header('location:logout.php');
  } else{ 
// Code for deleting product from cart
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$query=mysqli_query($con,"delete from payment where ID='$rid'");
     echo "<script>alert('Product Has Been Removed From Cart');</script>"; 
     echo "<script>window.location.href = 'cart.php'</script>";     
}


  ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Safety First||Cart</title>
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

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css"/>
    <link rel="stylesheet" href="assets/css/plugin/plugins.min.css"/>
    <link rel="stylesheet" href="assets/css/main.min.css"> -->

    <!-- Main Style CSS File -->
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="main.js"></script>
</head>

<body>
<script>
                                    var x=[],y=[],z=[];
                                    var grandTotal = 0;
                                    var pid=[],pname=[],pqty=[],psubtotal=[]
                                    function setGrandTotal(){
                                        grandTotal = 0;
                                        for(var i=0;i<x.length;i++){
                                        grandTotal = grandTotal + (x[i].value * z[i].value)
                                        }
                                        document.getElementById("grandTotal").innerHTML = "₹ "+grandTotal;
                                    }
                                    
                                </script>
  <?php include_once('includes/header.php');?>

   <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="index.php">Home</a></li>
                        <li class="page-breadcrumb__nav active">Cart Page</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content">
                        <h5 class="section-content__title">Your cart items</h5>
                    </div>
                    <!-- Start Cart Table -->
                    <div class="table-content table-responsive cart-table-content m-t-30">
                        <table>
                            <thead class="gray-bg" >
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                   
                                    <th>Price(Per KG)</th>
                                    <th>Quantity(KG)</th>
                                   
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                

                                <?php 
$userid= $_SESSION['msmsuid'];
$query=mysqli_query($con,"select product.ID,product.Image1,product.ProductName,product.CategoryName,product.Price,payment.PId,payment.ID from payment join product on product.ID=payment.PId where payment.UserId='$userid' and payment.IsOrderPlaced is null");
$num=mysqli_num_rows($query);
		
if($num>0){
    $temp=0;
while ($row=mysqli_fetch_array($query)) {
  
?>


                                <tr>
                                    <td class="product-thumbnail">
                                        <script>
                                            pid.push("<?php echo $row['PId'] ?>");
                                        </script>
                                    <a href="single.php?pid=<?php  echo $row['PId'];?>" class="product__img--link">
                                        <img class="img-fluid" src="admin/images/<?php echo $row['Image1']?>" alt="">
                                </a>
                                    </td>
                                    <script>
                                            pname.push("<?php echo $row['ProductName'] ?>");
                                    </script>
                                   <td class="product-name"> <a href="single.php?pid=<?php  echo $row['PId'];?>"><?php  echo $row['ProductName'];?></td>
                                   
                                    <td class="product-price-cart"><span class="amount" >₹<?php echo $total=$row['Price']?></span><input id="hd<?php echo $temp ?>" value="<?php echo $total=$row['Price']?>" hidden></td>
                                    <td><input class="inp" id="qty_input<?php echo $temp ?>" type="number" min="1" value="1" name="qty"/> </td>
                                    
                                    <td class="product-subtotal">₹<span id="custom_price<?php echo $temp ?>" name="sub"><?php echo $total=$row['Price'] ?></span></td>
                                    <!-- <input name="pid<?php echo $temp ?>" value="<?php echo $row['ID'] ?>" hidden/>
                                    <input name="pname<?php echo $temp ?>" value="<?php echo $row['ProductName'] ?>" hidden/>
                                    <input name="pqty<?php echo $temp ?>" value="" hidden/>
                                    <input name=""/> -->
                                    <script>
                                        x[<?php echo $temp ?>] = document.getElementById("qty_input"+<?php echo $temp ?>);
                                        y[<?php echo $temp ?>] = document.getElementById("custom_price"+<?php echo $temp ?>);
                                        z[<?php echo $temp ?>] = document.getElementById("hd"+<?php echo $temp ?>);
                                        console.log(x[<?php echo $temp ?>]);
                                        console.log(y[<?php echo $temp ?>]);
                                        console.log(z[<?php echo $temp ?>]);
                                        
                                        x[<?php echo $temp ?>].addEventListener("focusout",async(event)=>{
                                            event.preventDefault();
                                            console.log("Evenet Triggered");
                                            console.log(x[<?php echo $temp ?>].value+" : "+z[<?php echo $temp ?>].value);
                                            y[<?php echo $temp ?>].innerHTML= x[<?php echo $temp ?>].value * z[<?php echo $temp ?>].value;
                                            setGrandTotal();
                                        })
                                        
                                    </script>
                                    <?php 
//$grandtotal+=$total;
$cnt=$cnt+1;   
$temp=$temp+1;            
 ?>
                                    
                                    
                                    <td class="product-remove">
                                   <!-- <input type="submit" name="submit" value="Update" class="btn btn-upper btn-primary pull-right outer-right-xs">-->
                                        <a href="cart.php?delid=<?php echo $row['ID'];?>" onclick="return confirm('Do you really want to Delete ?');"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr><?php $cnt++; } }?>
                                
                            </tbody>
                        </table>
                    </div>  <!-- End Cart Table -->
                     <!-- Start Cart Table Button -->
                    <div class="cart-table-button m-t-10">
                        <div class="cart-table-button--left">
                            <a href="products.php" class="btn btn--box btn--large btn--gray btn--uppercase btn--weight m-t-20">CONTINUE SHOPPING</a>
                        </div>
                       
                    </div>  <!-- End Cart Table Button -->
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar__widget gray-bg m-t-40">
                        <div class="sidebar__box">
                            <h5 class="sidebar__title">Cart Total</h5>
                        </div>
                        <!-- <h6 class="total-cost">Sub Total<span>₹<?php echo $grandtotal;?></span></h6> -->
                        
                        <h4 id="grandTotal2" class="grand-total m-tb-25">Grand Total <span id="grandTotal" name="grand">₹<?php echo $grandtotal;?></span></h4>
                        <script>
                            //document.getElementById("btnSubmit").addEventListener("click",async(event)=>
                            function calculate(){
                                        for(var i=0;i<x.length;i++){
                                            pqty[i]=x[i].value;
                                            psubtotal[i]= x[i].value * z[i].value;
                                        }
                                        console.log(pid);
                                        console.log(pname);
                                        console.log(pqty);
                                        console.log(psubtotal);
                                        
                                        var pids = JSON.stringify(pid)
                                        var pqtys = JSON.stringify(pqty)
                                        var names = JSON.stringify(pname)
                                        var psubtotals = JSON.stringify(psubtotal)
                                        window.location.href = 'checkout.php?pids='+pids+'&pqtys='+pqtys+'&names='+names+'&psubtotal='+psubtotals;
                                    }
                        </script>
                        

                       <button type="button" onclick="calculate()" id="btnSubmit" class="btn btn--box btn--small btn--blue btn--uppercase btn--weight">Proceed to Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

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

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugin/plugins.min.js"></script> -->

    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="assets/js/main.js"></script>
</body>

</html><?php } ?>
