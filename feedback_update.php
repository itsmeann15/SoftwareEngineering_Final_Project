<?php 

include "db.php";

    if (isset($_POST['update'])) {
        
        $fullname = $_POST['fullname'];
        $user_id = $_POST['user_id'];
        $feedback = $_POST['feedback'];
        $comment = $_POST['comment'];
        
        $query=mysqli_query($con,"UPDATE `feedbacks` SET  `fullname`='$fullname',`feedback`='$feedback',`comment`='$comment'WHERE `id`='$user_id'");

        if ($query == TRUE) {
            echo "Record updated successfully.";
            header('Location: feedback_adminPage.php');

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
    
    if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 
    $query=mysqli_query($con,"SELECT id, fullname, feedback, comment from feedbacks WHERE `id`='$user_id'");

    if ($query->num_rows > 0) {        

        while ($row = $query->fetch_assoc()) {

            $fullname = $row['fullname'];
            $feedback = $row['feedback'];
            $comment = $row['comment'];
            $id = $row['id'];

        } 

    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Response</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" href="logo.png" sizes="937x937" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	
	
    <!--INTER-FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">

</head>
    
    <style>
    
      body{
          font-family: 'Inter';
      }
      .navbar{
          background-color: rgb(58, 44, 46);
          color: rgb(36, 32, 32);
      }

      .navbar-brand{
         font-family: 'Abril-fatface';
         font-size: 40px;
      }

      h3 {
          color: black;
          font-size: 40px;
      }

      .input-group-text{
          background-color: red;
      }

      div.button{
        text-align: center;
      }
      
      div.cancel{
        text-align: center;
      }

      .btn-cancel{
        background-color: rgb(176, 42, 42);
          color: white;
      }

    
     </style>

    </head>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand"  href="#">
                    <img src="logo.png" alt="" width="70" height="50" class="d-inline-block align-text-top">  
                     Leo's Charter
                </a>
            </div>
        </nav>

        <form action="" method="post">
          <div class="container-fluid vh-100" style="margin-top:100px">
            <div class="" style="margin-top: 50px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h2 class="fw-bold mb-2 text-uppercase">Share with us your Experiece!</h2>
                            <p class="" style="color: maroon; font-size: 18px; font-family: Bitter;">We are happy to hear your experience with us</p>
                        </div>

                        <fieldset>
                            <form class="signup-form" action="feedback_details.php" method="post">
                                <div class="p-4">
                                    <div class="row">
                                        
                                        <div class="input-group col-md-4 col-sm-12 mb-3 form-outline form-white mb-4">
                                            <span class="input-group-text"><i class="bi bi-file-person-fill text-white"></i></span>
                                            <input type="text" id="fullname" name="fullname" class="form-control" value="<?php echo $fullname; ?>" required readonly>
                                        </div>
                                        
                                        <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                          
                                        <div class="input-group col-md-4 col-sm-12 mb-3">
                                            <span class="input-group-text"><i class="bi-pencil-square text-white"></i></span>
                                            <input type="text"  id="feedback" name="feedback" class="form-control" value="<?php echo $feedback; ?>" required readonly>
                                        </div>
                          
                                        <div class="input-group col-md-4 col-sm-12 mb-3">
                                            <span class="input-group-text"><i class="bi bi-cloud text-white"></i></span>
                                            <input type="text" id="comment" name="comment" class="form-control" value="<?php echo $comment; ?>" required>
                                        </div>

                                        <div class="button pt-1 mb-4"> 
                                            <input type ="submit" class ="btn btn-dark btn-lg mt-2 mv-3" value="Update Details" name="update">
                                        </div>  
                                        
                                        <div class="cancel pt-1 mb-4">
                                            <a href="feedback_adminPage.php" class="btn-cancel  btn-lg mt-2 mv-3 ">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </fieldset>    
                    </div>
                </div>
            </div>
        </div>
    </form> 

    <?php

    } else{ 

    } 
    }

        ?> 

    </body>

</html> 