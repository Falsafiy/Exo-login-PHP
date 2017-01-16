<?php
session_start();
error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);


require_once(__DIR__ . '/../functions.php');


$erreurs = array();

		if(isset($_POST['btnin']))
			{
				$pseudo = $_POST['pseudo'];
				$pwd = $_POST['pwd'];
				$pwd1 = $_POST['pwd1'];
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$mail = $_POST['mail'];
				if(empty($pseudo) )
				{
					array_push($erreurs,"Pseudo manquant");
				}
				if(empty($pwd))
				{
					array_push($erreurs,"Password manquant");
				}
				if(empty($pwd1))
				{
					array_push($erreurs,"Confirm Password manquant");
				}
				if(empty($nom))
				{
					array_push($erreurs,"Nom manquant");
				}
				if(empty($prenom))
				{
					array_push($erreurs,"Prenom manquant");
				}
				if(empty($mail))
				{
					array_push($erreurs,"Mail manquant");
				}
				if($pwd != $pwd1 )
				{
					array_push($erreurs,"Password et confirm password different");
				}
				if(count($erreurs) == 0)
				{
					$register = new Inscription;
					$pwd = password_hash($pwd, PASSWORD_DEFAULT);
					$register->getRegister($pseudo,$pwd, $nom, $prenom, $mail);	
					//print_r($register);
					$_SESSION['user'] = $pseudo;


					
				    header("Location: http://localhost:8888/Nav.php");
					

				//	header('Location: http://www.google.com';

					
				}
				else
				{
					foreach ($erreurs as $err) 
					{
						echo "<p style='color:red;'>{$err}</p>";
					}
				}
			}
			?>