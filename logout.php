<?php
session_start();
session_destroy();
// REDIRECT TO LOG IN PAGE
header('Location: login.php');
?>