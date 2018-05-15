
<?php
	
	//Start Session
	session_start();

	//Unset the variables stored in session
	session_unset();
	
	//kill the session
	session_destroy();

	
?>

<?php
	require("config.php");
	require("closedb.php");
?>

<?php
	header("location: ");

	
?>
