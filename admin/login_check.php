<?php



@ob_start();



include ("include/config.inc.php");



if(isset($_POST['email'])){	



	$email = mysqli_real_escape_string($con,$_POST['email']);



	$password = mysqli_real_escape_string($con,$_POST['password']);



 	

	$sql= "select * from admin where password='$password' AND (username='$email' OR email='$email');";



	$result = mysqli_query($con,$sql);



	



		$row=mysqli_fetch_array($result);



		



		// If Employee found, redirect to Customer Page



		if($row['email'] && $row['password'] && $row['username']){



			session_start();



			$_SESSION['ecomusername'] = $row['username'];



			$_SESSION['ecommail'] = $row['email'];



			$_SESSION['ecomid'] = $row['id'];



			



			//if found redirect to admin home page



			header("Location:dashbord.php");



			



			exit();



		}



		// If Customer found, redirect to Customer Page



		else{



			// If nothing found, redirect to Login Page



			session_start();



			$_SESSION['errmessage'] = 'Invalid Details. Please try again.';



		}



			header("Location:index.php");



}else{



	echo "Something went wrong.";



}



?>