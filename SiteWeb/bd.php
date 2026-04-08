<?php
	// Fonction pour se connecter à la base de données
	function getBD(){
		// Connexion à la base sdd4 en local
		$bdd = new PDO('mysql:host=localhost;dbname=sdd4;charset=utf8','root','root');
		// Retour de la connexion
		return $bdd;
	}
?>
