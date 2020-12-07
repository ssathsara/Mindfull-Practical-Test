

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	
</head>
<body>
	<div class="bg_model">
		<div class="modal-content">
			<div class="logo">
				<img src="Images/logo.png" class="img-logo">
			</div>
			<div class="login-form">
				<?php include "validate.php"; ?>  

				<form method="POST">
	                <label><?php echo $errors['error']; ?> </label><br>
	                <label><?php echo $errors['emailval']; ?> </label>
					<input type="text" name="email" placeholder="Email" required><br>
					<input type="password" name="pwd" placeholder="Password" required><br>
					<input type="checkbox" name="ok" value=""><p style="float: left; margin-top: 20px;">Remember me</p><br>

					<input type="submit" name="login" value="LOGIN">

				</form>		
			</div>
			
			<div class="footer-form">
				<p><a href="#" class="forgot">Forgot password</a></p>
			
				<p>Don't Have an Account?<a href="#">Sign up</a></p>
			</div>		
		</div>
	</div>

</body>
</html>

