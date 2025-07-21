<?php

session_start();

// Just for now...
define('USERNAME', 'Doris');
define('PASSWORD', 'tanpog');

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	// get their values
	$username = $_POST['username'];
	$password = $_POST['password'];

	// validate that against the records
	// Viewer: Can this be abstracted away to a reusable function?
	if ( $username === USERNAME && $password === PASSWORD ) {
		// credentials are correct

		// login + set session
		$_SESSION['username'] = $username;
		header("Location: client.php");
	} else {
		$status = "Incorrect login credentials";
	}
	
}

// Detect whether a specific form was submitted
// if ( isset($_POST['loginForm'])) {
// 	echo 'posted';
// }

?>

<? 
require "includes/tanpog_header_en.php"; 
require "includes/tanpog_nav_en.php";
?>

	<div class="row fullwidth top-padding">
		<div class="col-md-12 padding-1">CLIENT LOGIN AREA</div>
		<div class="col-md-6 padding-inline">
			We consider our clients and customers as key drivers of our future. 
			Which is why we put them at the core of our operations, striving to create products that match and exceed their needs. 
		
			<br /><br />
			Log in to:<br />
			- Place product orders.<br />
			- View purchase details and download receipts.<br />
			- Submit product feedback or improvement suggestions.
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-5 padding-inline">
			<form action="clientlogin.php" method="post" onchange="updateInputClass()">
				<span class="wpcf7-form-control-wrap"><input name="username" size="40" class="wpcf7-form-control wpcf7-text" aria-required="true" aria-invalid="false" placeholder="Client ID" type="text" autofocus validate></span><br />
                <span class="wpcf7-form-control-wrap"><input name="password" size="40" class="wpcf7-form-control wpcf7-text" aria-required="true" aria-invalid="false" placeholder="Password" type="password" autofocus validate></span><br />
                <span class="wpcf7-form-control-wrap"><input type="submit" value="Log In" name="loginForm" class="wpcf7-submit"></span><br /><br />

				<?php if ( isset($status) ) : ?>
				<p class="failure"><? echo $status; ?></p>
				<?php endif; ?>
			</form>	
		</div>
	</div>

	<div class="row fullwidth">
		<div class="padding-1 bg-brand t-white">
			New Customer / Interested Client? Email <a href="email:tanpog@creadar.com">tanpog@creadar.com</a>
		</div>
	</div>

<?php 
require "includes/tanpog_footer_en.php";
?>

    <!-- Scripts -->
    <script src="js/viewportchecker.js"></script>
    <script src="js/main.js"></script>

</body>
</html>