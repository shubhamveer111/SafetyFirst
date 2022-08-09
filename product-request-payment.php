<?php
session_start();
error_reporting(0);
include_once('includes/dbconnection.php');
if (strlen($_SESSION['msmsuid']==0)) {
  header('location:logout.php');
  } else{ 



//placing order
if(isset($_POST['placeorder'])){
//getting address
$fnaobno=$_POST['flatbldgnumber'];
$street=$_POST['streename'];
$area=$_POST['area'];
$lndmark=$_POST['landmark'];
$city=$_POST['city'];
$zipcode=$_POST['zipcode'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$cod=$_POST['cod'];
$cardname=$_POST['cardname'];
$cardnu=$_POST['cardnu'];
$expMonth=$_POST['expMonth'];
$expYear=$_POST['expYear'];
$cvv=$_POST['cvv'];

$userid=$_SESSION['msmsuid'];
//genrating order number
$orderno= mt_rand(100000000, 999999999);
if($_POST["method"]=="cod"){
    for($i=0;$i<2;$i++ ){
        //echo $i;
        $temp1=$pqtys[$i];
        $temp2=$psubtotal[$i];
        $temp3=$pids[$i];
       // echo "$temp1 + $temp2 + $temp3 + $userid";
      //  echo '<script>alert("Your order placed for item "'+$i+'" successfully. Order number is "+"'.$orderno.'")</script>';
        echo "<script>window.location.href='my-order.php'</script>";
        $query="insert into payment (UserId,PId,IsOrderPlaced,OrderNumber,Quantity,SubTotal,PaymentType,cardName,cardNumber,expMonth,expYear,CVV) values($userid,$temp3,1,$orderno,$temp1,$temp2,'CashOnDelivery','None',0,0,0,0)";
        $result = mysqli_multi_query($con, $query);
        var_dump($result);
    }
        //$query="update payment set OrderNumber='$orderno',IsOrderPlaced='1',Quantity='$temp1',SubTotal='$temp2',CashonDelivery='CashOnDelvery',cardName='$cardname',cardNumber='$cardnu',expMonth='$expMonth',expYear='$expYear',CVV='$cvv' where UserId='$userid' and IsOrderPlaced is null;";
        $query5="insert into order(UserId,Ordernumber,Flatnobuldngno,StreetName,Area,Landmark,City,Zipcode) values('$userid','$orderno','$fnaobno','$street','$area','$lndmark','$city','$zipcode');";    
        $result5 = mysqli_multi_query($con, $query5);
       
        //  if ($result5) {
        //            echo '<script>alert("Your order placed for item "'+$i+'" successfully. Order number is "+"'.$orderno.'")</script>';
        //     }
        //  echo "<script>window.location.href='my-order.php'</script>";
   }else{
    
    echo"TODO";
}

}    

 }   ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Flour Milling System||Checkout Page</title>
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
    <script src="https://code.jquery.com/jquery-1.12.4.min.js">
    </script>
    <style type="text/css">

        .selectt {
            color: #fff;
            padding: 15px;
            display: none;
            margin-top: 20px;
            margin-left: 30px;
            width:75%;
            background: #8d9b92;
        }
          
        
        .container1 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
        .checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 10px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: #2196F3;
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
                        <li class="page-breadcrumb__nav active">Checkout Page</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <!-- Start Client Shipping Address -->
                <div class="col-lg-7">
                    <div class="section-content">
                        <h5 class="section-content__title">Billing Details</h5>
                    </div>
                    <form action="#" method="post" class="form-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-first-name">Flat or Building Number/Name *</label>
                                    <input type="text" name="flatbldgnumber"   placeholder="Flat or Building Number" class="form-control" required="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-last-name">Street Name *</label>
                                    <input type="text" name="streename" required="true" pattern="[A-Za-z]" placeholder="Street Name" class="form-control" required="true">
                                </div>
                            </div>
                            
                          
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <label for="form-address-1">Area</label>
                                    <input type="text" name="area" required="true" pattern="[A-Za-z]"  placeholder="Area" class="form-control" >
                                   
                                </div>
                            </div>
                           <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-zipcode">* Zip/Postal Code</label>
                                    <input type="text" id="zipcode" class="form-control" name="zipcode" required="true" maxlength="6" pattern="[0-9]{6}" required="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-zipcode"> Landmark if any</label>
                                    <input type="text" id="zipcode" required="true" pattern="[A-Za-z]" class="form-control" name="landmark">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-zipcode"> Town / City *</label>
                                    <input type="text" name="city" required="true" pattern="[A-Za-z]"  placeholder="City" class="form-control" required="true">
                                </div>
                            </div>

                            
                        </div>
                    
                </div> <!-- End Client Shipping Address -->
                
                <!-- Start Order Wrapper -->
                <div class="col-lg-5">
                    <div class="your-order-section">
                        <div class="section-content">
                            <h5 class="section-content__title">Your order</h5>
                        </div>
                        <div class="your-order-box gray-bg m-t-40 m-b-30">
                            <div class="your-order-product-info">
                                <div class="your-order-top d-flex justify-content-between">
                                    <h6 class="your-order-top-left">Product</h6>
                                    <h6 class="your-order-top-right">Quantity</h6>
                                    <h6 class="your-order-top-right">Total</h6>
                                </div>
                                 <?php 
$userid= $_SESSION['msmsuid'];
$query=mysqli_query($con,"select * from millrequestd where millrequest.UserId='$userid'");
$num=mysqli_num_rows($query);

while ($row=mysqli_fetch_array($query)) {
 


?>
                                <ul class="your-order-middle">
                                    <li class="d-flex justify-content-between">
                                        <span class="your-order-middle-left"><?php echo $row['GrainType'];?></span>
                                        <span class="your-order-middle-left"><?php echo $row['Quantity'];?></span>
                                        <span class="your-order-middle-right">₹<?php echo $psubtotal[$cnt_qty];?></span>
                                        <?php 
//$grandtotal+=$total;
$total_subtotal= $total_subtotal+$psubtotal[$cnt_qty];
$cnt=$cnt+1; 
       $cnt_qty = $cnt_qty+1;                    
 ?>
                                    </li>
                                    
                                </ul><?php $cnt++;  }?>
                                <div class="your-order-bottom d-flex justify-content-between">
                                    <h6 class="your-order-bottom-left">Shipping</h6>
                                    <span class="your-order-bottom-right">Free shipping</span>
                                </div>
                                <div class="your-order-total d-flex justify-content-between">
                                    <h5 class="your-order-total-left">Total</h5>
                                    <h5 class="your-order-total-right">₹<?php echo $total_subtotal;?></h5>
                                </div>
    
                                <div class="payment-method">

                                    <div class="payment-accordion element-mrg">
                                        <div class="panel-group" id="accordion">
                                            
                                            
                                            <div class="panel payment-accordion">
                                                <div class="panel-heading" id="method-three">
                                                    <h5 class="panel-title">
                                                    <Label><b><u>*Payment Method:</u></b></label>                                 
                                                <div>
                                                            <label  >Cash on Delivery
                                                            <input type="radio" checked="checked" name="method"  id="cod" value="cod"> <br>
                                                           
                                                            </label>
                                                        </div>
                                                        <div class="Credit-Debit-Card selectt">
                                                        <label for="form-first-name"><br>Name On Card:</label>
                                                    <input type="text" name="cardname"  placeholder="Enter Name">
                                                   
                                                    <label>Card Number:</label>
                                                    <input type="text" name="cardnu"  placeholder="**** **** **** ****"  maxlength=16>

                                                    <label>Exp Month:</label>
                                                    <input type="text" name="expMonth"  placeholder="Enter Exp Month"  maxlength=2>

                                                    <label>Exp Year:</label>
                                                    <input type="text" name="expYear"  placeholder="****"  maxlength=4><br>

                                                    <label>CVV:</label><br>
                                                    <input type="text" name="cvv"  placeholder="***"  maxlength=3>
    
                                                    </div>
                                                        
                                                        <script type="text/javascript">
                                                            $(document).ready(function() {
                                                                $('input[type="radio"]').click(function() {
                                                                    var inputValue = $(this).attr("value");
                                                                    var targetBox = $("." + inputValue);
                                                                    $(".selectt").not(targetBox).hide();
                                                                    $(targetBox).show();
                                                                });
                                                            });
                                                        </script>
                                                    </h5>
                                                                       
                                             </div>
                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn--block btn--small btn--blue btn--uppercase btn--weight" type="submit" name="placeorder">PLACE ORDER</button></form> 
                    </div>
                </div> <!-- End Order Wrapper -->
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

    <!-- ::::::  Start  Footer Section  ::::::  -->
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

</html>
