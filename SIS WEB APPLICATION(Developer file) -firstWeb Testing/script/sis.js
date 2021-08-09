
/*
// Access modules for Admin, Teacher and student when they login.

// call the access selector

var accessSelector = document.getElementById("status");



// call the access category from your html/document

var adminAccess = document.getElementById("admin_category");
var teacherAccess = document.getElementById("teacher_category");
var studentAccess = document.getElementById("student_category");


// call the access modules from your html/document

var administrationAccess = document.getElementById("Administration");
var demographicAccess = document.getElementById("Registration-demographic");
var classroomAccess = document.getElementById("class-room");
var bookAccess = document.getElementById("Book");
var libraryAccess = document.getElementById("Library");
var InventoryAccess = document.getElementById("Inventory");
var reportAccess = document.getElementById("Report");




function validateSigninDetailsB4PHP() {


	
	
if(accessSelector=="adminAccess"){ classroomAccess.style.display="none"; demographicAccess.style.display="none";}

// else if (accessSelector==teacherAccess){}

else if (accessSelector=="studentAccess"){ InventoryAccess.style.display="none"; demographicAccess.style.display="none"; administrationAccess.style.display="none";}

else { alert("Please Choose Category");}

};
*/



window.addEventListener("click"
, function() {
	


var administrationAccess = document.getElementById("Administration");
var demographicAccess = document.getElementById("Registration-demographic");
var classroomAccess = document.getElementById("class-room");
var bookAccess = document.getElementById("Book");
var libraryAccess = document.getElementById("Library");
var InventoryAccess = document.getElementById("Inventory");
var reportAccess = document.getElementById("Report");

	
var accessSelector = document.getElementById("status");


if(accessSelector.id === "student_category") {InventoryAccess.style.display="none";}

	
	
	
});






































var logInCategory = document.getElementsByClassName("main_content");
var categoryVerification = document.getElementById("status");



function LogOut() {
window.location="index.html";
}



function Home() {
	window.location="homepage.html";
}




























var createPage = document.createElement("iframe");


function registration() {
//var Registration_Page = document.getElementById("registration");
//Registration_Page.appendChild(createPage);

//var createNewPage = document.getElementsByClassName("create-pages");
//createNewPage.appendChild(createPage);

var createNewPage = document.getElementById("createPage");
createNewPage.appendChild(createPage);

createPage.src="Registration-Modules/registration.html";
createPage.style.width="100%";
createPage.style.height="100%";
createPage.style.overflow="scroll";

}



function newRegistration() {
var createNewPage = document.getElementById("createPage");
createNewPage.appendChild(createPage);

createPage.src="Registration-Modules/newregistration.html";
createPage.style.width="100%";
createPage.style.height="100%";
createPage.style.overflow="scroll";

}
	


function searchRegistration() {
var createNewPage = document.getElementById("createPage");
createNewPage.appendChild(createPage);

createPage.src="Registration-Modules/search-registration.html";
createPage.style.width="100%";
createPage.style.height="100%";
createPage.style.overflow="scroll";

}





function billing() {
var createNewPage = document.getElementById("createPage");
createNewPage.appendChild(createPage);

createPage.src="Billing-Modules/billing.html";
createPage.style.width="100%";
createPage.style.height="100%";
createPage.style.overflow="scroll";

}






function classRoom() {
var createNewPage = document.getElementById("createPage");
createNewPage.appendChild(createPage);

createPage.src="Classes-Modules/classes.html";
createPage.style.width="100%";
createPage.style.height="100%";
createPage.style.overflow="scroll";

}









function report() {
var createNewPage = document.getElementById("createPage");
createNewPage.appendChild(createPage);

createPage.src="Report-Modules/reports.html";
createPage.style.width="100%";
createPage.style.height="100%";
createPage.style.overflow="scroll";

}



