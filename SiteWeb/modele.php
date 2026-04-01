<?php
/* page de présentation du modèle */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modèle</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- menu -->
    <nav>
        <a href="index.php">Accueil</a>
        <a href="visualisations.php">Visualisations</a>
        <a href="modele.php">Modèle</a>
        <a href="prediction.php">Prédiction</a>
    </nav>

    <header>
        <h1>Présentation du modèle</h1>
        <p>
            Cette page explique de manière simple le fonctionnement du modèle.
        </p>
    </header>

    <!-- description -->
    <section>
        <h2>Principe général</h2>
        <p>
            Le modèle reçoit des données historiques en entrée.
            Ensuite, il apprend des relations entre les variables.
            Enfin, il produit une estimation de la variable cible.
        </p>
    </section>

    <!-- variables -->
    <section>
        <h2>Variables utilisées</h2>
        <ul>
            <li>prix du marché</li>
            <li>inflation</li>
            <li>Bitcoin</li>
            <li>volatilité</li>
            <li>autres indicateurs économiques</li>
        </ul>
    </section>

    <!-- modèles testés -->
    <section>
        <h2>Modèles testés</h2>
        <ul>
            <li>baseline</li>
            <li>régression linéaire simple</li>
            <li>régression linéaire multiple</li>
            <li>réseau dense</li>
            <li>LSTM</li>
        </ul>
    </section>

    <!-- conclusion -->
    <section>
        <h2>Conclusion simple</h2>
        <p>
            Dans notre projet, les modèles simples peuvent être plus stables
            et plus faciles à interpréter que les modèles plus complexes.
        </p>
    </section>

</body>
</html>