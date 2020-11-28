<?php 

include "../app/app.php";



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
	
		<form action="../auth" method="POST">
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
				<input type="hidden" name="token" value="<?=$_SESSION['token']?>">
		</fieldset>

		</form>	
		



		<form action="../auth" method="POST">

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
				<input type="hidden" name="token" value="<?=$_SESSION['token']?>">
			</fieldset>


		</form>
		
	
</body>
</html>