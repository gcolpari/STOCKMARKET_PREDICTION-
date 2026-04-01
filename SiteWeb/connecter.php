<?php
	session_start();
	
	$_SESSION['mail']=$_POST['mail'];
	$_SESSION['mdp']=$_POST['mdp'];
	echo '<html>';
	echo '<head>';
	if(isset($_SESSION['mail'])&&isset($_SESSION['mdp'])){
		require "bd.php";
		$bdd=getBD(); 
		$rep= $bdd->prepare("SELECT * FROM clients WHERE mail = ?");
		$rep->execute([$_SESSION['mail']]);
		$cli = $rep->fetch();                        																
		if(!$cli){echo '<meta http-equiv="refresh" content="0;connexion.php"/>';}
		if (password_verify($_SESSION['mdp'],$cli['mdp'])){
			$_SESSION['client']=$cli;
			echo '<meta http-equiv="refresh" content="0;index.php"/>';
			die;
		}else{
			echo '<meta http-equiv="refresh" content="0;connexion.php"/>';
			die;
		}
	} else{
		echo '<meta http-equiv="refresh" content="0;connexion.php"/>';
		die;
	}
	
	
	
	
	
	

?>



</head>

<body>
	<a href="nouveau.php">créer un nouveau compte</a>
</body>
</html>