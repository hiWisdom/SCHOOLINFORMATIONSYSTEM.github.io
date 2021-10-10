<?php

$sname = "localhost";
$uname = "root";
$password = "";


$db_name = "test_db";


$conn = mysql_connect($sname, $uname, $password, $db_name);


if (!$conn) {
    echo "connection failed!";
    exist();
}

?>