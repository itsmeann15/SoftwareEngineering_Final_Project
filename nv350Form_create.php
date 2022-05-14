<?php 
    require 'phpmailer/PHPMailerAutoload.php';
    $conn=mysqli_connect("localhost","u990768367_leorentacar","Therealowner2022","u990768367_leo_db");
        if(isset($_POST['submit'])) {
            $car_model = $_POST['car_model'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $addr = $_POST['addr'];
            $date_start = $_POST['date_start'];
            $date_end = $_POST['date_end'];
            $numDays = $_POST['numDays'];

            $query1="SELECT car_model, first_name, last_name, phone, email, addr, date_start, date_end, numDays FROM nv350_form where date_start='$date_start'  ";
            $run= mysqli_query($conn,$query1);
        
            if(mysqli_num_rows($run)>0){
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('The selected date is already taken. Please choose another date or you can select another car.');
                window.location.href='reservation.php';
                </script>");
        
            exit();
        } else

        $query=mysqli_query($conn, "INSERT INTO nv350_form (car_model, first_name, last_name, phone, email, addr, date_start, date_end, numDays) values ('$car_model', '$first_name', '$last_name', '$phone', '$email','$addr','$date_start', '$date_end', '$numDays')");

        if($query){
            $mail = new PHPMailer();
            $mail->IsSMTP();
        
            $mail->SMTPDebug  = 0;  
            $mail->SMTPAuth   = TRUE;
            $mail->SMTPSecure = "tls";
            $mail->Port       = 587;
            $mail->Host       = "smtp.gmail.com";
            $mail->Username   = "leorentacar2022@gmail.com";
            $mail->Password   = "therealowner";
        
            $mail->IsHTML(true);
            $mail->AddAddress($email);
            $mail->SetFrom("leorentacar2022@gmail.com", "Email Confirmation");
                // $mail->AddReplyTo("reply-to-email", "reply-to-name");
                // $mail->AddCC("cc-recipient-email", "cc-recipient-name");
            $mail->Subject = "CONFIRMATION BOOKING";
            $content = "<b>YOUR RESERVATION IS CONFIRMED</b>
                <br><br>
                    <p>Thank you for booking with us!</p>
                    <br>
               
                    <p>Thank you for your reservation.</p>
                    <p>We're committed to providing you with the best possible experience.</p>
                    <p>If you have any questions, feel free to get in touch.</p>
                    <br><br>
                    <p>Send us a feedback: http://leorentacar.online/feedback_createCustomer.php</p>
        
                    <p><b>LEO RENT A CAR</b> We exceed beyond your expectations.</p>
                ";
        
            $mail->MsgHTML($content); 

            if(!$mail->Send()) {
                echo "Error while sending Email.";
                var_dump($mail);
            } else {
                echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Your reservation is being process. Please check your email for a confirmation message.');
                    window.location.href='reservation.php';
                </script>");
          
            }
        }else{
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
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="logo.png" sizes="937x937" type="image/png">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	
	
    <!--INTER-FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    
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
      
    a.btn{
        width: 200px;
        background: red;
    }
    
    div.desc {
        text-align: left;
        font-size: 20px;
    }
    
    .container{
        text-align: center;
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
            </div>
        </nav>

        <div class="container">
            <div class="desc">
                <div class="row mt-2">
                    <b style="text-align: center; font-size: 25px;">Nissan NV350 Van</b>
                    <br>
                    
                    <div class="col-lg-4 col-sm-12">
                        <p><b>Dimensions & Capacity</b></p>
                        <ul>
                            <li>Seating: 15 seats</li>
                            <li>Ground Clearance: 154.94 mm</li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-4 col-sm-12">
                        <p><b>Safety</b></p>
                        <ul>
                            <li>Front Dics (Ventilated disc)</li>
                            <li>Rear Brakes (drum)</li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-sm-12">
                        <p><b>Performance</b></p>
                        <ul>
                            <li>Engine: 2,755 cc</li>
                            <li>Power: 6-Speed Manual</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid vh-100" style="margin-top:50px">
            <div class="" style="margin-top: 50px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3><b>Booking Form</b></h3>
                        </div>

                        <fieldset>
                            <form class="signup-form" action="" method="post">
                                <div class="p-4">
                                    <div class="row">

                                        <div class="input-group col-md-4 col-sm-12 mb-3"> 
                                            <span class="input-group-text"><i class="bi bi-truck text-white"></i></span>
                                            <input type="text" id="myInput" name="car_model" class="form-control" value="Nissan NV350 VAN"required readonly>
                                        </div>
                          
                                        <div class="input-group col-md-4 col-sm-12 mb-3">
                                            <span class="input-group-text"><i class="bi bi-file-person-fill text-white"></i></span>
                                            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" required>
                                        </div>
                          
                                        <div class="input-group col-md-4 col-sm-12 mb-3">
                                            <span class="input-group-text"><i class="bi bi-file-person-fill text-white"></i></span>
                                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" required>
                                        </div>

                                        <div class="input-group col-md-4 col-sm-12 mb-3">
                                            <span class="input-group-text"><i class="bi bi-telephone-plus-fill text-white"></i></span>
                                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone Number" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" required>
                                        </div>

                                        <div class="input-group col-md-4 col-sm-12 mb-3">
                                            <span class="input-group-text"><i class="bi bi-envelope-fill text-white"></i></span>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required>
                                        </div>

                                        <div class="input-group col-md-4 col-sm-12 mb-3">
                                            <span class="input-group-text"><i class="bi bi-house-fill text-white"></i></span>
                                            <input type="text" id="addr" name="addr" class="form-control" placeholder="Address" required>
                                        </div>
                         
                                        <label for="date_start"><b>Rent Date Start</b></label>
                                        <div class="input-group col-md-4 col-sm-12 mb-3">
                                            <span class="input-group-text"><i class="bi bi-calendar-plus-fill text-white"></i></span>
                                            <input type="date" id="date_start" name="date_start" class="form-control" placeholder="Date Start" required>
                                        </div>

                                        <label for="date_end"><b>Rent Date End</b></label>
                                        <div class="input-group col-md-4 col-sm-12 mb-3">
                                            <span class="input-group-text"><i class="bi bi-calendar-plus-fill text-white"></i></span>
                                            <input type="date" id="date_end" name="date_end" class="form-control" placeholder="Date End" required>
                                        </div>

                                        <label for="numDays"><b>Number of Days</b></label>
                                        <select class="form-select" aria-label="Default select example" id="numDays" name="numDays" required>
                                            <option selected>Open this select menu</option>
                                            <option value="1 Day - P 3, 500">1 Day - P 3, 500</option>
                                            <option value="2 Days - P 7, 000">2 Days - P 7, 000</option>
                                            <option value="3 Days - P 10, 500">3 Days - P 10, 500</option>
                                            <option value="4 Days - P 14, 000">4 Days - P 14, 000</option>
                                            <option value="5 Days - P 17, 500">5 Days - P 17, 500</option>
                                            <option value="6 Days - P 21, 000">6 Days - P 21, 000</option>
                                            <option value="7 Days - P 24, 500">7 Days - P 24, 500</option>
                                        </select>

                                        <div class="button pt-1 mb-4"> 
                                            <input type ="submit" class ="btn btn-dark btn-lg mt-2 mv-3" value="Rent the Car" name="submit">
                                        </div>  
                                        
                                        <center>
                                            <a class="btn btn-danger btn-lg mt-2 mv-3" href="reservation.php" role="button">Cancel</a>
                                        </center>
                                    </div>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script scr="app_form.js"></script>

    </body>
</html>
































