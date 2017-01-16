<?php

require_once(__DIR__ . '/config/configuration.php');


class Login
{
	private $bdd;

	function connexion()
	 {
	 	$bdd = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD );
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $bdd;
	 }

	 function getUser($pseudo)
	 {
	 	$this->bdd = $this->connexion();
		$req= $this->bdd->prepare('select password from users where user = :pseudo');
		$req->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
		$req->execute();

		return $req->fetch();
	 }

	 function getUsers()
	 {

		$this->bdd = $this->connexion();
	 	$req= $this->bdd->prepare('select * from users');


		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
	 }
}

class Inscription
{
	private $bdd;

	function connexion()
	 {
	 	$bdd = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD );
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $bdd;
	 }
	 function verify($pseudo)
	 {
	 	$this->bdd = $this->connexion();
	 	$req=$this->bdd ->prepare('Select * from users where user = :pseudo');
		$req->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
		$req ->execute();
		$donnees=$req->fetchAll();
		return count($donnees);
	 }

	 function getRegister($pseudo, $pwd, $nom, $prenom, $mail)
	 {
	 	$erreurs= array();
	 	$donnees=$this->verify($pseudo);
	 	if($donnees)
		{
			array_push($erreurs,"Pseudo existe deja");
			foreach ($erreurs as $err) 
			{
				echo "<p style='color:red;'>{$err}</p>";
			}
		}
		else
		{		
	 	$this->bdd = $this->connexion();
	 	$req=$this->bdd->prepare("Insert into users(user,password,nom, prenom, mail) values (?,?,?,?,?)");
		$req->bindParam(1, $pseudo);
		$req->bindParam(2, $pwd);
		$req->bindParam(3, $nom);
		$req->bindParam(4, $prenom);
		$req->bindParam(5, $mail);
		$req->execute();
		}
		//$donnees=$req->fetchAll();
		//return count($donnees);
	 }

	/* function getUsers()
	 {

		$this->bdd = $this->connexion();
	 	$req= $this->bdd->prepare('select * from users');


		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
	 }*/

}
/*class Inscription 
{
	private $pseudo;
	private $password;
	private $nom;
	private $prenom;
	private $mail;

	public function verifpseudo($pseudo)
	{
		if(empty($pseudo) )
		{
			array_push($erreurs,"Pseudo manquant");
		}
		$bdd=Connexion();
		$req=$bdd ->prepare('Select * from users where user = :pseudo');
		$req->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
		$req ->execute();
		$donnees=$req->fetchAll();
		if(count($donnees) == 1)
		{
			array_push($erreurs,"Pseudo existe deja");
		}
		if(count($erreurs) == 0)
		{
			$this->pseudo = $pseudo;
		}	
	}

}*/
function connexion()
 {
 	$bdd = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD );
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	return $bdd;
 }

 function Modif()
{
	$pseudo=$_POST['pseudo'];
	$pwd = $_POST['pwd'];
	$pwd1 = $_POST['pwd1'];
	
	if(empty($pwd))
	{
		array_push($erreurs,"Password manquant");
	}
	if(empty($pwd1))
	{
		array_push($erreurs,"Confirm Password manquant");
	}
	if($pwd != $pwd1 )
	{
		array_push($erreurs,"Password et confirm password different");
	}
	if(count($erreurs) == 0)
	{
		$pwd = password_hash($pwd, PASSWORD_DEFAULT);
		$bdd=connexion();
		$req=$bdd->prepare("update `users` set `password` ='{$pwd}' where `user = '{$pseudo}'");
		$req->execute();
		
	}
	else
	{
		foreach ($erreurs as $err) 
		{
			echo "<p style='color:red;'>{$err}</p>";
		}
	}
}

function Seconnecter()
{
	$bdd =connexion();
	$req=$bdd ->prepare('Select password from users where user = :pseudo');
	$req->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
	$req ->execute();
	$donnees=$req->fetch();
	return $donnees;
}

function Listemembre()
{
	$bdd =connexion();
	$req= $bdd->prepare('Select * from users');
	$req->execute();
	return $req->etchAll(PDO::FETCH_OBJ);
} 
?>