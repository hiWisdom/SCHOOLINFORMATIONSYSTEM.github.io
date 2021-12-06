<?php



session_start();

include("connection.php");
include("function.php");


$user_data = check_login($con);




if ($_SERVER['REQUEST_METHOD'] == "POST")
	
	{
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	
	
	if (!empty ($user_name) && !empty ($password) && !is_numeric($user_name))
	
	{
		$user_id = random_num(20);
		$query = "insert into users(user_id, user_name, password) values('$user_id', '$user_name', '$password') ";
		mysqli_query($con, $query);
		header("Location: Application_User_Account_Registration.php");
		die;
		echo "Registration Saved Successfully";
	}
	else {
		echo "Please enter valid user information";
	}
	}


function random_num($length) {
	$text = "";
	if($length < 5) {
		$length = 5;
	}
	
	$len = rand(4,$length);

		for ($i=0; $i < $len; $i++) {
			$text .= rand(0,9);
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

</head>

<body>
<div id="login">
    <form name="loginform" id="loginform" method="post" onsubmit="return validateSigninDetailsB4PHP()">
        <h3><a href="index.html" style="color:black;"><b>Create user account access into School information management system (SIMS)</b> <i class="fas fa-sign-out-alt webapplication-icons" id="webapplication-icons-signin"></i></a></h3>

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
       
        
        <br>  
        
        <p class="submit">
            <input type="reset" title="Reset already inputted user account access into School information management system." name="wp-submit" id="login_button" class="button button-primary button-large" value="Reset"/>
            <input type="submit" title="Create user account access into School information management system. " name="wp-submit" id="login_button" class="button button-primary button-large" value="Create User Account"/>
            <!--<input type="hidden" name="redirect_to" value="http://localhost/wordpress/wp-admin/" />
            <input type="hidden" name="testcookie" value="1" />-->
        </p>
    </form>
	<p id="nav" title="Contact Admin to Reset or Reset via Mail."> <a href="ADMINISTRATIVE_MODULE.php">Home</a></p>
	</div>
</body>




</html>