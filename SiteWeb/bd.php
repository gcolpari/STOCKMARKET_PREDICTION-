<?php
	function getBD(){
		$bdd = new PDO('mysql:host=localhost;dbname=sdd4;charset=utf8','root','root');
		return $bdd;
	}
?>