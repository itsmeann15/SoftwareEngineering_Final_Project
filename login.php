<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" href="logo.png" sizes="937x937" type="image/png">

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

    h3{
        color: black;
        font-size: 40px;
     }

    .input-group-text{
        background-color: red;
     }
     
    div.button{
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
        
        <?php
            require('db.php');
            session_start();
    
            if (isset($_POST['username'])) {
                $username = stripslashes($_REQUEST['username']);    // removes backslashes
                $username = mysqli_real_escape_string($con, $username);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($con, $password);
       
                $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
                $result = mysqli_query($con, $query) or die(mysql_error());
                $rows = mysqli_num_rows($result);
                
                if ($rows == 1) {
                    $_SESSION['username'] = $username;
            
                    header("Location: admin_home.php");
                } else {
                    echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Incorrect Username/password. Please try again.');
                        window.location.href='login.php';
                    </script>");
            }
        } else {
    ?>
    <div class="container-fluid vh-100" style="margin-top:100px">
        <div class="" style="margin-top: 50px">
            <div class="rounded d-flex justify-content-center">
                <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                    <div class="text-center">
                      <h3><b>Sign In</b></h3>
                    </div>
                    
                    <form class="form" method="post" name="">
                        <div class="p-4">
                            
                            <div class="input-group mb-3">
                              <span class="input-group-text"><i class="bi bi-person-plus-fill text-white"></i></span>
                              <input type="text" id="username" name="username" class="form-control" placeholder="Username" autofocus="true"required>
                            </div>
                            
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-key-fill text-white"></i></span>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            
                            <div class="button pt-1 mb-4"> 
                                <input type ="submit" class ="btn btn-dark btn-lg mt-2 mv-3" value="Log In" name="submit">
                            </div> 
                            
                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="registration.php" style="color: rgb(36, 36, 197); font-size: 20px;">Register here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
  <?php
    }
?>
</body>
</html>