<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="styles/style1.css">
	</head>
	<body>
	
		<form id="f" action="enregistrement.php" method="post" autocomplete="off">
			<INPUT class="1" type="text" name="n" value="<?php echo htmlspecialchars($_GET['n']);?>"placeholder="nom"><br><br>
			
			<INPUT class="2" type="text" name="p" value="<?php echo htmlspecialchars($_GET['p']);?>"placeholder="prenom"><br><br>
			
			<INPUT class="4" type="text" name="mail" value="<?php echo htmlspecialchars($_GET['mail']);?>" placeholder="mail ex: abs@mail.com"><br><br>
			
			<INPUT type="password" name="mdp1" value=""placeholder="mot de passe"/><br><br>
			
			<INPUT type="password" name="mdp2" value=""placeholder="confirmez le mot de passe"/><br><br>
			
			<INPUT type="submit" value="Envoyer">
		</form>
		
		<a href="index.php">retour</a>
		
	</body>
</html>