
<!DOCTYPE HTML>
<html>
	<head>
		<link href="css/style.css" type="text/css" rel="stylesheet"/>
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<title> Bienvenue </title>
	</head>
	<body>
	<form method="post" action ="#">
		<p>
			<label for="pseudo">* Pseudo </label>
			<input type ="text" id="pseudo" name="pseudo" class="w3-input" maxlength="50" placeholder="Entrez votre Pseudo">
		</p>
		<p>
			<label for="pwd">* New Password </label>
			<input type ="password" class="w3-input" id="pwd" name="pwd" placeholder="Password">
		</p>
		<p>
			<label for="pwd1">* Confirm New Password </label>
			<input type ="password" class="w3-input" id="pwd1" name="pwd1" placeholder="Confirm Password">
		</p>
	<input type="submit" id="btn" name ="btn" class="btn" value="Se connecter" onclick="">
	</form>
		<?php 
		include_once("functions.php");
			if(isset($_POST['btn'])&& isset($_POST['pseudo']))
			{
				connect();
			}

			
		?>
	
	</body>
</html>

