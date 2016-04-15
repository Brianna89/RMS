<?php 
	if(isset($_SESSION['userID'])) 
		{
			include 'pages/navBar.php';
			include 'pages/dashboardHome.php';
		}else{
			include 'pages/login.php';
		}
	
?>