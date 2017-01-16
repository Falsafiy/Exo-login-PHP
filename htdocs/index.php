<?php
	require_once(__DIR__ . "/../Controllers/Controleur.php");
	include("layout/header_classic.php");
?>
	<body>
		<div class="centrer">
			<h1>Connexion</h1>
			<form method="post" action ="login.php">
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
		</div>
	</body>
	<?php
		include("layout/footer.php");
	?>
</html>

