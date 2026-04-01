<?php
	session_start();
?>

<html>
<body>
	<form id="ff" method="post" action="connecter.php" autocomplete="off">
	
		Adresse Mail: <INPUT type="text" name="mail" value=""><br>
		
		Mot De Passe: <INPUT type="password" name="mdp" value=""/><br>
				
		<INPUT type="submit" value="Envoyer">
	</form>
	
	
	<a href="nouveau.php">nouveau client</a>
	<a href="index.php">acceuil</a>
</body>
</html>