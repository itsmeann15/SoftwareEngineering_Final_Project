<?php 

include "db.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $query=mysqli_query($con,"DELETE FROM `feedbacks` WHERE `id`='$user_id'");
     if ($query == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $query . "<br>" . $conn->error;

    }
    header('location:feedback_adminPage.php');
} 

?>