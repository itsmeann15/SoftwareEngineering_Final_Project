<!--STORING TO DATABASEEEEE -->

<?php

require 'phpmailer/PHPMailerAutoload.php';

//Connection
$mysqli = new mysqli("localhost", "u990768367_leorentacar", "Therealowner2022", "u990768367_leo_db");

 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$car_model = $mysqli->real_escape_string($_REQUEST['car_model']);
$first_name = $mysqli->real_escape_string($_REQUEST['first_name']);
$last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
$phone = $mysqli->real_escape_string($_REQUEST['phone']);
$email1 = $mysqli->real_escape_string($_REQUEST['email']);
$addr = $mysqli->real_escape_string($_REQUEST['addr']);
$date_start = $mysqli->real_escape_string($_REQUEST['date_start']);
$date_end = $mysqli->real_escape_string($_REQUEST['date_end']);
$numDays = $mysqli->real_escape_string($_REQUEST['numDays']);
$insertEmail = $_REQUEST['email'];
 
// INSERT DATA

$sql = "INSERT INTO commuter_form (car_model, first_name, last_name, phone, email, addr, date_start, date_end, numDays) VALUES ('$car_model','$first_name', '$last_name', '$phone', '$email1', '$addr', '$date_start', '$date_end', '$numDays')";
if($mysqli->query($sql) === true){
   echo "Records inserted successfully.";

    } else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();

?>