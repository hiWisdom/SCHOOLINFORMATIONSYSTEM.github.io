<?php




//REGISTRATION FORM HYPERTEXT PREPROCESSOR TECHNICAL WRITING BEGINS





//php script to save student data in database and automatically generate student registration number_format.




//steps below.


//step1 create vairables and use filter_input method to call html name method.


$firstname = filter_input(INPUT_POST, 'firstname');
$middlename = filter_input(INPUT_POST, 'secondname');
$lastname = filter_input(INPUT_POST, 'lastname');
$nationality = filter_input(INPUT_POST, 'nationality');
$stateoforigin = filter_input(INPUT_POST, 'stateoforigin');
$phonenumber = filter_input(INPUT_POST, 'phone_number');
$emailaddress = filter_input(INPUT_POST, 'email_address');
$countryofresidence = filter_input(INPUT_POST, 'country_of_residence');
$stateofresidence = filter_input(INPUT_POST, 'state_of_residence');
$cityofresidence = filter_input(INPUT_POST, 'city_of_residence');
$residenceaddress = filter_input(INPUT_POST, 'residence_address');
$fullnamek = filter_input(INPUT_POST, 'fullnameK');
$phonenumberk = filter_input(INPUT_POST, 'phonenumberK');
$emailaddressk = filter_input(INPUT_POST, 'emailaddressK');
$housenok = filter_input(INPUT_POST, 'housenoK');











//step2 create a conditional statement. i use the if and else condition method to determine decision making on accepting and storing data in database









if (!empty($firstname) &&  !empty($middlename) && !empty($lastname) && !empty($nationality) &&  !empty($stateoforigin) && !empty($phonenumber)  && !empty($emailaddress) && !empty($countryofresidence) && !empty($stateofresidence) && !empty($cityofresidence) && !empty($residenceaddress) && !empty($fullnamek) && !empty($phonenumberk) && !empty($emailaddressk) && !empty ($housenok) ){
		
	
	
	


//create variable to call database method connection name
	
$host = "locahost";
$dbusername = "root";
$dbpassword = "";
$dbname= "school_information_system";








//create variable for new mysqli connection



$conn = new mysqli ('localhost', $dbusername, $dbpassword, $dbname);



//$checkuid = "SELECT * FROM `uid` ORDER BY id DESC LIMIT 1";
//$checkresult = mysqli_query($conn, $checkuid);
//if(mysqli_num_rows($checkresult)>0){
//if ($row=mysqli_fetch_assoc($checkresult)) {

$uid = $row['studentid'];
$get_numbers = str_replace("SR", "",$uid);
$id_increase = $getnumbers+=1;
$get_string = str_pad($id_increase, 5,0, STR_PAD_LEFT);
$id = "SR".$get_string;
//}
//}

//create a conditional statement for connection to database error and connection to database without error using if and else statement.




//if they is an error to save data into database, the script below gives information to user
if (mysqli_connect_error() ) {

	
die('Information not saved successfully due to Network error, try disconnecting and reconnecting internet connection or restarting internet connection. ('.mysqli_connect_errno().')' .mysqli_connect_error() );


}	




//if they is no error in saving data, the script below process data successfully into database
else	{

$sql= "INSERT INTO new_registration(studentid, firstname, secondname, lastname, nationality, stateoforigin, phone_number, email_address, country_of_residence, state_of_residence, city_of_residence, residence_address, fullnameK, phonenumberK, emailaddressK, housenoK ) values('$id', '$firstname', '$middlename', '$lastname', '$nationality', '$stateoforigin', '$phonenumber', '$emailaddress', '$countryofresidence', '$stateofresidence', '$cityofresidence', '$residenceaddress', '$fullnamek', '$phonenumberk', '$emailaddressk', '$housenok')";



if ($conn->query($sql) ) {
echo "Registration saved successfully".'<br>'."Student Registration Number: ".$id;
	
} 





else {
echo "Record not saved" .$sql. "<br>".$conn->error;
}

$conn->close();

}


}






//REGISTRATION FORM HYPERTEXT PREPROCESSOR TECHNICAL WRITING ENDS






?>

