<!--STORING TO DATABASEEEEE -->

<?php

$mysqli = new mysqli("localhost", "u990768367_leorentacar", "Therealowner2022", "u990768367_leo_db");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$fullname = $mysqli->real_escape_string($_REQUEST['fullname']);
$feedback = $mysqli->real_escape_string($_REQUEST['feedback']);
$comment = $mysqli->real_escape_string($_REQUEST['comment']);

 
// INSERT DATA
$sql = "INSERT INTO feedbacks (fullname, feedback, comment) VALUES ('$fullname','$feedback', '$comment')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";

    } else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>