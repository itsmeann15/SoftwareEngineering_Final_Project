<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="logo.png" sizes="937x937" type="image/png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!--INTER-FONT--> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">

    
    <!--ABRIL-FATFACE-FONT--> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">

    <!--BITTER-FONT--> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@800&family=Lobster&family=Merienda+One&family=Praise&display=swap" rel="stylesheet">

    <!--Amiri-FONT--> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">

    <!---Anek Kannada-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Amiri:ital,wght@1,700&family=Anek+Kannada:wght@500;800&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Hurricane&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Poppins:ital,wght@1,100;1,200;1,500&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">

    <!--Roboto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Amiri:ital,wght@1,700&family=Anek+Kannada:wght@500;800&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Hurricane&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Poppins:ital,wght@1,100;1,200;1,500&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Roboto:wght@700&family=Ubuntu+Condensed&display=swap" rel="stylesheet">


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
        
        .container{
            align-items: center;
        }


        h1{
            font-family: 'Times New Roman';
            text-align: center;
            font-size: 80px;
            color: rgb(114, 9, 9);
        }
        
        div.desc {
            text-align: left;

            font-size: 20px;
            border-radius: 12px;
            margin-left: 10px;
        }

        div.button{
            text-align: center;
        }

        .bookNow {
            background-color: #214303;
            color: white;
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
             display: inline-block;
            font-size: 25px;
            border-radius: 12px;
        }
        

        h1.one{
            font-size: 40px;
            text-align: center;
            font-family: 'Anek-kannada';
            color:rgb(171, 44, 44);
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
        
        <h1 class="col-lg-12 col-sm-12 "> <b>Available Cars</b></h1>
      
        <div class="container mt-3">
            <hr>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6 col-xl-6">
                        <h1 class="one mb-5"><b>All Cars are at FIXED RATE amounted to P3, 500 per day (8hours). </b></h1>
                        <p style="text-indent: 10%;"><b>We have CLEAN, COMFORTABLE, SAFE AND AFFORDABLE ride for your Transport Needs.</b></p>
                    </div>

                    <div class="col-lg-6 col-sm-12 col-md-6 col-xl-6">
                        <p style="text-align: center"></p>
                        
                        <ul>
                            <p style="text-align: center; font-size: 35px;">INCLUSIONS </p>
                            <li>With Driver</li>
                            <li>Well maintained vehicle</li> 
                            <li>Very affordable rates</li>
                            <li>Complete Business Documents</li>  
                            <li>Virus free units- Sanitized courtesy of "FOG & CLEAR"</li>
                        </ul>   
    
                    </div>
                </div>

             <div class="row mt-5">

                    <div class="col-lg-6 col-sm-12 col-md-6 col-xl-6 ">
                        <img src="Mitsubushi.jpg" class="img-thumbnail" alt="...">
                            <div class="desc">
                                <div class="row mt-2">
                                    <b style="text-align: center; font-size: 25px;">2021 Mitsubushi Strada</b>
                                    <br>
                                    <div class="col-6">
                                        <p><b>Dimensions & Capacity</b></p>
                                        <ul>
                                            <li>Seating: 5 seats</li>
                                            <li>Ground Clearance: 220 mm</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="col-6">
                                        <p><b>Safety</b></p>
                                        <ul>
                                            <li>with Driver Airbag</li>
                                            <li>with Anti-Lock Braking</li>
                                        </ul>
                                    </div>

                                    <div class="col-6">
                    
                                        <p><b>Performance</b></p>
                                        <ul>
                                            <li>Engine: 2396 cc</li>
                                            <li>Power: 179hpg</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="button">
                    
                                    <a class="btn btn-lg mt-2 mb-5"  href="stradaForm_create.php" role="button"> <button class="bookNow" onclick="myFunction();" >Book Now! </button></a>
                            </div>
                
                    </div>

                    <div class="col-lg-6 col-sm-12 col-md-6 col-xl-6 ">
                
                        <a target="_blank" href="nissan-nv350-urvan.jpg"></a>
                        <img src="nissan-nv350-urvan.jpg" class="img-thumbnail" alt="...">

                        <div class="desc">

                            <div class="row mt-2">
                                <b style="text-align: center; font-size: 25px;">Nissan NV350 Van</b>
                                <br>
                                <div class="col-6">
                    
                                    <p><b>Dimensions & Capacity</b></p>
                                    <ul>
                                        <li>Seating: 15 seats</li>
                                        <li>Ground Clearance: 195 mm</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                    
                                    <p><b>Brakes</b></p>
                                    <ul>
                                        <li>Front Dics (Ventilated disc)</li>
                                        <li>Rear Brakes (drum)</li>
                                    </ul>
                                </div>

                                <div class="col-6">
                    
                                    <p><b>Performance</b></p>
                                    <ul>
                                        <li>Engine: 2,488 cc</li>
                                        <li>Power: 129 ps</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="button">
                            <a class="btn btn-lg mt-2 mb-5" href="nv350Form_create.php" role="button"> <button class="bookNow" onclick="myFunction();">Book Now! </button></a>
                        </div>

                    </div>

                    <div class="col-lg-6 col-sm-12 col-md-6 col-xl-6">
                        <a target="_blank" href="toyotacommuter.jpg"></a>
                        <img src="toyotacommuter.jpg" class="img-thumbnail" alt="...">

                        <div class="desc">

                            <div class="row mt-2">
                                <b style="text-align: center; font-size: 25px;">Toyota Commuter Van</b>
                                <br>
                                <div class="col-6">
                    
                                    <p><b>Dimensions & Capacity</b></p>
                                    <ul>
                                        <li>Seating: 15 seats</li>
                                        <li>Ground Clearance: 154.94 mm</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                    
                                    <p><b>Safety</b></p>
                                    <ul>
                                        <li>Front Dics (Ventilated disc)</li>
                                        <li>Rear Brakes (drum)</li>
                                    </ul>
                                </div>

                                <div class="col-6">
                    
                                    <p><b>Performance</b></p>
                                    <ul>
                                        <li>Engine: 2,755 cc</li>
                                        <li>Power: 6-Speed Manual</li>
                                    </ul>
                                </div>
                            </div>
                    </div>

                    <div class="button">
                        <a class="btn  btn-lg mt-2 mb-5" href="commuterForm_create.php" role="button"> <button class="bookNow"onclick="myFunction();">Book Now!</button></a>
                    </div> 

                </div>

                <div class="col-lg-6 col-sm-12 col-md-6 col-xl-6 ">
                    <a target="_blank" href="toyotarush.jpg"></a>
                        <img src="toyotarush.jpg" class="img-thumbnail" alt="...">

                    <div class="desc">
                        <div class="row mt-2">
                            <b style="text-align: center; font-size: 25px;">Toyota Rush</b>
                            <br>
                        <div class="col-6">
                            <p><b>Dimensions & Capacity</b></p>
                            <ul>
                                <li>Seating: 7 seats</li>
                                <li>Ground Clearance: 220 mm</li>
                            </ul>
                        </div>
                        <div class="col-6">
                    
                            <p><b>Safety</b></p>
                            <ul>
                                <li>Front Dics (Ventilated disc)</li>
                                <li>Rear Brakes (Leading-Traling Drums)</li>
                            </ul>
                        </div>

                        <div class="col-6">
                    
                            <p><b>Performance</b></p>
                            <ul>
                                <li>Engine: 1,496 cc</li>
                                <li>Power: 4-Speed A/T</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="button">
                    <a class="btn  btn-lg mt-2 mb-5" href="rushForm_create.php" role="button"> <button class="bookNow" onclick="myFunction();">Book Now! </button></a>
                </div>

            </div>
            
            <div class="col-lg-6 col-sm-12 col-md-6 col-xl-6 ">
                <a target="_blank" href="wigo.jpg"></a>
                <img src="wigo.jpg" class="img-thumbnail" alt="...">

                <div class="desc">

                    <div class="row mt-2">
                        <b style="text-align: center; font-size: 25px;">Toyota Wigo Hatchback</b>
                        <br>
                    <div class="col-6">
                    
                    <p><b>Dimensions & Capacity</b></p>
                    <ul>
                        <li>Seating: 5 seats</li>
                        <li>Ground Clearance: 220 mm</li>
                    </ul>
                    </div>
                    <div class="col-6">
                    
                        <p><b>Safety</b></p>
                        <ul>
                            <li>Front Dics (Ventilated disc)</li>
                            <li>Rear Brakes (Drums)</li>
                        </ul>
                    </div>

                    <div class="col-6">
                    
                        <p><b>Performance</b></p>
                        <ul>
                            <li>Engine: 998 cc</li>
                            <li>Power: 4-Speed A/T</li>
                        </ul>
                    </div>
                </div>
                </div>
                    <div class="button">
                    <a class="btn  btn-lg mt-2 mb-5" href="wigoForm_create.php" role="button"> <button class="bookNow" onclick="myFunction();">Book Now! </button></a>
                </div>

            </div>

        </div>
    </div>

    <center>
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
  
                            <br>ZC (+63) 905 682 6527 (Call or Text)<br>
                            
                            ZC (+63) 907 421 6699 (Call or Text)</p>
                      </div>
                      <div class="col item social"><a href="https://www.facebook.com/LeoRentACarZamboanga"><i class="icon ion-social-facebook"></i></a></div>
                        <p class="copyright">Maharlika Company © 2022 -  All Rights Reserved</p>
                        </div>
                    </div>    
            </footer>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script scr="app_form.js"></script>

</body>
</html>