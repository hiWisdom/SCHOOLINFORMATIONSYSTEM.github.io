<?php

session_start();

include("connection.php");
include("function.php");


$user_data = check_login($con);
?>

<?php


/*
if (isset($_SESSION['user_id'])){
unset($_SESSION['user_id']);
}
header("Location:index.php");
die;
*/
?>






<html>

<head>
<link rel="shortcut icon" type="image/png" href="SIS WEB APPLICATION(Developer file)/logo/20210717_173213.jpg">
<meta charset="utf-8">
<title>SCHOOL INFORMATION SYSTEM</title>
<meta name="viewport" content="width=device-width initial-scale=1"/>

    <!-- Frameworks links, Stylesheet links, JavaScript links -->
<link rel="stylesheet" href="fontawesome/fontawesome-free-5.14.0-web/css/fontawesome.css"/>
<link rel="stylesheet" href="stylesheets/sis.css"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<script src="script/sis.js"></script>
<script src="sisFormOperator.js"></script>





<style>


*{list-style-type:none;font-family:Raleway-Regular;letter-spacing:1px;}
@font-face{
src:url(fontawesome/Raleway/static/Raleway-Regular.ttf);
font-family:Raleway-Regular;
}
h3{text-align:center;} 
h4{text-align:center;}
h5{text-align:center;font-size:10px;}
.dropdown-wrapper {margin:-10px;background:linear-gradient(grey,skyblue);height:50px;}
.dropdown-wrapper ul ul {display:none;}
.dropdown-wrapper ul li:hover > ul {display: block;}
.dropdown-wrapper ul li:hover > ul button{transition: all 1.5s ease-in-out 2s;}
transition: background-color 1.5s cubic-bezier(0.65, 0.05, 0.36, 1);transition-property: background-color;
    transition-duration: 1.5s;
    transition-timing-function: cubic-bezier(0.65, 0.05, 0.36, 1);
    transition-delay: 0s;

.drop-down-menu-header{width:100px;}

.displayonoff{visibility:visible}

#links_decoration{position:relative; margin-left:-30px;margin-top:2px;}

.drop-down-menu-content{width:auto; position:relative; background:white; margin-left:auto; margin-right:auto;margin-top:;}

.drop-down-menu-list{position:relative; display:block; margin-left:-1.8cm;}


.contain{margin-left:auto;margin-right:auto;width:100%;}
.main_content{width:100%;height:2vh;border:; border-top:none;border-left:none;display:inline;position:fixed;}
.links{line-height:2em;}
.main_content, .links{display:flex; margin-top:-0.2cm;}
button{width:100px;height:30px;background:linear-gradient(grey,skyblue);}
.links_decoration{font-size:10px;font-weight:bold;color:black;} 
.links_decoration:hover{background:linear-gradient(white,green,white);color:skyblue;}
/*.webapplication-icons{float:left}*/
.webapplication-icons:hover{color:red;font-size:20px}
a{text-decoration:none;}
#logout-button{margin-left:-20px;margin-top:3px;width:70px; height:59%; color:skyblue;font-weight:bolder;font-size:12px;border:none;box-sizing:border-box;background:linear-gradient(white,green,white);border-radius:5%; border-top: 2.5px solid black; border-bottom: 2.5px solid black;}
#logout-button:hover{background:linear-gradient(grey,skyblue);color:linear-gradient(white,green,white);}
content{float:right;background:white;width:100%;height:100vh;margin-top:30px;}

</style>


<script>

//var signOutBut = document.getElementById("logout-button");
//signOutBut.style.backgroundColor="black";


</script>
</head>


<body class="contain">

<div class="container-fluid">

<header>
<!--<h5><b>&copy school information system</b></h5>--->
</header>

<main>

<div class="main_content">
<div class="heading">
</div>
<br>

<div class="links">



<div style="display:flex; margin-top:5px;background:linear-gradient(grey,skyblue);height:35px; border-radius:5%; margin-left:12px; width:440px; font-size:12.5px;">Welcome <?php echo $user_data['user_name'];?>
&nbspto SIMS, &nbsp<script>var todayDate = new Date(); var shortDate = todayDate.toDateString(); document.write(shortDate);</script><span style="height:100%; font-weight:bolder; color:whitesmoke; padding:1%">|</span><div id="time"></div>
<i class="fa-wordpress"></i>
</div>
<!---
<div class="dropdown-wrapper">
<ul class="drop-down-menu">
<li class="drop-down-head"><button onclick="Menu()" class="links_decoration" onmouseover="dropDownDisplay()" id="links_decoration" title="Menu"><i class="fas fa-bar webapplication-icons" id="webapplication-icons-school"></i> Menu</button>
</li>
</ul>
</div>



<!---
<button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons" id="webapplication-icons-school"></i> School</button>
<br>--->




<div class="dropdown-wrapper">
<ul class="drop-down-menu-header" id="Home-page">
<li class="drop-down-head"><button onclick="Home()" class="links_decoration" onmouseover="dropDownDisplay()" id="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons" id="webapplication-icons-school"></i> School</button>
<!---<ul class="drop-down-menu-content">
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school0"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school1"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school2"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school3"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school4"></i> School</button></li>
</ul>---->
</li>
</ul>
</div>





<div class="dropdown-wrapper">
<ul class="drop-down-menu-header" id="Administration">
<li class="drop-down-head"><button onclick="administration()" class="links_decoration" onmouseover="dropDownDisplay()" id="links_decoration" title="Administrative Section"><i class="fas fa-users webapplication-icons" id="webapplication-icons-administration"></i> Admin</button>
<ul class="drop-down-menu-content">
<li class="drop-down-menu-list"><button onclick="Application_User_Account_Registration()" class="links_decoration" title="Application User Account Registration."><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school0"></i> Create User Account</button></li>
<li class="drop-down-menu-list"><button onclick="Application_User_Account_Delete()" class="links_decoration" title="Application User Account Delete"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school1"></i> Delete User Account</button></li>
</ul>
</li>
</ul>
</div>










<div class="dropdown-wrapper">
<ul class="drop-down-menu-header" id="Registration-demographic">
<li class="drop-down-head"><button onclick="registration()" class="links_decoration" onmouseover="dropDownDisplay()" id="links_decoration" title="Registration/Demographic History Section"><i class="fas fa-folder-open webapplication-icons" id="webapplication-icons-register"></i> Register</button>
<ul class="drop-down-menu-content">
<li class="drop-down-menu-list"><button onclick="newRegistration()" class="links_decoration" title="New Registration/Demographic"><i class="fas fa-new webapplication-icons button-drop-down-menu-content" id="webapplication-icons-newRegistration"></i> New Registration</button></li>
<li class="drop-down-menu-list"><button onclick="searchRegistration()" class="links_decoration" title="Search Registration/Demographic"><i class="fas fa-search webapplication-icons button-drop-down-menu-content" id="webapplication-icons-searchRegistration"></i> Search Registration</button></li>
<li class="drop-down-menu-list"><button onclick="Student_Education_History()" class="links_decoration" title="Student education history"><i class="fas fa-new webapplication-icons button-drop-down-menu-content" id="webapplication-icons-newRegistration"></i> Student History</button></li>
</ul>
</li>
</ul>
</div>








<div class="dropdown-wrapper">
<ul class="drop-down-menu-header" id="Billing">
<li class="drop-down-head"><button onclick="billing()" class="links_decoration" onmouseover="dropDownDisplay()" id="links_decoration" title="School and Student Account Management Section"><i class="fas fa-school webapplication-icons" id="webapplication-icons-billing"></i> Billing</button>
<!---<ul class="drop-down-menu-content">
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school0"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school1"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school2"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school3"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school4"></i> School</button></li>
</ul>--->
</li>
</ul>
</div>













<div class="dropdown-wrapper">
<ul class="drop-down-menu-header" id="class-room">
<li class="drop-down-head"><button onclick="classRoom()" class="links_decoration" onmouseover="dropDownDisplay()" id="links_decoration" title="Class Management Section"><i class="fas fa-chalkboard-teacher webapplication-icons" id="webapplication-icons-classes"></i> Classes</button>
<!---<ul class="drop-down-menu-content">
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school0"></i> Student TimeTable</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school1"></i> Teacher TimeTable</button></li>
</ul>--->
</li>
</ul>
</div>
















<div class="dropdown-wrapper">
<ul class="drop-down-menu-header" id="Book">
<li class="drop-down-head"><button onclick="Book()" class="links_decoration" onmouseover="dropDownDisplay()" id="links_decoration" title="Book Management Section"><i class="fas fa-book webapplication-icons" id="webapplication-icons-book"></i> Book</button>
<!---<ul class="drop-down-menu-content">
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school0"></i> NoteBook</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school1"></i> TextBook</button></li>
</ul>---->
</li>
</ul>
</div>










<div class="dropdown-wrapper">
<ul class="drop-down-menu-header" id="Library">
<li class="drop-down-head"><button onclick="library()" class="links_decoration" onmouseover="dropDownDisplay()" id="links_decoration" title="Library Section"><i class="fas fa-university webapplication-icons" id="webapplication-icons-library"></i> Library</button>
<!--<ul class="drop-down-menu-content">
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school0"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school1"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school2"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school3"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school4"></i> School</button></li>
</ul>--->
</li>
</ul>
</div>






















<div class="dropdown-wrapper">
<ul class="drop-down-menu-header" id="Inventory">
<li class="drop-down-head"><button onclick="inventory()" class="links_decoration" onmouseover="dropDownDisplay()" id="links_decoration" title="Inventories Section"><i class="fas fa-warehouse webapplication-icons" id="webapplication-icons-inventory"></i> Inventory</button>
<!--<ul class="drop-down-menu-content">
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school0"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school1"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school2"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school3"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school4"></i> School</button></li>
</ul>--->
</li>
</ul>
</div>












<div class="dropdown-wrapper">
<ul class="drop-down-menu-header" id="Report">
<li class="drop-down-head"><button onclick="report()" class="links_decoration" onmouseover="dropDownDisplay()" id="links_decoration" title="Reports Section"><i class="fas fa-bug webapplication-icons" id="webapplication-icons-report"></i> Report</button>
<!--<ul class="drop-down-menu-content">
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school0"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school1"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school2"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school3"></i> School</button></li>
<li class="drop-down-menu-list"><button onclick="Home()" class="links_decoration" title="Home page"><i class="fas fa-school webapplication-icons button-drop-down-menu-content" id="webapplication-icons-school4"></i> School</button></li>
</ul>--->
</li>
</ul>
</div>
















<div class="dropdown-wrapper">
<ul class="drop-down-menu-header" id="Sign-out">
<li class="drop-down-head">
<input type="submit" onclick="LogOut()" class="links_decoration" id="logout-button" value="Sign Out"><i class="fas fa-sign-out-alt webapplication-icons" id="webapplication-icons-logout"></i>
</li>
</ul>
</div>


</div>

</div>

<content id="createPage" class="create-pages"></content>

</main>







<!---.fa,
.fas,
.far,
.fal,
.fad,
.fab {--->




</div>














<script src="script/jquery.js"></script>
<script>
$(document).ready(function(){

$("#links_decoration").click(function(){
$(".dropdown-wrapper: .drop-down-menu-header").toggleClass("displayonoff");

});

});


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

</script>

</body>


</html>