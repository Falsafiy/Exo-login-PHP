
<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link href="css/style.css" rel="stylesheet">

		<title>Formulaire de connexion</title>
	</head>
	<body>
		<div class="centrer">
			<h1>Connexion</h1>
			<form method="post" action ="#">
				<fieldset>
					<div class="form-group">
						<label for="pseudo">* Pseudo </label>
						<input type ="text" id="pseudo" name="pseudo" class="form-control" maxlength="50" placeholder="Entrez votre Pseudo">
					</div>
					<div class="form-group">
						<label for="pwd">* Password </label>
						<input type ="password" id="pwd" class="form-control" name="pwd" placeholder="Password">
					</div>
				<input type="submit" id="btnco" name ="btnco" class="btn btn-info" value="Se connecter">
				</fieldset>
			</form>
		</div>
		<div class="lien">
			<a href="Bienvenue.php"> Mdp Oublie</a>
		
		<?php
		include_once("Controleur/Controleur.php");
		?>

	</body>
</html>

