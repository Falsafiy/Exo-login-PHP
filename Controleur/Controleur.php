<?php
session_start();
error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);

require_once(__DIR__ . '/../functions.php');

$login = new Login();
	
	if(isset($_POST['btnco']))
	{

		$erreurs = array();
		$pseudo = $_POST['pseudo'];
		$pwd = $_POST['pwd'];
		if(empty($pseudo))
		{
			array_push($erreurs,"Pseudo manquant");
		}
		if(empty($pwd))
		{
			array_push($erreurs,"Password manquant");
		}
		if(count($erreurs) == 0)
		{
			$donnees = $login->getUser($pseudo);

			if(password_verify(($_POST['pwd']),$donnees['password'] ))
			{	

		
				
				$message = array();
    			foreach ($message as $mes) 
				{
					echo "<h2 style='color:blue;'>{$mes}</h2>";
				}

					$users = $login->getUsers();		
					$_SESSION['user']=$pseudo;
			
					foreach($users as $user)
					{
						if($pseudo == $user->user)
						{
							$idu = $user->idu;
							$nom=$user->nom;
							$prenom=$user->prenom;
							$mail=$user->mail;
							$_SESSION['idu']=$idu;
							$_SESSION['nom']=$nom;
							$_SESSION['prenom']=$prenom;
							$_SESSION['mail']=$mail;
							header("location:nav.php");
						}
					}
			}
		}	
		else 
		{
			foreach ($erreurs as $err) 
			{
				echo "<p style='color:red;'>{$err}</p>";
			}
		}
		
	}