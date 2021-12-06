<?php

session_start();

include("connection.php");
include("function.php");


$user_data = check_login($con);

?>




<html>


<head>
<title>REGISTRATION</title>
<link rel="shortcut icon" type="image/png" href="SIS WEB APPLICATION(Developer file)/logo/20210717_173213.jpg">
<meta name="viewport" content="width=device-width initial-scale=1"/>

  <!-- Frameworks links, Stylesheet links, JavaScript links -->
<link rel="stylesheet" href="file:///C:/Users/HP/Desktop/www.hsam/bootstrap/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="file:///C:/Users/HP/Desktop/onnet.github.io/fontawesome/fontawesome-free-5.14.0-web/css/all.css"/>
<link rel="stylesheet" href="stylesheets/sis.css"/>




<script src="file:///C:/Users/HP/Desktop/domblog.github.io/bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="file:///C:/Users/HP/Desktop/domblog.github.io/bootstrap/bootstrap/js/bootstrap.min.js"></script>
<script src="script/sis.js"></script>












<style>
*{font-family: 'Segoe UI', Tahoma, sans-serif;}
nav ul{width:100%;position:relative;top:-21px;margin-left:-48px} 
li{display:inline;}
.subMenu-link-design1{width:100%;background:linear-gradient(grey,skyblue);height:10px;margin-top:5%;}
#registrationbutton{font-size:12px;color:blue;box-sizing:border-box;height:20px;}
.subMenu-link-text-color{padding:3px;height:2%;font-size:11px;margin-top: -10px;}
.subMenu-link-design1{width:100%;background:linear-gradient(grey,skyblue);height:10px;margin-top:5%;}
#registrationbutton:hover{border:1px solid black;}

</style>







</head>


<body>

<header>

</header>

<main>


<nav>
<ul>
<li><button onclick="RegisterRegistration()" class="btn btn" id="registrationbutton" title="Staffs and Student Register."><p class="subMenu-link-text-color">Register</p> </button></li>
<li><button onclick="newRegistration()" class="btn btn" id="registrationbutton" title="Register new student/people/pupils."><p class="subMenu-link-text-color">New registration</p> </button></li>
<li><button onclick="searchRegistration()" class="btn btn" id="registrationbutton" title="Search registered student/people/pupils."><p class="subMenu-link-text-color">Search registration</p> </button></li>
<li><button onclick="Student_Education_History()" class="btn btn" id="registrationbutton" title="Check for student education history."><p class="subMenu-link-text-color">Student education history</p> </button></li>
</ul>
</nav>


<div class="subMenu-link-design1" title="SCHOOL INFORMATION SYSTEM ALL RIGHTS RESERVED PRIVATELY."></div>
</main>
&copy school information management registration system 2021.
<script>

function RegisterRegistration() {
window.location="registration.php";
}

function newRegistration() {
window.location="newregistration.php";
}

function searchRegistration() {
window.location="search-registration.php";
}


function Student_Education_History() {
window.location="student-education-history.php";
}
</script>
</body>


</html>