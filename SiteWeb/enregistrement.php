<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php
			$n=$_POST['n'];
			$p=$_POST['p'];
			$mail=$_POST['mail'];
			$mdp1=$_POST['mdp1'];
			$mdp2=$_POST['mdp2'];
			
			
			$lvar=[$n,$p,$mail,$mdp1,$mdp2];
			
			$bon = !in_array('', $lvar, true) && isset($n,$p,$mail,$mdp1,$mdp2);
			$mdpC= password_hash($mdp1,PASSWORD_DEFAULT);
			if ($bon&&
				$mdp1==$mdp2&&
				(strlen($mail)<=50)&&
				(strlen($mdp1)<=20)&&
				(strlen($mdp2)<=20)&&
				!preg_match('/[0-9]/', $n)&&
				!preg_match('/[0-9]/', $p)){
					enregistrer($n,$p,$mail,$mdpC);
					echo '<meta http-equiv="refresh" content="0;index.php"/>';
			} else {
				$url = 'nouveau.php?n='.urlencode($n).'&p='.urlencode($p).'&mail='.urlencode($mail);
				echo '<meta http-equiv="refresh" content="0;url='.$url.'"/>';
			}

			
			
			function enregistrer($n, $p, $mail, $mdpC) {
				require 'bd.php';
				$bdd = getBD();
				$rep = $bdd->prepare("INSERT INTO clients (nom, prenom, mail, mdp) VALUES (?,?,?,?);");
				$rep -> execute([$n,$p,$mail,$mdpC]);
			}
			
			

		?>
	</head>
	<body>

	</body>
</html>