<?php

session_start();

// Viewer: Can this be abstracted away to a reusable function?
if ( !isset($_SESSION['username']) ) {
	header('Location: adminlogin.php');
	die();
}

?>
<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hello, <?php echo $_SESSION['username']; ?></h1>
	<a href="adminlogout.php">Logout</a>
</body>
</html>