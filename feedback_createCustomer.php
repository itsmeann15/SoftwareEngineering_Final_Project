<?php 

$conn=mysqli_connect("localhost","u990768367_leorentacar","Therealowner2022","u990768367_leo_db");

  if (isset($_POST['submit'])) {

    $fullname = $_POST['fullname'];
    $feedback = $_POST['feedback'];

    $query1="INSERT INTO `feedbacks`(`fullname`, `feedback`) VALUES ('$fullname','$feedback')";
    $run= mysqli_query($conn,$query1);

    if ($run == TRUE) {

        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Your Feedbacks has been successfully posted, click okay to view your feedback.');
            window.location.href='feedback_customerPage.php';
            </script>");
        
    }else{
      echo "Error:". $query1 . "<br>". $conn->error;
    } 
    
    $conn->close(); 

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="logo.png" sizes="937x937" type="image/png">

    <!-- INTER-FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    
    <!-- ABRIL-FATFACE-FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">

    <!-- BITTER-FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@800&family=Lobster&family=Merienda+One&family=Praise&display=swap" rel="stylesheet">

    <!-- Amiri-FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">


    <style>
        body{
            font-family: 'Inter';
            font-size: 20px;
            background: rgb(255, 254, 254);
        }
        .navbar{
            background-color: rgb(58, 44, 46);
            color: white;
        }

        .navbar-brand{
           font-family: 'Abril-fatface';
           font-size: 40px;
         
        }
        
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #ff0000 0%, #660033 100%);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom, #ff0000 0%, #660033 100%);
        }
    </style>

    </head>
    <body>
        <form action="" method="POST">
            <section class="vh-100 gradient-custom">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-dark  text-white" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">
                                    <div class="mb-md-5 mt-md-4 pb-5">
                                        <h2 class="fw-bold mb-2 text-uppercase">Share with us your Experiece!</h2>
                                        <p class="text-white-50 mb-5">We are happy to hear your experience with us</p>
                                        
                                        <div class="form-outline form-white mb-4">
                                            <input type="text" id="fullname" class="form-control form-control-lg" name="fullname" />
                                            <label class="form-label" for="fullname">Full Name</label>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <textarea type="text" id="feedback" class="form-control form-control-lg" name="feedback"></textarea>
                                            <label class="form-label" for="feedbacks">Feed back</label>
                                        </div>

                                        <div class="button pt-1 "> 
                                            <input type ="submit" class ="btn btn-success btn-lg" value="Post Feedback" name="submit">
                              
                                        </div> 

                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>    
        </form> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>