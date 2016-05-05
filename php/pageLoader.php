<?php
if(!isset($_GET['p'])){
  $page = $_GET['p'];
  if (file_exists("pages/" . $page . ".php"))
  {
  	include 'pages/' . $page . '.php';
  }else{
  	include 'pages/404.php';
  }
}else{
	include 'pages/dashboard.php';
}
?>