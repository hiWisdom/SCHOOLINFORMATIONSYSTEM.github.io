<?php

session_start();

include("connection.php");
include("function.php");


$user_data = check_login($con);

?>






<html>

<head>
<title>NEW REGISTRATION</title>
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

body{background:white;}

nav ul{width:100%;position:relative;top:-0.4cm;margin-left:-1cm;} 

li {display:inline;}

#page-title-registration{margin-left:40%;margin-top:-20px;}

#registrationbutton{font-size:12px;color:blue;border:none;}

#registrationbutton:hover{border:1px solid black;}

header{position:relative; margin-top:0.5cm; margin-left:-6cm; border-bottom:1px solid blue;}

span{color:default;text-decoration:underline;position:relative;}

#regNumber{transform:translateX(170%);}

#searchregistration{width:220px;height:23px;}

#search-Registration-Button, #registration_type{height:23px;line-break:auto}

#search-registrationType{margin-left:40%;}

#help{margin-left:94%;margin-top:-18%;font-size:12px;position:fixed;}

#div_nav{float:right;margin-top:-10%;margin-right:5%}

select{width:100px;}

.fills_decoration {width:300px; border:1px solid black;}

#regForm{display:table;padding:10px;background:transparent;height:750px;width:100%;border:2%; overflow:scroll; margin-bottom:0%;margin-top:-6%;margin-right:0%;margin-left:0%;}

main {margin-top:-18.1cm;}

table{width:auto;background:#fff;position:absolute;text-align:center;margin-left:auto;margin-right:auto;}

table{border:1px solid transparent;border-collapse: collapse; padding:0px;}

th, td{border:1px solid black;border-collapse: collapse; padding:2px; font-size:70%; width:5cm;}

.registration_search_number{margin-bottom:0px;}

th{background:#eee;}

.student_search {position:relative;top:-0.8cm; font-size:18px; color:blue; text-align:center; background:#eee; width:5cm; padding:2px; border-radius:1rem;}

.search_registration_list_serial_no {width:1%; padding:2px;}

.search_registration_address {width:30%; padding:2px;}
</style>
</head>


<body>

<nav>
<ul>
<li><button onclick="RegisterRegistration()" class="btn btn" id="registrationbutton">Register </button></li>
<li><button onclick="NewRegistration()" class="btn btn" id="registrationbutton" title="Register new student/people/pupils.">New registration </button></li>
<li><button onclick="SearchRegistration()" class="btn btn" id="registrationbutton"  title="Search registered student/people/pupils.">Search registration </button></li>
<li><button onclick="Student_Education_History()" class="btn btn" id="registrationbutton"  title="Check for student education history.">Student education history </button></li>
</ul>

<script>
function RegisterRegistration() {
window.location="registration.php";
}

function NewRegistration() {
window.location="newregistration.php";
}

function SearchRegistration() {
window.location="search-registration.php";
}

function Student_Education_History() {
window.location="student-education-history.php";
}
</script>


<div id="page-title-registration">
<h2 class="student_search" title="NOTE: Search registration/ Demographic page is scrollable">Student search</h2>
</div>

</nav>


<!--- onsubmit="return sisSearchRegistersData()"--->

<form method="POST" action="" id="regForm">




<!---Items stored here: Registration buttons, search buttons, search field, page header-->
<header>
<br>
<div id="search-registrationType">
Search by: <select title="NOTE: You can choose your preferred search cretaeria." id="registration_type" class="registration_type">
<option value="" name="" class="registration_search_number" id="registration_type_number">Reg-Number</option>
<option value="" name="" class="registration_search_number" id="registration_type_number">Name</option>
<option value="" name="" class="registration_search_number" id="registration_type_number">Phone-Number</option>
</select>
<input type="text" placeholder="use drop down as your search craeteria" name="studentid" value="" id="searchregistration" class="fills_decoration"><input type="submit" name="search" id="search-Registration-Button" class="search-Registration-Button"  value="Search" title="SEARCH"><i class="fas fa-search search-icon-decoration" id="search-icon-decoration"></i> 
</div>


</header>



</form>



<main>

<table id="table">

<tr>
<th>S/N</th>
<th>Registration N<span style="text-decoration:underline;">o</span>:</th>
<th>First Name</th>
<th>Last Name</th>
<th>Phone N<span style="text-decoration:underline;">o</span>:</th>
<th>Email</th>
<th>Class</th>
<th>Address</th>
</tr>

<?php
$connection = mysqli_connect("localhost", "root","");
$db = mysqli_select_db($connection, 'school_information_system');



if (isset($_POST['search'])) {
	
	$studentid = $_POST['studentid'];
	
	$query = "SELECT * FROM `new_registration` WHERE id='$studentid' ";
	$query_run = mysqli_query($connection,$query);
	
	while($row = mysqli_fetch_array($query_run) ) 
	{
	?>
	<tr>
	<td class="search_registration_list_serial_no"> <?php echo $row['studentid']; ?></td>
	<td> <?php echo $row['firstname']; ?></td>
	<td> <?php echo $row['lastname']; ?></td>
	<td> <?php echo $row['phone_number']; ?></td>
	<td> <?php echo $row['email_address']; ?></td>
	<td> <?php echo $row['city_of_residence']; ?></td>
	<td class="search_registration_address"> <?php echo $row['residence_address']; ?></td>
	</tr>
	
	<?php
		
	}
}

?>


</table>

</main>











<!----
echo $row ['studentid '];
		echo $row ['firstname '];
		echo $row ['lastname '];
		echo $row ['phone_number '];		
		echo $row ['email_address '];
		echo $row ['country_of_residence '];
		echo $row ['residence_address '];
		echo $row ['fullnamek '];
		echo $row ['dob '];
<ol>
<li>
<tr>
<td class="search_registration_list_serial_no"></td>
<td><a href="newregistration.html" id="reg-numbers" class="reg-numbers" onclick="search-details"></a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="search_registration_address"></td>
</tr>
</li>
</ol>

---->

<!---
<ol>
<li>
<tr>
<td class="search_registration_list_serial_no">02</td>
<td><a href="" id="reg-numbers" class="reg-numbers" onclick="search-details">SIS/Js1/2019/0003</a></td>
<td>Fred</td>
<td>Jesus</td>
<td>07052223261</td>
<td><i>jesus_daniel@yahoo.co.uk</i></td>
<td>JSS 1</td>
<td class="search_registration_address">Flat 1, Blk 39, Jakande First Gate Housing Estate, Lekki Epe Express Way, Lagos, Nigeria.</td>
</tr>
</li>
</ol>

<ol>
<li>
<tr>
<td class="search_registration_list_serial_no">03</td>
<td><a href="" id="reg-numbers" class="reg-numbers" onclick="search-details">SIS/Ss3/2019/0021</a></td>
<td>Clevery</td>
<td>Tony</td>
<td>07029373261</td>
<td><i>tonymamne@gmail.com</i></td>
<td>SSS 3</td>
<td class="search_registration_address">Flat 3, Blk 3, Jones3 Gate Housing Town, Lekki 1, Lagos, Nigeria.</td>
</tr>
</li>
</ol>
--->
















<footer>
</footer>









<script>
/*var Table = document.getElementById("table");
var searchfield = document.getElementById("searchregistration");

function sisSearchRegistersData() {
if (searchfield.value="") {
alert("fill search fill to search");
};
searchfield.focus();
searchfield.style.border="1px solid red";
return false;

};


//This is just a testing code. Not to be use for production.
/*function searchRegistrationButton() {
Table.style.display="block";
};

document.querySelector(".search-Registration-Button").addEventListener("dblclick", function() { 

document.querySelector("#table").style.display="none";

});*/
</script>

</body>


</html>