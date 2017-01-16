<?php

require_once(__DIR__ . '/config/configuration.php');

class Db
{
	function connexion()
	 {
	 	$bdd = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD );
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $bdd;
	 }
}