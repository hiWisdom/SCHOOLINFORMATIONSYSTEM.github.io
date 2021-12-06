<?php



$dbhost = "localhost";
$dbuser = "root";
$dbpassword ="";
$dbname = "school_information_system";


if (!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) ){
	
	die("Connection failed, Try again");
}

?>