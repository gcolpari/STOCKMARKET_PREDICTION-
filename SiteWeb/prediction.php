<?php

/* valeurs d'exemple */
$variable = "earnings";
$horizon = "30 jours";
$prediction = 128.45;
$interpretation = "Le modèle prévoit une légère augmentation de la valeur cible.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prédiction</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- barre de navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
				
				<img src="images/logo.png">
		
			</div>
            
			
			
			<div class="nav-links">
                <a href="index.php">Accueil</a>
                <a href="modele.php">Modèle</a>
                <a href="prediction.php">Prédiction</a>
            </div>
        </div>
    </nav>

    <!-- titre -->
    <header class="page-header">
        <h1>Résultat de prédiction</h1>
        <p>
            Cette page montre un exemple simple de résultat produit par le modèle.
        </p>
    </header>

    <!-- résultat -->
    <section class="poliza">
        <h2>Résultat</h2>
        <p><strong>Variable prédite :</strong> <?php echo $variable; ?></p>
        <p><strong>Horizon :</strong> <?php echo $horizon; ?></p>
        <p><strong>Valeur prédite :</strong> <?php echo $prediction; ?></p>
    </section>

    <!-- interprétation -->
    <section class="poliza">
        <h2>Interprétation</h2>
        <p><?php echo $interpretation; ?></p>
    </section>




</body>
</html>
