
	function LogoutUser() {
		$.get("php/logout.php" , function(data) {
      		window.location.href = "index.php";
    	});
    	return true;
	}