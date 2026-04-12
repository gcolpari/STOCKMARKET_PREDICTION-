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
				<a href="test.php">Tester des modèles</a>
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

    <!-- Mis à jour de cette partie: J’ai réorganisé cette partie pour montrer la prédiction et pour faire un desing plus moderne de la page -->
	<section class="poliza prediction-highlight">
		<h2>Résultat principal</h2>
		<div class="prediction-value"><?php echo $prediction; ?></div>
		<p class="prediction-subtitle">
			Prévision de <strong><?php echo $variable; ?></strong> sur un horizon de <strong><?php echo $horizon; ?></strong>.
		</p>
	</section>

	<!-- Mis à jour : J’ai ajouté des blocs séparés pour que les informations soient plus claires -->
	<section class="poliza">
		<h2>Détails de la prédiction</h2>

		<div class="prediction-grid">
			<div class="info-box">
				<span class="info-label">Variable prédite</span>
				<span class="info-value"><?php echo $variable; ?></span>
			</div>

			<div class="info-box">
				<span class="info-label">Horizon</span>
				<span class="info-value"><?php echo $horizon; ?></span>
			</div>

			<div class="info-box">
				<span class="info-label">Valeur prédite</span>
				<span class="info-value"><?php echo $prediction; ?></span>
			</div>
		</div>
	</section>

	<!-- Interprétation simple  -->
	<section class="poliza interpretation-box">
		<h2>Interprétation</h2>
		<p><?php echo $interpretation; ?></p>
	</section>



</body>
</html>