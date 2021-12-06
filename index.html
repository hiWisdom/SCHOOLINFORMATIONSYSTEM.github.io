<?php

session_start();

include("connection.php");
include("function.php");


if ($_SERVER['REQUEST_METHOD'] == "POST")
	
	{
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	
	
	if (!empty ($user_name) && !empty ($password) && !is_numeric($user_name))
	
	{
		
		//read from database
		
		$query = "select * from users where user_name  = '$user_name' limit 1";
		$result = mysqli_query($con, $query);
		
	if ($result)
	{
		if($result && mysqli_num_rows($result) > 0)
			
			{
				$user_data = mysqli_fetch_assoc($result);
				if ($user_data['password'] === $password) {
				$_SESSION['user_id'] = $user_data['user_id'];
				header("Location: homepage.php");
				die;	
				}
			}
	}
		echo "Wrong Username OR Password";
	}
	else {
		echo "Wrong Username OR Password";
	}
	}


function random_num($length) {
	$text = "";
	if($length < 5) {
		$length = 5;
	}
	
	$len = rand(4,$length);

		for ($i=0; $i < $len; $i++) {
			$text .= rand(0,5);
		}
	
	return $text;
}
?>




<!DOCTYPE html>
<html lang="en-US">
<head>

<link rel="shortcut icon" type="image/png" href="SIS WEB APPLICATION(Developer file)/logo/20210717_173213.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Log In &lsaquo; school information system &#8212; SCHOOL_INFORMATION_SYSTEM</title>
<meta name='robots' content='max-image-preview:large, noindex, noarchive' />
<meta name='referrer' content='strict-origin-when-cross-origin' />
<meta name="viewport" content="width=device-width" />

<link rel='stylesheet' id='buttons-css'  href='stylesheets/buttons.min.css?ver=5.8.1' media='all' />
<link rel='stylesheet' id='login-css'  href='stylesheets/login.min.css?ver=5.8.1' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='stylesheets/dashicons.min.css?ver=5.8.1' media='all' />
<link rel='stylesheet' id='forms-css'  href='stylesheets/forms.min.css?ver=5.8.1' media='all' />

<style>

#UATsign{float:right;margin-top:-100px;margin-right:0%;font-size:20px}
#login_button{color:skyblue;font-size:16px;border:none;box-sizing:border-box;background:linear-gradient(white,green,white);border-radius:5%;} #login_button:hover{background:linear-gradient(grey,skyblue);color:linear-gradient(white,green,white);}

.spinner{width:80px; height:80px; border: 3.5px solid #f3f3f3; border-top: 5px solid #89c557; border-radius: 100%; position:absolute; top:0; bottom:0; left:0; right:0; margin:auto; animation:spin 15s 1s infinite linear alternate;}
@keyframes spin {
from{transform: rotate(0deg);}
to{transform:rotate(300deg);}
}

#overlay{height:100vh;width:100%;background:rgba(0, 0, 0, .2);}

#login_button{margin:0px 5px;}
</style>
</head>



<body class="login no-js login-action-login wp-core-ui  locale-en-us">




    <!---INDEX LOAD EVENT BEGINS-->
    <div id="overlay">
    <div class="spinner" id="overlay-insiderA">
    <div class="spinner" id="overlay-insiderB">
    <div class="spinner">
        <div id="loading-event-image"><p style="color:black; justify-content: center;position: relative;margin-top:10%;margin-left:25%;font-size:9px">School<br>Information<br>System<br>Application<br>Loading . . .</p></div>
    </div>
    </div>
    </div>
           
    </div>
    <!---INDEX LOAD EVENT ENDS-->
        


<script type="text/javascript">
document.body.className = document.body.className.replace('no-js','js');
</script>

    <div id="login">

    <h1 title="Powered by Healthy Harvester Group"><a href=""><img src="logo/sislogo.png"/></a></h1>

    <h6 title="No1. School Information System in it Community." style="color:rgb(28, 134, 175);">Welcome! to school information system application &nbsp <script>var todayDate = new Date(); var shortDate = todayDate.toDateString(); document.write(shortDate);</script><div id="time"></div></h6>
   
    <form name="loginform" id="loginform" method="post" onsubmit="return validateSigninDetailsB4PHP()"><!---http://localhost/wordpress/wp-login.php---->
        <h3><a href="index.html" style="color:black;"><b>Log In school information system</b> <i class="fas fa-sign-out-alt webapplication-icons" id="webapplication-icons-signin"></i></a></h3>

        <p>
            <label for="user_login" title="Input Username or Email Address">Username</label>
            <input placeholder="Username" type="text" title="Input Username or Email Address" name="user_name" id="user_login" class="input" value="" size="20" autocapitalize="off" />
        </p>

        <div class="user-pass-wrap">
            <label for="user_pass" title="Input Password">Password</label>
            <div class="wp-pwd">
                <input placeholder="Password" type="password" title="Input Password" name="password" id="user_pass" class="input password-input" value="" size="20" />
                <button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Show password">
                    <span class="dashicons dashicons-visibility" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <p>
        <label title="If you are a Administrative choose administrative, If you are a Teacher choose teacher, If you are a Student choose student." for="status">Entry Site</label>
        <br>
            <select id="status" value="" style="width:270px;height:1cm;"  title="If you are a Administrative choose administrative, If you are a Teacher choose teacher, If you are a Student choose student.">
            <option value="" type="status" class="input input_typeDrp" placeholder="category" id="category"></option>
            <option value="administration" type="status" class="input input_typeDrp" id="admin_category">Administrative</option>
            <option value="teacher" type="status" class="input input_typeDrp" id="teacher_category">Teacher</option>
            <option value="student" type="status" class="input input_typeDrp" id="student_category">Student</option>
            </select>
        </p>  
        <br>  
           <p class="forgetmenot"><input name="rememberme" title="By clicking on the checkbox this browser will save your login details to local storage, database, cookies and will remenber your login details anytime you type a responsive alphabet relating to your user account login." type="checkbox" id="rememberme" value="forever" /> <label title="By clicking on the checkbox this browser will save your login details to local storage, database, cookies and will remenber your login details anytime you type a responsive alphabet relating to your user account login." for="rememberme" style="font-size:10px;">Remember Me</label></p>
        
        <p class="submit">
            <input type="reset" title="Reset all what you have type here" name="wp-submit" id="login_button" class="button button-primary button-large" value="Reset"/>
            <input type="submit" title="Login to Verbal Reasoning School Information System" name="wp-submit" id="login_button" class="button button-primary button-large" value="Log In"/>
            
        </p>
    </form>

                <p id="nav" title="Contact Admin to Reset or Reset via Mail."> <a href="signup.php">Lost your password?</a></p>
                <p id="backtoblog" title="F A Q, Readmore, Need Assistance, Contact us."><a href="">UAT chrome, UC Browser, Mozilla firefox only. Go to School Information System</a></p>
  
</div>
<script>





    //DATE AND TIME SCRIPT BEGINS

setInterval(()=>{
const time = document.querySelector("#time");
let date = new Date();
let hours = date.getHours();
let minutes = date.getMinutes();
let seconds = date.getSeconds();
let day_night = "AM";
if(hours > 12) {
day_night ="PM";
hours = hours - 12;
}
if(hours < 10) {
hours = "0" + hours;
}
if(minutes < 10) {
minutes = "0" + minutes;
}
if(seconds < 10) {
seconds = "0" + seconds;
}
time.textContent = hours + ":" + minutes + ":" + seconds + " " + day_night;
});

    //DATE AND TIME SCRIPT ENDS






//CLIENT SIDE FORM VALIDATION SCRIPT BEGINS 

var UserName = document.getElementById("user_login");
var PassWord = document.getElementById("user_pass");
var categoryVerification = document.getElementById("status");

function validateSigninDetailsB4PHP() {

if (UserName.value==""){
    alert("Please Fill Username");
UserName.focus();
UserName.style.border="1px solid red";
return false;
}

if (PassWord.value=="" || PassWord.value.length <= 9 ){
    alert("Please Fill password and ensure characters is 10 or more");
PassWord.focus();
PassWord.style.border="1px solid red";
return false;
}


if (categoryVerification.value==""){alert("Choose your Entry Site");
PassWord.focus();
PassWord.style.border="1px solid red";
return false;}

return true;
};

//CLIENT SIDE FORM VALIDATION SCRIPT ENDS 





//LOAD EVENT SCRIPT BEGINS


//get login page and hide till server loads completely.
var sisloginpage = document.getElementById("login");
sisloginpage.style.display="none";

//loading decoration.
var overlay = document.getElementById("overlay");


//load.
window.addEventListener('load', function(){
overlay.style.display="none";
sisloginpage.style.display="block";
});
//LOAD EVENT SCRIPT ENDS

</script>
<script src="script/sis.js"></script>
<script src="script/sisFormOperator.js"></script>
   <div class="clear"></div>



</body>
</html>

