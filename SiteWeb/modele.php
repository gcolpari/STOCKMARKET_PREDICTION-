<?php
	// Cette fichier présente le modèle utilisé et les modèles testés dans le projet
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Permet une bonne adaptation de la page sur téléphone et tablette -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page dans l’onglet du navigateur -->
	<title>Modèle</title>
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
			<!-- liens vers les autres pages du site -->
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
        <h1>Présentation du modèle</h1>
        <p>
            Cette page explique de manière simple le fonctionnement du modèle utilisé dans le projet.
        </p>
    </header>

    

    <!-- section qui présente les variables utilisées -->
    <section class="poliza">
        <h2>Variables utilisées</h2>
		<p>Le modèle s’appuie sur plusieurs variables économiques et financières pour produire sa prédiction.</p>
		<ul>
            <li>prix du marché</li>
            <li>inflation</li>
            <li>Bitcoin</li>
            <li>volatilité</li>
            <li>autres indicateurs économiques</li>
        </ul>
    </section>

    <!-- section qui liste les modèles testés dans le projet -->
    <section class="poliza">
        <h2>Modèles testés</h2>
			<p>Plusieurs approches ont été testées afin de comparer leurs performances </p>
		<ul>
            <li>baseline</li>
            <li>régression linéaire simple</li>
            <li>régression linéaire multiple</li>
            <li>réseau dense</li>
            <li>LSTM</li>
        </ul>
    </section>

    <!-- petite conclusion sur les résultats obtenus -->
    <section class="poliza">
        <h2>Conclusion simple</h2>
        <p>
            Dans notre projet, les modèles simples peuvent être plus faciles à interpréter que les modèles plus complexes.
        </p>
    </section>

</body>
</html>