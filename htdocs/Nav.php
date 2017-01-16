<?php 
  session_start();
  require_once(__DIR__ . "/../functions.php");
  error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);


?>
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
    </div><!-- /.navbar-collapse -->
  </head><!-- /.container-fluid -->
</nav>
<body>
  <?php
  if($_SESSION['user']== NULL)
  {
    exit();
  }
  $login = new Login();
  $message = array();
    $users = $login->getUsers();
    echo "<h3 class= pull-left>Voici la liste des membres</h3>";?>
    <input type="button" name="Add" class="btn btn-secondary pull-right" value="+" onclick="self.location.href='Inscription.php'">
    <?php
    echo "<table class='table table-striped'>";
    echo "<thead>";
    echo"<th>Id</th>";
    echo"<th>Pseudo</th>";
    echo"<th>Nom</th>";
    echo"<th>Prenom</th>";
    echo"<th>Mail</th>";
    echo "</thead>";
    
    foreach($users as $user)
    {
      echo "<tr>";
      echo "<td>".$user->idu."</td>";
      echo "<td>".$user->user."</td>";
      echo "<td>".$user->nom."</td>";
      echo "<td>".$user->prenom."</td>";
      echo "<td>".$user->mail."</td>";
      echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>