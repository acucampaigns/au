<?php date_default_timezone_set('Asia/Kolkata'); include'config.inc.php';

	session_start();		

	if(!isset($_SESSION['ecomusername'])||!isset($_SESSION['ecomid']))

	{

		header("Location:index.php");

	}else{

		// Assigning username from Session variable

		$username = $_SESSION['ecomusername'];

		$mail = $_SESSION['ecommail'];

		$uid = $_SESSION['ecomid'];

	}

?>