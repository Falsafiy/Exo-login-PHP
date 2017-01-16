<!Doctype HTML>
<html>
	<head>

		<link href="css/reset.css" type="text/css" rel="stylesheet"/>
    <link href="assets/mixins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
  	<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      <a class="navbar-brand" ><?php echo $_SESSION['nom']." "; echo $_SESSION['prenom']; ?></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php session_destroy();?> index.php">Deconnexion</a></li>
              <li role="separator" class="divider"></li>
            </ul>
          </li>
        </ul>
      </div>
    </div><!-- /.navbar-collapse --><!-- /.container-fluid -->
    </nav>
</head>