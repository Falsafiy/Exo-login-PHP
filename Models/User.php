<?php

class User
{
	private $bdd;

	function init($bdd)
	{
		if (isset($bdd))
		{
			$this->bdd = $bdd;
		}
		else
		{
			throw new Exception('Paramètre BDD manquant');
			return false;
		}
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

	 function checkIfUserExist($pseudo)
	 {
	 	$this->bdd = $this->connexion();
	 	$req=$this->bdd ->prepare('Select * from users where user = :pseudo');
		$req->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
		$req ->execute();
		$donnees=$req->fetchAll();
		return count($donnees);
	 }

	 /*
	 	Create new user
	 	
		@peusdo String: user alis
		@pwd String: user password
		@
	 */
	 function createUser($pseudo, $pwd, $nom, $prenom, $mail)
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
}