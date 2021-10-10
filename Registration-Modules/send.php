<?php

if (isset($_POST['firstname']) && isset($_POST['secondname']) && isset($_POST['lastname'])) {
    include 'db_conn.php';
    
    
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecailchars($data);
return $data;
    }



    if (empty ($firstname) || empty ($secondname) || empty ($lastname)){
        header("Location: index.html");
    }
    //$name = validate($_POST["firstname"]);
    //$name = validate($_POST["secondname"]);
  //  $name = validate($_POST["lastname"]);

//echo $name;

else {
    $sql = "INSERT INTO test(firstname, secondname, lastname) VALUES('$firstname', '$secondname', '$lastname')";
    $res = mysql_query($conn, $sql);

    if ($res) {
echo "registration was saved successfully!"
    }


else{
echo "registration was not saved successfully, try again!"
    }

}

} 

else {
    header("Location: index.html");
}




?>