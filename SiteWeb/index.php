<?php

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Stock Market Prediction</title>

    <link rel="stylesheet" href="styles.css">
</head>

<body>

<!-- menu -->
<nav class="navbar">
    <div class="nav-container">

        <div class="logo">
            Stock Market Prediction
        </div>

        <div class="nav-links">
            <a href="index.php">Accueil</a>
            <a href="modele.php">Modèle</a>
            <a href="prediction.php">Prédiction</a>
        </div>

    </div>
</nav>


<!-- introduction -->
<header class="hero">

    <div class="hero-content">

        <h1>
            Prédiction des earnings
        </h1>

        <p>
            Cette application web présente notre projet de data science.
            L'objectif est de prédire la variable <strong>earnings</strong>
            à partir de plusieurs indicateurs financiers.
        </p>

    </div>

</header>



<!-- description -->
<section class="card">

    <h2>
        Objectif
    </h2>

    <p>
        Nous utilisons plusieurs modèles de machine learning pour prédire
        les earnings futurs à partir des données historiques du marché.
    </p>

</section>



<!-- graphiques -->
<section class="card">

<h2>
Résultats des modèles
</h2>

<div class="results-grid">


<!-- baseline -->
<div class="result-box">

<h3>
Baseline - Entraînement
</h3>

<img src="images/Baseline - Entraînement.png">

</div>



<!-- linear -->
<div class="result-box">

<h3>
Linéaire multivariable - Entraînement
</h3>

<img src="images/Linéaire multivariable - Entraînement.png">

</div>



<div class="result-box">

<h3>
Linéaire multivariable - Test
</h3>

<img src="images/Linéaire multivariable - Test.png">

</div>



<div class="result-box">

<h3>
Linéaire multivariable - Série complète
</h3>

<img src="images/Linéaire multivariable - Série complète.png">

</div>



<!-- linear univariable -->
<div class="result-box">

<h3>
Linéaire univariable - Entraînement
</h3>

<img src="images/Linéaire univariable - Entraînement.png">

</div>



<div class="result-box">

<h3>
Linéaire univariable - Test
</h3>

<img src="images/Linéaire univariable - Test.png">

</div>



<div class="result-box">

<h3>
Linéaire univariable - Série complète
</h3>

<img src="images/Linéaire univariable - Série complète.png">

</div>



<!-- dense -->
<div class="result-box">

<h3>
Dense - Entraînement
</h3>

<img src="images/Dense - Entraînement.png">

</div>



<div class="result-box">

<h3>
Dense - Test
</h3>

<img src="images/Dense - Test.png">

</div>



<div class="result-box">

<h3>
Dense - Série complète
</h3>

<img src="images/Dense - Série complète.png">

</div>



<!-- lstm -->
<div class="result-box">

<h3>
LSTM - Entraînement
</h3>

<img src="images/LSTM - Entraînement.png">

</div>



<div class="result-box">

<h3>
LSTM - Série complète
</h3>

<img src="images/LSTM - Série complète.png">

</div>



<!-- mse -->
<div class="result-box">

<h3>
MSE - Entraînement
</h3>

<img src="images/MSE -- Entraînement.png">

</div>



<div class="result-box">

<h3>
MSE - Validation
</h3>

<img src="images/MSE -- Validation.png">

</div>



<!-- loss -->
<div class="result-box">

<h3>
Loss - Linéaire multivariable
</h3>

<img src="images/Loss - Linéaire multivariable.png">

</div>



<div class="result-box">

<h3>
Loss - Linéaire univariable
</h3>

<img src="images/Loss - Linéaire univariable.png">

</div>



<div class="result-box">

<h3>
Loss - Dense
</h3>

<img src="images/Loss - Dense.png">

</div>



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
