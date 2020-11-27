<?php 

if(!isset($_SESSION)){
	session_start();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login
	</title>
	<style type="text/css">
		fieldset{

		}
	</style>
</head>
<body>
	
		<form action="../app/authController.php" method="POST">
			<fieldset>
				<legend>
					Access in your account
				</legend>
				<label>
					Email
				</label>
				<input type="email" name="email" required="">
				<br>
				<label>
					Password
				</label>
				<input type="password" name="password" required="">
				<br>
				<button type="submit">
					Access
				</button>
				<input type="hidden" name="action" value="login">
		</fieldset>

		</form>	
		



		<form action="../app/authController.php" method="POST">

			<fieldset>
				<legend>
					Refister
				</legend>

				<label>
					name
				</label>
				<input type="text" name="name" required="">
				<br>
				<label>
					Email
				</label>
				<input type="email" name="email" required="">
				<br>
				<label>
					Password
				</label>
				<input type="password" name="password" required="">
				<br>
				<button type="submit">
					Save
				</button>
				<input type="hidden" name="action" value="register">
			</fieldset>


		</form>
		
	
</body>
</html>