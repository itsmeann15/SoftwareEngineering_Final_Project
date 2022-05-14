<!--STORING TO DATABASEEEEE -->

<?php

// Connection
$mysqli = new mysqli("localhost", "u990768367_leorentacar", "Therealowner2022", "u990768367_leo_db");
 

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 

$title = $mysqli->real_escape_string($_REQUEST['title']);
$title_description = $mysqli->real_escape_string($_REQUEST['title_description']);

 

$sql = "INSERT INTO announcement (title, title_description) VALUES ('$title','$title_description')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";

    } else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>