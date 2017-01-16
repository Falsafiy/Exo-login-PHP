<?php
session_start();
		require_once("../Controleur/Controle.php");
		
		?>
<!DOCTYPE HTML>
<html>
	<head>
		<link href="css/style.css" type="text/css" rel="stylesheet"/>
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link href="mixins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Formulaire d'inscription</title>
	</head>
	<body class="container">
		<div class="centrer">
		<form method="post" action ="#"  class="form-horizontal">
			
			<fieldset>
			<div class="form-group">
				<div class="col-sm-10">
					<label for="pseudo" class="control-label col-sm-2">Pseudo :</label>
					<input type ="text" id="pseudo" class="form-control" name="pseudo" maxlength="20" placeholder="Enter Pseudo">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
					<label for="pwd" > Password : </label>
					<input type ="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
				</div>
			</div>

			<div class="form-group">
					<label for="pwd1">Confirm Password :</label>
					<input type ="password" class="form-control" id="pwd1" name="pwd1" placeholder="Confirm Password">
			</div>
			<div class="form-group">
					<label for="nom" >Nom :</label>
					<input type ="text" id="nom" class="form-control" name="nom" maxlength="50" placeholder="Enter Name">
			</div>
			<div class="form-group">
					<label for="prenom">Prenom :</label>
					<input type ="text" id="prenom" class="form-control" name="prenom" maxlength="75" placeholder="Enter First Name">
			</div>
			<div class="form-group">
					<label for="mail" class="control-label col-sm-2">Mail :</label>
					<input type ="email" id="mail" class="form-control" name="mail" maxlength="100" placeholder="Enter @">
			</div>
				<input type="submit" id="btnin" class="btn btn-info" name ="btnin" value="S'inscrire">
			</fieldset>
		</form>
		</div>
		
	</body>
</html>