<?php
/* page de prédiction simple */

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
    <title>Prédiction</title>
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
        <h1>Résultat de prédiction</h1>
        <p>
            Cette page montre un exemple simple de résultat produit par le modèle.
        </p>
    </header>

    <!-- résultat -->
    <section>
        <h2>Résultat</h2>
        <p><strong>Variable prédite :</strong> <?php echo $variable; ?></p>
        <p><strong>Horizon :</strong> <?php echo $horizon; ?></p>
        <p><strong>Valeur prédite :</strong> <?php echo $prediction; ?></p>
    </section>

    <!-- interprétation -->
    <section>
        <h2>Interprétation</h2>
        <p><?php echo $interpretation; ?></p>
    </section>

    <!-- remarque -->
    <section>
        <h2>Remarque</h2>
        <p>
            Cette valeur est un exemple de présentation.
            Plus tard, cette page pourra être connectée au vrai modèle Python.
        </p>
    </section>

</body>
</html>