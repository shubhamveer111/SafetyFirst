<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['msmsuid']==0)) {
  header('location:logout.php');
  } else{

    if(isset($_POST['submit']))
    {
        $prid=$_POST['prid'];
        $grainType=$_POST['grainType'];
        $Qty=$_POST['Qty'];
        $date=$_POST['date'];
        
        $desc=$_POST['desc'];
        $fnaobno=$_POST['flatbldgnumber'];
        $street=$_POST['streetname'];
        $area=$_POST['area'];
        $lndmark=$_POST['landmark'];
        $city=$_POST['city'];
        $zipcode=$_POST['zipcode'];
        $cno=$_POST['cno'];
       // $RequestFinalStatus=$_POST['RequestFinalStatus'];

        $userid=$_SESSION['msmsuid'];
       
        $prid= mt_rand(100000000, 999999999);
       $query=mysqli_query($con, "insert into productrequest value('$prid','$userid','$grainType','$Qty','$date','$desc','$fnaobno','$street','$area','$lndmark','$city','$zipcode','$cno','$RequestRemark','$RequestFinalStatus',NOW())");
      //$query=mysqli_query($con, "insert into millrequest(mrid,UserId,GrainType,Quantity,PickUpDate,Image,Description,Flatname/bname,StreetName,Area,Landmark,City,Zipcode,AnotherContact) values('$mrid','$userid','$grainType','$Qty','$date','$image1','$desc','$fnaobno','$street','$area','$lndmark','$city','$zipcode','$cno')");
    if($query) {
   
    echo '<script>alert("Your Product Request Has Been Placed.")</script>';
    echo "<script>window.location.href='view-product-request.php'</script>";
  }
  else
    {
     echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

 

}

 ?>
  

  
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Safety First | Track Order</title>
   
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
    <style>
    .form1 {
    overflow: hidden;
    background: #969aa3;
    padding: 40px;
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
                        <li class="page-breadcrumb__nav active">Product Request</li>
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
               <h2 style="text-align:center;">Give Product Request</h2>
                <!-- login area start -->
                <div class="login-register-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 ml-auto mr-auto">
                                <div class="login-register-wrapper">
                               
                                    <div class="tab-content">
                                        <div id="lg1" class="tab-pane active">
                                            <div class="login-form-container">
                                                <div class="login-register-form">
                                                  <div class="main_title">
                    
                   
                                                  <div class="main_title">
                   <form action="" method="post" class="form1">
                   <div class="control-group">
            

                   <div class="control-group">
              <label class="control-label">Product Types:</label>
              <div class="controls">
                <select type="text" class="span11" name="grainType" id="grainType" value="" required='true' />
                  <option value="">Select Product Types</option>
                  <?php $query1=mysqli_query($con,"select * from productprice ");
              while($row1=mysqli_fetch_array($query1))
              {
              ?>
                  <option value="<?php echo $row1['Product Type'];?>"><?php echo $row1['Product Type'];?></option><?php } ?>

                </select>
            &nbsp;&nbsp;&nbsp;
               <!-- <label >Price</label>
               
              <input type="text" id="fprice" name="fprice" disabled="disabled" value="">         -->
              </div>
            </div><br>
                   
           
           
            <div>
               <label >Quantity(KG)</label>
              <input type="text" id="Qty" name="Qty" required="true"  pattern="[0-9]+" class="form-control" required="true" placeholder="Enter quantity">
            </div><br>

            
            <div>
            <label for="date">Choose Date:</label>
            <input type="date" id="date_picker" name="date" class="form-control"  required="required" >
            </div>
            <br>
            <script language="javascript">
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0');
                var yyyy = today.getFullYear();
                today = yyyy + '-' + mm + '-' + dd;
               $('#date_picker').attr('min',today);
     </script>

                
            <div>
            <label>Description</label>
              <textarea id="desc" name="desc" class="form-control" placeholder="Please Enter your product name, products size or any other Information/Requirement" required="required"></textarea>
            </div><br>
            
            <div class="col-lg-7">
                    <div class="section-content">
                        <h2><u>Address Details:</u></h2>
                    </div>
                    <form action="#" method="post" class="form-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-first-name">Building Name/Number*</label>
                                    
                                    <input type="text" name="flatbldgnumber"  placeholder="Building Name/Number" class="form-control" required="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label>Street Name*</label>
                                    <input type="text" name="streetname" required="true" pattern="[a-zA-Z'-'\s]*" placeholder="Street Name" class="form-control" required="true">
                                </div>
                            </div>
                            
                          
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <label for="form-address-1">Area</label>
                                    <input type="text" name="area" required="true" pattern="[a-zA-Z'-'\s]*" placeholder="Area" class="form-control" >
                                   
                                </div>
                            </div>
                           <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-zipcode">*Zip/Postal Code</label>
                                    <input type="text" id="zipcode" maxlength="6" pattern="[0-9]{6}" class="form-control" name="zipcode" required="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label> Landmark if any</label>
                                    <input type="text" id="landmark" required="true" pattern="[a-zA-Z'-'\s]*" class="form-control" name="landmark">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-zipcode">*Town / City</label>
                                    <input type="text" name="city" required="true" pattern="[a-zA-Z'-'\s]*" placeholder="City" class="form-control" required="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="cno">Another Contact Number(if any)</label>
                                    <input type="text" name="cno" id="cno" maxlength="10" pattern="[0-9]{10}" placeholder="Contact Number" class="form-control" />
                                </div>
                            </div>
</div></div>
            
            
            
            <br>

              <div class="form-group col-md-12">
               <button style="float:right;" type="submit" value="submit" name="submit" class="btn btn--box btn--small btn--blue btn--uppercase btn--weight" href="product-request-payment.php">Send Request</button>
                 </div>
              </form>
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

</html><?php }?>
