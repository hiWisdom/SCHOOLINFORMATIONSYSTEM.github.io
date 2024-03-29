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
<link rel="stylesheet" href="file:///C:/Users/HP/Desktop/www.hsam/bootstrap/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="file:///C:/Users/HP/Desktop/onnet.github.io/fontawesome/fontawesome-free-5.14.0-web/css/all.css"/>
<link rel="stylesheet" href="stylesheets/sis.css"/>
<link rel="stylesheet" href="newRegistrationStylesheet.css"/> 



<style>

</style>
</head>


<body>

<!---<nav style="border:1px solid black; margin-top:-15px; margin-bottom:-25px; height:40px;">
<ul>
<li><button onclick="RegisterRegistration()" class="btn btn" id="registrationbutton">Register </button></li>
<li><button onclick="SearchRegistration()" class="btn btn" id="registrationbutton">Search Registration </button></li>
<li><button onclick="NewRegistration()" class="btn btn" id="registrationbutton">New Registration </button></li>
</ul>

<script>

function RegisterRegistration() {
window.location="registration.html";
}

function NewRegistration() {
window.location="newregistration.html";
}

function SearchRegistration() {
window.location="search-registration.html";
}
</script>

<div id="page-title-registration">
<h2 title="NOTE: registration page is scrollable">Registration Form</h2>
</div>

</nav>--->


<form method="post" action="send.php" id="regForm" onsubmit="return siSregistrationFormValidation()">

<header>


<div class="row registrationType">
<label for="registration_type">REGISTRATION FORM| Registration type </label>: 
<select id="registration_type" class="registration_type">
<option value="Student" class="registration_type_student" id="registration_type_student" name="">Student</option>
<option value="Teacher" class="registration_type_teacher" id="registration_type_teacher" name="">Teacher</option>
<option value="Admin" class="registration_type_admin" id="registration_type_admin" name="">Admin</option>
</select>
</div>

<div class="row" id="regNumber" title="NOTE: registration number can serve as search createria">
<!---<label for="registrationNumber">Registration Number </label>: ---><input type="search" name="studentid" placeholder="Registration Number" id="registrationNumber" class="fills_decoration">
</div>



<div id="note" title="* asterik field are compluosry"><mark><a href="">note</a></mark></div>
<div id="help" title="Learn Registration"><mark><a href="">help</a></mark></div>

<div id="div_nav">
<ul id="nav">
<li class="nav_buttons" id="navbutton-one"><input title="Start new registration" class="registration-buttons" type="button" onclick="anewRegistration()" value="new" name=""/></li>
<li class="nav_buttons" id="navbutton-two"><input title="Save registration details" class="registration-buttons" type="submit" onclick="siSregistrationFormValidation()" value="save" name=""/></li>
<li class="nav_buttons" id="navbutton-three"><input title="update registration detials" class="registration-buttons" type="button" onclick="updateRegistration()" value="update" name=""/></li>
<li class="nav_buttons" id="navbutton-four"><input title="print registration detials" class="registration-buttons" type="button" onclick="printRegistrationDetails()" value="print Reg details" name=""/></li>
<li class="nav_buttons" id="navbutton-five"><input title="print ID Card" class="registration-buttons" type="button" onclick="printRegistrationIdCard()" value="print ID Card" name=""/></li>
</ul>
</div>

<script>

function anewRegistration() {
window.location="newregistration.html";
}


</script>

</header>


<main>


<div id="form_parts">



<div id="part1" class="form_parts">
<div class="profile-images">
<img src="uploadProfilePicture.png" id="upload-img" title="Upload Picture" style="cursor:pointer;">

</div>
<div class="custom-file">
<label for="fileupload" id="upload-file-word" style="cursor:pointer;">Upload Photo</label>
<input type="file" id="fileupload" name="image" accept=".jpg, .png, .jpeg" onchange="validateFileupload" class="drop_target1" ondrop="drop(event)" ondragover="allowDrop(event)"/>

</div>
</div>



<div id="part2" class="form_parts">
<span id="span-one">Bio Data </span>
<br>



<div class="row">
<label for="firstname"><span style="color:red;text-decoration:none;">*</span> First Name </label>: <input value="" name="firstname" type="text" id="firstname" class="fills_decoration">
</div>


<div class="row">
<label for="secondname"><span style="color:red;text-decoration:none;"></span> Middle Name </label>: <input value="" name="secondname" type="text" id="secondname" class="fills_decoration">
</div>


<div class="row">
<label for="lastname"><span style="color:red;text-decoration:none;">*</span> Last Name </label>: <input value="" name="lastname" type="text" id="lastname" class="fills_decoration">
</div>


<div class="row">
<label for="gender_type"><span style="color:red;text-decoration:none;">*</span> Gender </label>: 
<select id="gender_type" class="gender_type">
<option value="Male" class="gender_type_male" id="gender_type_male" name="gender">Male</option>
<option value="Female" class="gender_type_female" id="gender_type_female" name="gender">Female</option>
</select>
</div>


<div class="row">
<label for="marital_type"><span style="color:red;text-decoration:none;">*</span> Marital Status </label>: 
<select id="marital_type" class="marital_type">
<option value="Single" class="marital_type_single" id="marital_type_single" name="marital_status">Single</option>
<option value="Married" class="marital_type_married" id="marital_type_married" name="marital_status">Married</option>
<option value="Divorced" class="marital_type_divorced" id="marital_type_divorced" name="marital_status">Divorced</option>
<option value="Window" class="marital_type_window" id="marital_type_window" name="marital_status">Window</option>
<option value="Windower" class="marital_type_windower" id="marital_type_windower" name="marital_status">Windower</option>
</select>
</div>


<div class="row">
<label for="dob"><span style="color:red;text-decoration:none;">*</span> Date of Birth </label>: <input value="" name="dob" type="date" id="dob" class="fills_decoration">
</div>


<div class="row">
<label for="nationality"><span style="color:red;text-decoration:none;">*</span> Nationality </label>: <input value="" name="nationality" type="text" id="nationality" class="fills_decoration">
</div>


<div class="row">
<label for="stateoforigin"><span style="color:red;text-decoration:none;">*</span> State Of Origin </label>: <input value="" name="stateoforigin" type="text" id="stateoforigin" class="fills_decoration">
</div>


<div class="row">
<label for="language_type"><span style="color:red;text-decoration:none;">*</span> Language Spoken </label>: 
<select id="language_type" class="language_type">
<option value="English" class="language_type_english" id="language_type_english" name="language_type">english</option>
<option value="French" class="language_type_french" id="language_type_french" name="language_type">French</option>
<option value="Portuguese" class="language_type_portuguese" id="language_type_portuguese" name="language_type">Portuguese</option>
<option value="Asia" class="language_type_asia" id="language_type_asia" name="language_type">Asia</option>
</select>
</div>


</div>



<div id="part3" class="form_parts">
<span id="span-two">Contact Details </span>
<br>
<div class="row">
<label for="phonenumber"><span style="color:red;text-decoration:none;">*</span> Phone Number </label>: <input value="" name="phone_number" maxlength="11" type="tel" id="phonenumber" class="fills_decoration">
</div>


<div class="row">
<label for="emailaddress"><span style="color:red;text-decoration:none;">*</span> Email Address </label>: <input value="" name="email_address" type="email" id="emailaddress" class="fills_decoration">
</div>


<div class="row">
<label for="country"><span style="color:red;text-decoration:none;">*</span> Country of Residence </label>: <input value="" name="country_of_residence" type="text" id="country" class="fills_decoration">
</div>


<div class="row">
<label for="state"><span style="color:red;text-decoration:none;">*</span> State of Residence</label>: <input value="" name="state_of_residence" type="text" id="state" class="fills_decoration">
</div>

<div class="row">
<label for="city"><span style="color:red;text-decoration:none;">*</span> City of Residence</label>: <input value="" name="city_of_residence" type="text" id="city" class="fills_decoration">
</div>

<div class="row">
<label for="houseno" class="textarea-label"><span style="color:red;text-decoration:none;">*</span> Residence Address :</label> <textarea value="" name="residence_address" rows="1" cols="21" id="houseno" class="fills_decoration_textarea" placeholder="residence address..."></textarea>
</div>

</div>


<div id="part4" class="form_parts">
<span id="span-three">Next of Kin Details </span>
<br>

<!---<div class="insider-form-arrange">--->

<div class="row">
<label for="fullnameK"><span style="color:red;text-decoration:none;">*</span> Full Name </label>: <input value="" name="fullnameK" type="text" id="fullnameK" class="fills_decoration">
</div>

<div class="row">
<label for="phonenumberK"><span style="color:red;text-decoration:none;">*</span> Phone </label>: <input value="" maxlength="11" name="phonenumberK" type="tel" id="phonenumberK" class="fills_decoration">
</div>


<div class="row">
<label for="emailaddressK"><span style="color:red;text-decoration:none;">*</span> Email </label>: <input value="" name="emailaddressK" type="email" id="emailaddressK" class="fills_decoration">
</div>

<div class="row">
<label for="housenoK" class="textarea-label"><span style="color:red;text-decoration:none;">*</span> Address :</label> <textarea value="" name="housenoK" rows="1" cols="21" id="housenoK" class="fills_decoration_textarea" placeholder="Next of kin residence address..."></textarea>
</div>

<!---</div>--->
</div>



<div id="part5" class="form_parts">
<span id="span-four"> Medical Information </span>
<br>
<mark>If the student's attendance at school may be affected by an existing medical or physical condition, it is your responsiblity to complete and submit the student health plan.</mark>
<div class="row">
<label for="DoesYourChildHaveAnyMedicalOrPhysicalConditionsThatMayAffectHisOrHerAttendenceAtSchool"><span style="color:red;text-decoration:none;">*</span> Does your child have any medical or physical conditions that may affect his or her attendence at school </label>? Yes<input value="" name="DoesYourChildHaveAnyMedicalOrPhysicalConditionsThatMayAffectHisOrHerAttendenceAtSchool" type="radio" id="DoesYourChildHaveAnyMedicalOrPhysicalConditionsThatMayAffectHisOrHerAttendenceAtSchool"> No<input value="" name="DoesYourChildHaveAnyMedicalOrPhysicalConditionsThatMayAffectHisOrHerAttendenceAtSchool" type="radio" id="DoesYourChildHaveAnyMedicalOrPhysicalConditionsThatMayAffectHisOrHerAttendenceAtSchool">
</div>

<div class="row">
<label for="IfYesPleaseGiveABriefDescription" class="textarea-label"><span style="color:red;text-decoration:none;">*</span>If yes, please give a brief description:</label> <textarea value="" name="" rows="1" cols="21" id="IfYesPleaseGiveABriefDescription" class="fills_decoration_textarea" placeholder="If yes, please give a brief description.."></textarea>
</div>

<div class="row">
<label for="HaveYouCompletedTheStudentHealthPlan"><span style="color:red;text-decoration:none;">*</span>Have you completed the Student Health Plan ?</label>: Yes<input value="" name="HaveYouCompletedTheStudentHealthPlan" type="radio" id="HaveYouCompletedTheStudentHealthPlan"> No<input value="" name="HaveYouCompletedTheStudentHealthPlan" type="radio" id="HaveYouCompletedTheStudentHealthPlan">
</div>

<div class="row">
<label for="IfStudentHealthPlanIsCompletedKindlyUpload" title="upload student health plan"><span style="color:red;text-decoration:none;">*</span>If Student Health plan is completed, Kindly Upload</label>: <input title="If Student Health Plan Is Completed Kindly Upload" type="file" accept=".pdf" id="IfStudentHealthPlanIsCompletedKindlyUpload" class="fills_decoration">
</div>

</div>

<!---<div id="part6" class="form_parts">
<span id="span-four">Medical Information </span>
<br>

<div class="row">
<label for="proof_of_address" title="upload national id's or utilities bills"><span style="color:red;text-decoration:none;">*</span> Proof Of Address</label>: <input title="upload national id's or utilities bills" type="file" id="proof_of_address" class="fills_decoration">
</div>

</div>---->

<div id="part7" class="form_parts">
<span id="span-four">School Information</span>


<div class="row">
<label for="NameOfLastSchoolAttended"><span style="color:red;text-decoration:none;">*</span> Name of last school attended </label>? <input value="" name="" type="text" id="NameOfLastSchoolAttended" class="fills_decoration">
</div>

<div class="row">
<label for="WasTheStudentSuspendedOrExpelledFromTheLastSchool"><span style="color:red;text-decoration:none;">*</span> Was the student suspended or expelled from the last school </label>? Yes<input value="" name="WasTheStudentSuspendedOrExpelledFromTheLastSchool" type="radio" id="WasTheStudentSuspendedOrExpelledFromTheLastSchool"> No<input value="" name="WasTheStudentSuspendedOrExpelledFromTheLastSchool" type="radio" id="WasTheStudentSuspendedOrExpelledFromTheLastSchool">
</div>

<div class="row">
<label for="IfYesWasTheSuspensionResolved"><span style="color:red;text-decoration:none;">*</span> If yes, was the suspension resolved ?</label>: Yes<input value="" name="IfYesWasTheSuspensionResolved" type="radio" id="IfYesWasTheSuspensionResolved"> No<input value="" name="IfYesWasTheSuspensionResolved" type="radio" id="IfYesWasTheSuspensionResolved">
</div>

<div class="row">
<label for="IfTheSuspensionHasBeenResolvdProvideFurtherInformation" class="textarea-label"><span style="color:red;text-decoration:none;">*</span> If the suspension has been resolved provide further information :</label> <textarea value="" name="" rows="1" cols="21" id="IfTheSuspensionHasBeenResolvedProvideFurtherInformation" class="fills_decoration_textarea" placeholder="If The Suspension Has Been Resolved Provide Further Information..."></textarea>
</div>
<mark>if the suspension has not been resolved, school staff will refer to student services suspension</mark>

<div class="row">
<label for="language_type"><span style="color:red;text-decoration:none;">*</span> Address of last school, country </label>: 
<select id="language_type" class="language_type">
<option value="English" class="language_type_english" id="language_type_english" name="">England</option>
<option value="French" class="language_type_french" id="language_type_french" name="">France</option>
<option value="Portuguese" class="language_type_portuguese" id="language_type_portuguese" name="">Nigeria</option>
<option value="Asia" class="language_type_asia" id="language_type_asia" name="">United State of America</option>
</select>
</div>

<div class="row">
<label for="language_type"><span style="color:red;text-decoration:none;">*</span> Address of last school, state </label>: 
<select id="language_type" class="language_type">
<option value="English" class="language_type_english" id="language_type_english" name=""></option>
<option value="French" class="language_type_french" id="language_type_french" name=""></option>
<option value="Portuguese" class="language_type_portuguese" id="language_type_portuguese" name=""></option>
<option value="Asia" class="language_type_asia" id="language_type_asia" name=""></option>
</select>
</div>

<div class="row">
<label for="language_type"><span style="color:red;text-decoration:none;">*</span> Address of last school, city </label>: 
<select id="language_type" class="language_type">
<option value="English" class="language_type_english" id="language_type_english" name=""></option>
<option value="French" class="language_type_french" id="language_type_french" name=""></option>
<option value="Portuguese" class="language_type_portuguese" id="language_type_portuguese" name=""></option>
<option value="Asia" class="language_type_asia" id="language_type_asia" name=""></option>
</select>
</div>

<div class="row">
<label for="AddressOfLastSchool" class="textarea-label"><span style="color:red;text-decoration:none;">*</span>Address of last school, Province :</label> <textarea value="" name="" rows="1" cols="21" id="AddressOfLastSchool" class="fills_decoration_textarea" placeholder="Address Of Last School.."></textarea>
</div>

<div class="row">
<label for="ReasonForLeavingLastSchool" class="textarea-label"><span style="color:red;text-decoration:none;">*</span> Reason For Leaving Last School :</label> <textarea value="" name="" rows="1" cols="21" id="ReasonForLeavingLastSchool" class="fills_decoration_textarea" placeholder="Reason For Leaving Last School ..."></textarea>
</div>

</div>

<!--<div id="part5" class="form_parts">
<div class="profile-images">
<img src="contact.png" id="upload-img" title="Upload Picture">
</div>
<div class="custom-file">
<label for="fileupload">Upload File</label>
<input type="file" id="fileupload">

</div>
</div>--->



</div>
</form>
</main>






<footer></footer>

























































<!-----NEW REGISTRATION JAVASCRIPT CODE--------->



<script src="script/sis.js"></script>
<script src="jquery.js"></script>


<script>

$(document).ready(function(){


$("#navbutton-one").show();





//Profile picture change event/statement begins
$("#fileupload").change(function(event){
var x = URL.createObjectURL(event.target.files[0]);
$("#upload-img").attr("src", x);
console.log(event);
});
//Profile picture change event/statement ends




});
</script>



<script>

//personal details varables
var registration_number = document.getElementById("registrationNumber");
var first_name = document.getElementById("firstname");
var last_name = document.getElementById("lastname");
var gendertype = document.getElementById("gender_type");
var maritaltype = document.getElementById("marital_type");
var date_of_birth = document.getElementById("dob");
var nationalities = document.getElementById("nationality");
var state_of_origin = document.getElementById("stateoforigin");
var languagetype = document.getElementById("language_type");
var phone_number = document.getElementById("phonenumber");
var email_address = document.getElementById("emailaddress");
var Country = document.getElementById("country");
var State = document.getElementById("state");
var City = document.getElementById("city");
var residence_address = document.getElementById("houseno");

//next of kin varables
var full_nameK = document.getElementById("fullnameK");
var phone_numberK = document.getElementById("phonenumberK");
var email_addressK = document.getElementById("emailaddressK");
var residence_addressK = document.getElementById("housenoK");


//registration type and proof of address varables
var registrationType = document.getElementById("registration_type");
var proofOfAddress = document.getElementById("proof_of_address");



function siSregistrationFormValidation() {

if (first_name.value==""){alert("Kindly Fill Firstname, thank you.");
first_name.focus();
first_name.style.border="1px solid red";
return false;}

if (last_name.value==""){alert("Kindly Fill Lastname, thank you.");
last_name.focus();
last_name.style.border="1px solid red";
return false;}

if (gendertype.value==""){alert("Kindly enter Gender, thank you.");
gendertype.focus();
gendertype.style.border="1px solid red";
return false;}

if (maritaltype.value==""){alert("Kindly enter Marital type, thank you.");
maritaltype.focus();
maritaltype.style.border="1px solid red";
return false;}

if (date_of_birth.value==""){alert("Kindly Fill Date of birh, thank you.");
date_of_birth.focus();
date_of_birth.style.border="1px solid red";
return false;}

if (nationalities.value==""){alert("Kindly Fill Nationality, thank you.");
nationalities.focus();
nationalities.style.border="1px solid red";
return false;}

if (state_of_origin.value==""){alert("State Of Origin can't be empty, thank you.");
state_of_origin.focus();
state_of_origin.style.border="1px solid red";
return false;}

if (languagetype.value==""){alert("Language type can't be empty, thank you.");
languagetype.focus();
languagetype.style.border="1px solid red";
return false;}

if (phone_number.value.length <= 10){alert("Phone number must be eleven digit, thank you.");
phone_number.focus();
phone_number.style.border="1px solid red";
return false;}

if (email_address.value==""){alert("Kindly fill email address, thank you.");
email_address.focus();
email_address.style.border="1px solid red";
return false;}

if (Country.value==""){alert("Kindly Fill Country, thank you.");
Country.focus();
Country.style.border="1px solid red";
return false;}

if (State.value==""){alert("Kindly Fill State, thank you.");
State.focus();
State.style.border="1px solid red";
return false;}

if (City.value==""){alert("Kindly fil City, thank you.");
City.focus();
City.style.border="1px solid red";
return false;}

if (residence_address.value==""){alert("Kindly Fill Residential address, thank you.");
residence_address.focus();
residemce_address.style.border="1px solid red";
return false;}

if (full_nameK.value==""){alert("Next of Kin Full Name is can'tbe empty, thank you.");
full_nameK.focus();
full_nameK.style.border="1px solid red";
return false;}

if (phone_numberK.value < 11){alert("Next of kin Phone number must be eleven digit, thank you.");
phone_numberK.focus();
phone_numberK.style.border="1px solid red";
return false;}

if (email_addressK.value==""){alert("Next of kin email address can't be empty, thank you.");
email_addressK.focus();
email_addressK.style.border="1px solid red";
return false;}

if (residence_addressK.value==""){alert("Next of Kin residential address can'tbe empty, thank you.");
residence_addressK.focus();
residence_addressK.style.border="1px solid red";
return false;}

return true;
};


function validateFileupload() {
	var fileName = document.getElementById("fileupload");
	var idxDot = fileName.lastIndexOf(".") + 1;
	var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
	if (extFile=="jpg" || extFile=="jpeg" || extFile=="png") {
	}else{ alert("Only jpg/ jpeg and png files allowed!");
	}


function drop(event) {
event.preventDefault();
var data = event.dataTransfer.getData("Text");
event.target.appendChild(document.getElementById(data));
document.getElementsByClassName("notification").innerHTML="Picture uploaded successfully";
}


}
</script>

</body>


</html>