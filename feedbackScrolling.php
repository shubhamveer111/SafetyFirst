<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>SafetyFirst ||Feedback</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main Style CSS File -->
    <link rel="stylesheet" href="assets/css/main.css">
<script type="text/javascript">
   
    FeedbackForm.prepareCalculationsOnTheFly([null, { "name": "completeReview", "qid": "1", "text": "Complete Review", "type": "control_button" }, { "name": "name", "qid": "2", "subLabel": "", "text": "Name", "type": "control_textbox" }, null, null, null, null, null, { "name": "overallService8", "qid": "8", "text": "Overall Service Quality", "type": "control_radio" }, { "name": "anyComments", "qid": "9", "text": "Any comments, questions or suggestions? ", "type": "control_textarea" }, { "name": "cleanliness10", "qid": "10", "text": "Cleanliness", "type": "control_radio" }, { "name": "orderAccuracy11", "qid": "11", "text": "Order Accuracy", "type": "control_radio" }, { "name": "speedOf12", "qid": "12", "text": "Speed of Service", "type": "control_radio" }, { "name": "systemPerformance", "qid": "13", "text": "system performance", "type": "control_radio" }, { "name": "overallExperience14", "qid": "14", "text": "Overall Experience", "type": "control_radio" }, null, null, { "name": "dayVisited17", "qid": "17", "text": "Day Visited", "type": "control_datetime" }, null, null, null, { "name": "pleaseReview", "qid": "21", "text": "Please Review Us", "type": "control_head" }, { "name": "divider", "qid": "22", "type": "control_divider" }, { "name": "divider23", "qid": "23", "type": "control_divider" }, { "name": "email", "qid": "24", "subLabel": "", "text": "Email", "type": "control_email" }]);
    setTimeout(function () {
        FeedbackForm.paymentExtrasOnTheFly([null, { "name": "completeReview", "qid": "1", "text": "Complete Review", "type": "control_button" }, { "name": "name", "qid": "2", "subLabel": "", "text": "Name", "type": "control_textbox" }, null, null, null, null, null, { "name": "overallService8", "qid": "8", "text": "Overall Service Quality", "type": "control_radio" }, { "name": "anyComments", "qid": "9", "text": "Any comments, questions or suggestions? ", "type": "control_textarea" }, { "name": "cleanliness10", "qid": "10", "text": "Cleanliness", "type": "control_radio" }, { "name": "orderAccuracy11", "qid": "11", "text": "Order Accuracy", "type": "control_radio" }, { "name": "speedOf12", "qid": "12", "text": "Speed of Service", "type": "control_radio" }, { "name": "systemPerformance", "qid": "13", "text": "system performance", "type": "control_radio" }, { "name": "overallExperience14", "qid": "14", "text": "Overall Experience", "type": "control_radio" }, null, null, { "name": "dayVisited17", "qid": "17", "text": "Day Visited", "type": "control_datetime" }, null, null, null, { "name": "pleaseReview", "qid": "21", "text": "Please Review Us", "type": "control_head" }, { "name": "divider", "qid": "22", "type": "control_divider" }, { "name": "divider23", "qid": "23", "type": "control_divider" }, { "name": "email", "qid": "24", "subLabel": "", "text": "Email", "type": "control_email" }]);
    }, 20);
    


</script>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.25010" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f30e2a790832f3e96009402"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.25010" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.25010" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */


/* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: blue; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}

.form-label.form-label-auto {
        
      display: block;
      float: none;
      text-align: left;
      width: 100%;
    
      }

    /* Injected CSS Code */
</style>
    </head>
    <body>

  

<form class="FeedbackForm-form"  method="POST" name="form_211111852715446" id="211111852715446" accept-charset="utf-8" autocomplete="on">
  
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_21" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
           <h1>Give your Feedback</h1>
          </div>
        </div>
      </li>
      
        <li class="form-line" data-type="control_textbox" id="id_2">
            <label class="form-label form-label-left" id="label_2" for="input_2">
            Name 
            </label>
            <div id="cid_2" class="form-input" data-layout="half">
                <input type="text" id="text1" name="name" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" placeholder=" " data-component="textbox" aria-labelledby="label_2" required />
            </div>
        </li>
        <li class="form-line" data-type="control_email" id="id_24">
            <label class="form-label form-label-left" id="label_24" for="input_24">
            Email 
            </label>
            <div id="cid_24" class="form-input" data-layout="half">
                <input type="email" id="text2" name="email" class="form-textbox validate[Email]" style="width:310px" size="310" value="" placeholder="example@example.com" data-component="email" aria-labelledby="label_24" required/>
            </div>
        </li>
        <li class="form-line" data-type="control_divider" id="id_22">
            <div id="cid_22" class="form-input-wide" data-layout="full">
                <div data-component="divider" style="border-bottom:3px solid #e6e6e6;height:3px;margin-left:70px;margin-right:70px;margin-top:5px;margin-bottom:5px">
                </div>
            </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_8">
            <label class="form-label form-label-top form-label-auto" id="label2" for="input_8">
            1.System Speed
            </label>
            <div id="cid_8" class="form-input-wide" data-layout="full">
                <div class="form-multiple-column" data-columncount="4" role="group" aria-labelledby="label_8" data-component="radio">
                    <span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_8_0" name="speed" value="Excellent" required/>
                    <label id="label2.1" for="input_8_0">
                    Excellent 
                    </label>
                    </span><span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_8_1" name="speed" value="Good" required/>
                    <label id="label2.2" for="input_8_1">
                    Good 
                    </label>
                    </span><span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_8_2" name="speed" value="Average" required/>
                    <label id="label2.3" for="input_8_2">
                    Average 
                    </label>
                    </span><span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_8_3" name="speed" value="Dissatisfied"required />
                    <label id="label2.4" for="input_8_3">
                    Dissatisfied 
                    </label>
                    </span>
                </div>
            </div>
        </li>
       
        
        <li class="form-line" data-type="control_radio" id="id_12">
            <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12">
            2.System performance---?Rate us(out of 5)
            </label>
            <div id="cid_12" class="form-input-wide" data-layout="full">
                <div class="form-multiple-column" data-columncount="4" role="group" aria-labelledby="label_12" data-component="radio">
                    <span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_12_0" name="rate" value="5" required/>
                    <label id="label_input_12_0" for="input_12_0">
                   5/5
                    </label>
                    </span><span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_12_1" name="rate" value="4" required/>
                    <label id="label_input_12_1" for="input_12_1">
                    4/5
                    </label>
                    </span><span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_12_2" name="rate" value="3" required/>
                    <label id="label_input_12_2" for="input_12_2">
                     3/5 
                    </label>
                    </span><span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_12_3" name="rate" value="2" required/>
                    <label id="label_input_12_3" for="input_12_3">
                   2/5
                    </label>
                    </span>
                    <span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_12_4" name="rate" value="1" required/>
                    <label id="label_input_12_4" for="input_12_4">
                   1/5
                    </label>
                    </span>
                </div>
            </div>
        </li>

        <li class="form-line" data-type="control_radio" id="id_10">
            <label class="form-label form-label-top form-label-auto" id="label3" for="input_10">
            3.Is system is user friendly---? 
            </label>
            <div id="cid_10" class="form-input-wide" data-layout="full">
                <div class="form-multiple-column" data-columncount="4" role="group" aria-labelledby="label_10" data-component="radio">
                    <span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_10_0" name="userFriendly" value="Yes" required/>
                    <label id="label_input_10_0" for="input_10_0">
                    Yes
                    </label>
                    </span><span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_10_1" name="userFriendly" value="No" required/>
                    <label id="label_input_10_1" for="input_10_1">
                    No 
                    </label>
                    </span>
                </div>
            </div>
        </li>

        <li class="form-line" data-type="control_radio" id="id_13">
            <label class="form-label form-label-top form-label-auto" id="label_13" for="input_13">
            4.Are you prefered our website to others..? 
            </label>
            <div id="cid_13" class="form-input-wide" data-layout="full">
                <div class="form-multiple-column" data-columncount="4" role="group" aria-labelledby="label_13" data-component="radio">
                    <span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_13_0" name="website" value="Yes" required/>
                    <label id="label_input_13_0" for="input_13_0">
                    Yes 
                    </label>
                    </span><span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_13_1" name="website" value="No" required/>
                    <label id="label_input_13_1" for="input_13_1">
                    No
                    </label>
                    </span>
                </div>
            </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_14">
            <label class="form-label form-label-top form-label-auto" id="label_14" for="input_14">
            5.Overall Experience
            </label>
            <div id="cid_14" class="form-input-wide" data-layout="full">
                <div class="form-multiple-column" data-columncount="4" role="group" aria-labelledby="label_14" data-component="radio">
                    <span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_14_0" name="Experience" value="Excellent" required/>
                    <label id="label_input_14_0" for="input_14_0">
                    Excellent 
                    </label>
                    </span><span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_14_1" name="Experience" value=" Good" required/>
                    <label id="label_input_14_1" for="input_14_1">
                    Good
                    </label>
                    </span><span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_14_2" name="Experience" value="Average"required />
                    <label id="label_input_14_2" for="input_14_2">
                    Average
                    </label>
                    </span><span class="form-radio-item"><span class="dragger-item"></span>
                    <input type="radio" class="form-radio" id="input_14_3" name="Experience" value=" Dissatisfied" />
                    <label id="label_input_14_3" for="input_14_3">
                    Dissatisfied 
                    </label>
                    </span>
                </div>
            </div>
        </li>
        <li class="form-line" data-type="control_textarea" id="id_9">
            <label class="form-label form-label-top" id="label_9" for="input_9">
            Any comments/suggestions? 
            </label>
            <div id="cid_9" class="form-input-wide" data-layout="full">
                <textarea id="input_9" class="form-textarea" name="anyComments" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_9" required></textarea>
            </div>
        </li>
        <li class="form-line" data-type="control_divider" id="id_23">
            <div id="cid_23" class="form-input-wide" data-layout="full">
            </div>
        </li>
        <form>
        <li class="form-line" data-type="control_button" id="id_1">
            <div id="cid_1" class="form-input-wide" data-layout="full">
                <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                    <button type="submit" name='submit' class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="" >
              Submit Feedback
                    </button>
                </div>
       </div>
        </li>
      </ul>   
        
</form>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $speed=$_POST['speed'];
    $performance=$_POST['rate'];
    $userFriendly=$_POST['userFriendly'];
    $website=$_POST['website'];
    $exp=$_POST['Experience'];
    $cmt=$_POST['anyComments'];
    
   $result="insert into feedback values('$name','$name','$email','$speed','$performance','$userFriendly','$website','$exp','$cmt')"; 
    mysqli_query($con,$result);
    
     if($result)
	 {
	 echo"<script>alert('Your Feedback submitted successfully....');</script>";
     //echo "<script>window.location.href='index.php'</script>";
	 }
     
	 else
	{
        echo"<script>alert('error...');</script>";
	}
   
     
}

?>

</body>
</html>