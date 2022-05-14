<?php 

include "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

      .form-label{
          font-size: 25px;
          color: white;
      }

      h3{
        font-family: 'Bitter';
        text-align: center;
        margin-top: 20px;
      }

      .container.form{
        background: #242424;
        font-size: 30px;
        border-radius: 20px;
        width: 70%;
      }
    </style>

    </head>

    <body>
        <div class="container my-5">
            <form action="" method="post">
                <div class="container form" >
                    <form class="signup-form" action="announcement_details.php" method="post">
                        <div class="p-4">
                            <div class="row">
                                <div class="container" >
                                    <center>
                                        <div class="col-md-6 my-2">
                                            <label for="description" class="form-label" ><b>Announcement Title</b></label>
                                            <input type="text" class="form-control" id="title" name="title" placeholde="Title" required="">
                                        </div>
                          
                                        <div class="col-md-6 my-2">
                                            <label for="description" class="form-label" ><b>Announcement Title</b></label>
                                            <input type="text" class="form-control" id="title" name="title" placeholde="Title" required="">
                                        </div>
                          
                                        <div class="button pt-1 mb-4"> 
                                            <input type ="submit" class ="btn btn-success btn-lg mt-2 mv-3" value="Post Announcement" name="submit">      
                                        </div>  

                                        <div class="cancel pt-1 mb-4">
                                            <a href="announcement_view.php" class="btn-cancel  btn-lg mt-2 mv-3 ">Cancel</a>
                                        </div>
                                    <center>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </form> 
        </div>
    </body>
</html>