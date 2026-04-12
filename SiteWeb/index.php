<?php
	// Cette fichier correspond à la page d’accueil du site
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!-- Titre affiché dans l’onglet du navigateur -->
	<title>Stock Market Prediction</title>
	<!-- Lien vers le fichier CSS pour le style du site -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<!-- menu de navigation principal -->
<nav class="navbar">
    <div class="nav-container">
		<!-- logo du projet -->
        <div class="logo">
			<img src="images/logo.png">
			
		</div>
		<!-- liens de navigation vers les autres pages -->
        <div class="nav-links">
            <a href="index.php">Accueil</a>
            <a href="modele.php">Modèle</a>
            <a href="prediction.php">Prédiction</a>
            <a href="test.php">Tester des modèles</a>
        </div>

    </div>
</nav>


<!-- section principale de présentation -->
<header class="hero">

    <div class="hero-content">
		<!-- titre principal de la page -->
        <h1>
            Prédiction des earnings
        </h1>

    </div>

</header>



<!-- J’ai ajouté une présentation de l’objectif du projet -->
<section class="poliza">
    <h2>Objectif</h2>
    <p>
        Notre objectif est de comparer plusieurs modèles de machine learning afin d’estimer l’évolution 
		future des earnings à partir de données historiques et d’indicateurs financiers.
    </p>
</section>



<!-- section contenant les graphiques de résultats -->
<section class="poliza">

<h2>
Résultats des modèles
</h2>
<!-- grille qui contient toutes les images de résultats -->
<div class="results-grid">


<!-- résultat du modèle baseline sur l’entraînement -->
<div class="result-box">

<h3>
Baseline - Entraînement
</h3>

<img src="images/Baseline - Entraînement.png">

</div>



<!-- résultat du modèle linéaire multivariable sur l’entraînement -->
<div class="result-box">

<h3>
Linéaire multivariable - Entraînement
</h3>

<img src="images/Linéaire multivariable - Entraînement.png">

</div>


<!-- résultat du modèle linéaire multivariable sur le test -->
<div class="result-box">

<h3>
Linéaire multivariable - Test
</h3>

<img src="images/Linéaire multivariable - Test.png">

</div>


<!-- résultat du modèle linéaire multivariable sur la série complète -->
<div class="result-box">

<h3>
Linéaire multivariable - Série complète
</h3>

<img src="images/Linéaire multivariable - Série complète.png">

</div>



<!-- résultat du modèle linéaire univariable sur l’entraînement -->
<div class="result-box">

<h3>
Linéaire univariable - Entraînement
</h3>

<img src="images/Linéaire univariable - Entraînement.png">

</div>


<!-- résultat du modèle linéaire univariable sur le test -->
<div class="result-box">

<h3>
Linéaire univariable - Test
</h3>

<img src="images/Linéaire univariable - Test.png">

</div>


<!-- résultat du modèle linéaire univariable sur la série complète -->
<div class="result-box">

<h3>
Linéaire univariable - Série complète
</h3>

<img src="images/Linéaire univariable - Série complète.png">

</div>



<!-- résultat du modèle Dense sur l’entraînement -->
<div class="result-box">

<h3>
Dense - Entraînement
</h3>

<img src="images/Dense - Entraînement.png">

</div>


<!-- résultat du modèle Dense sur le test -->
<div class="result-box">

<h3>
Dense - Test
</h3>

<img src="images/Dense - Test.png">

</div>


<!-- résultat du modèle Dense sur la série complète -->
<div class="result-box">

<h3>
Dense - Série complète
</h3>

<img src="images/Dense - Série complète.png">

</div>



<!-- résultat du modèle LSTM sur l’entraînement -->
<div class="result-box">

<h3>
LSTM - Entraînement
</h3>

<img src="images/LSTM - Entraînement.png">

</div>


<!-- résultat du modèle LSTM sur la série complète -->
<div class="result-box">

<h3>
LSTM - Série complète
</h3>

<img src="images/LSTM - Série complète.png">

</div>



<!-- graphique du MSE sur l’entraînement -->
<div class="result-box">

<h3>
MSE - Entraînement
</h3>

<img src="images/MSE -- Entraînement.png">

</div>


<!-- graphique du MSE sur la validation -->
<div class="result-box">

<h3>
MSE - Validation
</h3>

<img src="images/MSE -- Validation.png">

</div>



<!-- courbe de loss du modèle linéaire multivariable -->
<div class="result-box">

<h3>
Loss - Linéaire multivariable
</h3>

<img src="images/Loss - Linéaire multivariable.png">

</div>


<!-- courbe de loss du modèle linéaire univariable -->
<div class="result-box">

<h3>
Loss - Linéaire univariable
</h3>

<img src="images/Loss - Linéaire univariable.png">

</div>


<!-- courbe de loss du modèle Dense -->
<div class="result-box">

<h3>
Loss - Dense
</h3>

<img src="images/Loss - Dense.png">

</div>


<!-- courbe de loss du modèle LSTM -->
<div class="result-box">

<h3>
Loss - LSTM
</h3>

<img src="images/Loss - LSTM.png">

</div>



</div>

</section>



</body>

</html>