<?php
require('db.php');
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <!--INTER-FONT-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Bitter:wght@800&family=Concert+One&family=Dancing+Script&family=Inter:wght@300&family=Lobster&family=Lora:ital@1&family=Merienda+One&family=Praise&family=Raleway:ital,wght@1,500&family=Roboto+Condensed&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
  
  <link rel="icon" href="logo.png" sizes="937x937" type="image/png">


<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Inter';
}

body{
   background-color: #F7F7F7;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 250px;
  height: 100%;
  background: #18181f;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h4{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 20px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 

.wrapper .main_content{
  width: 100%;
  margin-left: 250px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}

.jumbotron{
    background-color: #F7F7F7;
}

.glyphicon.glyphicon-ok-sign{
   
    font-size: 400px;
}
</style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h4>Leo Rent a Car </h4>
        <ul>
            <li><a href="http://leorentacar.online/"><i class="fa fa-undo" aria-hidden="true"></i> &nbsp; Go to Customer Page</a></li>
            <li><a href="admin_home.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="announcement_view.php"><i class="fas fa-user"></i>Announcement</a></li>
            <li><a href="feedback_adminPage.php"><i class="fas fa-pen"></i>Customer Feedbacks</a></li>
            <h4 style="color: #CE0200" > Transaction Records </h4>
            <hr> 
            <li> <a href="commuterForm_view.php" class="nav-link text-white"> <i class="fas fa-bus" aria-hidden="true"></i><span class="ms-2">Commuter Van Records</span> </a> </li>
            <li> <a href="stradaForm_view.php" class="nav-link text-white"> <i class="fas fa-car" aria-hidden="true"></i><span class="ms-2">2021 Mitsubishi Strada Records</span> </a> </li>
            <li> <a href="nv350Form_view.php" class="nav-link text-white"> <i class="fas fa-bus" aria-hidden="true"></i><span class="ms-2">Nissan NV350 Van Records</span> </a> </li>
            <li> <a href="rushForm_view.php" class="nav-link text-white"> <i class="fas fa-car" aria-hidden="true"></i><span class="ms-2">Toyota Rush Records</span> </a> </li>
            <li> <a href="wigoForm_view.php" class="nav-link text-white"> <i class="fas fa-car" aria-hidden="true"></i><span class="ms-2">Toyota Wigo Records</span> </a> </li>
            <hr>
        <div class="signout">
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a></li><br>
      </div>
    </div>

    <div class="main_content"> 
      <div class="info">
        <div class="jumbotron" style="text-align:center;">
            <span class="glyphicon glyphicon-ok-sign" style="color: #84a98c"></span>
            <h2 style="font-weight: bold; font-size: 50px; color: black; ">Hey, <?php echo $_SESSION['username']; ?>!</h2>
            <p>Welcome to Admin Page.</p>
        </div>
      </div>
</div>
  
  
  <script src="https://kit.fontawesome.com/812086c0b6.js" crossorigin="anonymous"></script>
</body>
</html>