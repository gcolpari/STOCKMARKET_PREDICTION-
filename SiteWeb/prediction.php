<?php


// Valeurs d’exemple utilisées pour afficher un résultat de prédiction
$variable = "earnings";
$horizon = "30 jours";
$prediction = 128.45;
$interpretation = "Le modèle prévoit une légère augmentation de la valeur cible.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Permet d’adapter la page aux écrans plus petits -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre affiché dans l’onglet -->
	<title>Prédiction</title>
	<!-- Lien vers le fichier CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- barre de navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <!-- logo du site -->
			<div class="logo">
				
				<img src="images/logo.png">
		
			</div>
            
			
			<!-- liens vers les principales pages -->
			<div class="nav-links">
                <a href="index.php">Accueil</a>
                <a href="modele.php">Modèle</a>
                <a href="prediction.php">Prédiction</a>
            </div>
        </div>
    </nav>

    <!-- en-tête de la page -->
    <header class="page-header">
        <h1>Résultat de prédiction</h1>
        <p>
            Cette page montre un exemple simple de résultat produit par le modèle.
        </p>
    </header>

    <!-- section qui affiche le résultat principal -->
    <section class="poliza">
        <h2>Résultat</h2>
        <p><strong>Variable prédite :</strong> <?php echo $variable; ?></p>
        <p><strong>Horizon :</strong> <?php echo $horizon; ?></p>
        <p><strong>Valeur prédite :</strong> <?php echo $prediction; ?></p>
    </section>

    <!-- section qui donne une petite interprétation du résultat -->
    <section class="poliza">
        <h2>Interprétation</h2>
        <p><?php echo $interpretation; ?></p>
    </section>




</body>
</html>
