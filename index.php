<?php
require('db.php');
?>

<!DOCTYPE html>  
<html lang="en">
   <head> 
      <meta charset = "utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Leo Rent A Car</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="logo.png" sizes="937x937" type="image/png">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
   
    <style>
    * {
        box-sizing: border-box;
    }
  
    body {
        padding-top: 70px;
        background-image: url("1.jpg");
    }
        
    .button {
        display: inline-block;
        padding: 15px 25px;
        font-size: 24px;
        cursor: pointer;
        text-align: center;
        margin-left: 300px;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #2d438d;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
    }

    .button:hover {
        background-color: #780b0b
    }

    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px rgb(44, 9, 115);
        transform: translateY(4px);
    }
    
    #rcorners2 {
        border-radius: 15px 50px 30px;
        background: #ffffff;
        padding: 20px; 
        width: 500px;
        height: 150px; 
    }
    </style>
  
    </head>
    <body>
        <div class="m-4">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <img src="logo.png" alt="" width="70" height="50" class="d-inline-block align-text-top">  
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav">
                            &nbsp; &nbsp; &nbsp; <a href="about.php" class="nav-item nav-link">About us</a>
                            <a href="contactus.php" class="nav-item nav-link">Contact us</a>
                        </div>
                    </div>
                </div>
            </nav>
            
            <header> 
                <h1 class="display-1" style="color:white";>Welcome to Leo's Rent Car</h1> 
                <div class="m-4" style="color:azure";>
                    <h3><p class="text-start"> A company that caters to travelers.</p></h3> 
                    <h4><p class="text-left">We can ensure quality, easy to manage reviews, rapid process.</p></h4>
                    <h5><p class="text-left">Available at any Events for you.</p></h5>
                </div>
            </header> <br><br>

           
            <div class="col-12" id="rcorners2"> 
                <p style="text-align: left;">We exceed beyond your expectations </p>
                <p style="text-align: left;">Click here to know about us more! </p>
                <a href="announcement_customerView.php" class="button" role="button" data-mdb-toggle="button" aria-pressed="true" style="font-size: 24px;margin-top:-27px;">Get Started</a></p>
            </div> <br>

            <div class="w3-container mt-5 col-12" >
                <img class="w3-animate-fading" src="s2.jpg" style="width:50%; margin-left: 300px"><br>
            </div><br>
            
            <p style="color: white;">“Because the greatest part of a road trip isn’t arriving at your destination. It’s all the wild stuff that happens along the way.” <br>— Emma Chase.</p>
   
   </body> 
</html> 