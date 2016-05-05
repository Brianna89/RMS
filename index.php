<?php  
session_start();

if(!isset($_SESSION['userID'])){
  header('Location: pages/login.php');
  exit();
}

include 'pages/header.html';

include 'pages/navBar.php';

include 'pages/dashboard.php';

include 'pages/footer.html';
?>
