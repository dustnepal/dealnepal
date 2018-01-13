<?php
include("includes/config.php");
//include("fbconfig.php");
//session_destroy(); LOGOUT




if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}

else {
	header("Location: register.php");
}

?>


<html>
<head>
	 
	<title>DealNepal</title>
</head>

<body>
	logged in page of deal nepal
</body>

</html>