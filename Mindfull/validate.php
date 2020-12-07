<?php
	$email = "";
	$password = "";

	$stored_email="abc@gmail.com";
	$stored_pwd ="1234";


    $errors['emailval']="";
    $errors['password']="";
    $errors['error']="";


	if (isset($_POST["login"])) {



		$email = $_POST["email"];
		$password = $_POST["pwd"];


		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$errors['emailval']="Enter valid email address ";
		}
		

		if (($email == $stored_email) && ($password == $stored_pwd)) {
			header("Location : event.php");
		} else{
				$errors['error']="Incorrect email or password";
		}
	}

?>