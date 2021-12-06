<!doctype html>
<html>


<head>
<title>ADMINISTRATIVE MODULE</title>
<link rel="shortcut icon" type="image/png" href="SIS WEB APPLICATION(Developer file)/logo/20210717_173213.jpg">
<meta name="viewport" content="width=device-width initial-scale=1"/>

  
  
  
  <!-- Frameworks links, Stylesheet links, JavaScript links -->

<link rel="stylesheet" href="stylesheets/sis.css"/>


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
<li><button onclick="Application_User_Account_Registration()" class="btn btn" id="Application_User_Account_Registration" title="Application User Account Registration."><p class="subMenu-link-text-color">Create User Account</p> </button></li>
<li><button onclick="Application_User_Account_Delete()" class="btn btn" id="Application_User_Account_Delete()" title="Application User Account Delete"><p class="subMenu-link-text-color">Delete User Account</p> </button></li>
</ul>
</nav>


<div class="subMenu-link-design1" title="SCHOOL INFORMATION SYSTEM ALL RIGHTS RESERVED PRIVATELY."></div>
</main>
&copy school information management administrative systems 2021.
<script>

function Application_User_Account_Registration() {
window.location="Application_User_Account_Registration.php";
}

function Application_User_Account_Delete() {
window.location="Application_User_Account_Delete.php";
}

</script>
</body>


</html>