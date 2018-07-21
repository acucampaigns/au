<?php

	session_start();

	unset($_SESSION['ecomusername']);

	unset($_SESSION['ecommail']);

	unset($_SESSION['ecomid']);

	header("location:index.php");

?>