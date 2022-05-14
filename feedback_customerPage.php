<?php 

$conn=mysqli_connect("localhost", "u990768367_leorentacar", "Therealowner2022", "u990768367_leo_db");

$sql = "SELECT * FROM feedbacks";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="logo.png" sizes="937x937" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


    <!-- INTER-FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    
    
    <!-- ABRIL-FATFACE-FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">

    <! BITTER-FONT >
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
        
        h1{
            text-align: center;
            font-size: 40px;
            color: maroon;
            margin-top: 30px;
            font-family: 'Bitter';
        }

    </style>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand"  href="#">
                    <img src="logo.png" alt="" width="70" height="50" class="d-inline-block align-text-top">  
                        Leo's Charter
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="announcement_customerView.php">Home</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="reservation.php">Bookings</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php">Contact Us</a>
                        </li>
              
                        <li class="nav-item">
                            <a class="nav-link" href="feedback_customerPage.php">Customer Feedbacks</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <h1><b>Our Customer Feedbacks</b></h1>
        
        <div class="container py-5">
	        <div class="row mt-2">
	            <?php
		        if(mysqli_num_rows($result) >0){
			    
			    foreach ($result as $row){ 
                    echo '<div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="frontside">
                            <div class=" my-card card shadow-sm p-3 mb-3  " style="background:#1C1C1C; color: white; border-radius:20px">
                                <div class="row">
                                    <div class="card-body-right">
                                        <p class="card-title" style="font-family:Montserrat; font-size:25px; text-align: center; color: #e9ddce;">
                                            <i class="bi bi-person">&nbsp;</i>
                                            <strong>'.$row['fullname'].'</strong> 
                                        </p>
                    
                                        <p class="card-text" style="font-family:Montserrat; font-size:20px; text-align: justify; text-justify: inter-word;">
                                            <i class="bi bi-pencil-square"></i>
                                            '.$row['feedback'].'
                                        </p>
                    
                                        <p class="card-text" style="font-family:Montserrat; font-size:20px; text-align: justify; text-justify: inter-word;  ">
                                            <i class="bi bi-reply-fill">&nbsp; Leo Rent A Car:</i> <br> 
                                            '.$row['comment'].'
                                        </p>
                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>'."\r";
			        
			    }
		}else{
			echo "No record found";
		}
		?>
	        </div>
        </div>
        
        <div class="footer-dark mt-5">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>LEO's Rent A Car</h3>
                                <ul>
                                    <li>Well maintained car</li>
                                    <li>Fast & very convienient</li>
                                    <li>Highly Recommended</li>
                                </ul>
                        </div>
                        
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                                <ul>
                                    <li><a href="about.php">History</a></li>
                                    <li><a href="about.php">Vision</a></li>
                                    <li><a href="about.php">Mission</a></li>
                                </ul>
                    </div>
                    
                    <div class="col-md-6 item text">
                        <h3>Contact Us</h3>
                        <p>ZC (+63) 927 244 3209 (Call or Text)
                         <br>ZC (+63) 905 682 6527 (Call or Text)
                            <br>ZC (+63) 907 421 6699 (Call or Text)
                        </p>
                    </div>
                    
                    <div class="col item social"><a href="https://www.facebook.com/LeoRentACarZamboanga"><i class="icon ion-social-facebook"></i></a></div>
                        <p class="copyright">Maharlika Company © 2022 -  All Rights Reserved</p>
                    </div>
            </footer>
        </div>    
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>