<?php
// used to connect to the database
$host = "localhost";
$db_name = "newcustomer";
$username = "newcustomer";
$password = "k)A!ddbk)WJ8pMH]";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password, $confirmpassword, $email, $firstname, $lastname, $dateofbirth, $gender);

    //echo "Connected successfully"; 
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: ".$exception->getMessage();
}
?>
