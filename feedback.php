
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>FMS||My Orders</title>
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
<script type="text/javascript">
   
    FeedbackForm.prepareCalculationsOnTheFly([null, { "name": "completeReview", "qid": "1", "text": "Complete Review", "type": "control_button" }, { "name": "name", "qid": "2", "subLabel": "", "text": "Name", "type": "control_textbox" }, null, null, null, null, null, { "name": "overallService8", "qid": "8", "text": "Overall Service Quality", "type": "control_radio" }, { "name": "anyComments", "qid": "9", "text": "Any comments, questions or suggestions? ", "type": "control_textarea" }, { "name": "cleanliness10", "qid": "10", "text": "Cleanliness", "type": "control_radio" }, { "name": "orderAccuracy11", "qid": "11", "text": "Order Accuracy", "type": "control_radio" }, { "name": "speedOf12", "qid": "12", "text": "Speed of Service", "type": "control_radio" }, { "name": "systemPerformance", "qid": "13", "text": "system performance", "type": "control_radio" }, { "name": "overallExperience14", "qid": "14", "text": "Overall Experience", "type": "control_radio" }, null, null, { "name": "dayVisited17", "qid": "17", "text": "Day Visited", "type": "control_datetime" }, null, null, null, { "name": "pleaseReview", "qid": "21", "text": "Please Review Us", "type": "control_head" }, { "name": "divider", "qid": "22", "type": "control_divider" }, { "name": "divider23", "qid": "23", "type": "control_divider" }, { "name": "email", "qid": "24", "subLabel": "", "text": "Email", "type": "control_email" }]);
    setTimeout(function () {
        FeedbackForm.paymentExtrasOnTheFly([null, { "name": "completeReview", "qid": "1", "text": "Complete Review", "type": "control_button" }, { "name": "name", "qid": "2", "subLabel": "", "text": "Name", "type": "control_textbox" }, null, null, null, null, null, { "name": "overallService8", "qid": "8", "text": "Overall Service Quality", "type": "control_radio" }, { "name": "anyComments", "qid": "9", "text": "Any comments, questions or suggestions? ", "type": "control_textarea" }, { "name": "cleanliness10", "qid": "10", "text": "Cleanliness", "type": "control_radio" }, { "name": "orderAccuracy11", "qid": "11", "text": "Order Accuracy", "type": "control_radio" }, { "name": "speedOf12", "qid": "12", "text": "Speed of Service", "type": "control_radio" }, { "name": "systemPerformance", "qid": "13", "text": "system performance", "type": "control_radio" }, { "name": "overallExperience14", "qid": "14", "text": "Overall Experience", "type": "control_radio" }, null, null, { "name": "dayVisited17", "qid": "17", "text": "Day Visited", "type": "control_datetime" }, null, null, null, { "name": "pleaseReview", "qid": "21", "text": "Please Review Us", "type": "control_head" }, { "name": "divider", "qid": "22", "type": "control_divider" }, { "name": "divider23", "qid": "23", "type": "control_divider" }, { "name": "email", "qid": "24", "subLabel": "", "text": "Email", "type": "control_email" }]);
    }, 20);
    


</script>

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
                        <li class="page-breadcrumb__nav active">Feedback Page</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <aside style=" width: 500; padding-left:10px; padding-top: 10px; padding-right: 10px; margin-top:10px; font-size:20px; float: right; font-style: italic; background-color:gray;">

        
            <iframe src="feedbackScrolling.php"  height="600" width=800 scrolling="yes" ></iframe>     
    </aside>
    <article>
           
            <table>
                <tr>
                    <div>
                        <img src="assets/img/Feedback.jpg" style="width:600px; height:620px; padding-left:10px; padding-top:8px; ">
                       
                    </div>
                </tr>   
               </table>
    </article>
    <?php include_once('includes/footer.php');?>


    </body>
    </html>