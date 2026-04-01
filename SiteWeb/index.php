<?php
/* page principale */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Projet IA - Prédiction du marché</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- menu simple -->
    <nav>
        <a href="index.php">Accueil</a>
        <a href="visualisations.php">Visualisations</a>
        <a href="modele.php">Modèle</a>
        <a href="prediction.php">Prédiction</a>
		
		<!--Partie User, demander au prof si c'est nécéssaire sinon, supprimer-->
		<?php
			session_start();
			if(!isset($_SESSION['client'])){echo '<a href="connexion.php">User (voir si c nécéssaire)</a>';}
			else {echo '<a href="deconnexion.php">deconnexion</a>';}
		?>
		
    </nav>

    <!-- en-tête -->
    <header>
        <h1>Application web de prédiction du marché</h1>
        <p>
            Cette application présente notre projet de data science et de machine learning.
            Elle montre les données, les visualisations, le modèle et une prédiction simple.
        </p>
    </header>

    <!-- présentation du projet -->
    <section>
        <h2>Objectif du projet</h2>
        <p>
            L'objectif est d'étudier plusieurs données financières et économiques
            pour analyser le marché et produire une prédiction.
        </p>
    </section>

    <!-- données utilisées -->
    <section>
        <h2>Données utilisées</h2>
        <ul>
            <li>S&amp;P 500</li>
            <li>Inflation</li>
            <li>Bitcoin</li>
            <li>VIX</li>
            <li>Big Mac Index</li>
            <li>Tweets financiers</li>
        </ul>
    </section>

    <!-- résumé du site -->
    <section>
        <h2>Contenu du site</h2>
        <p>Le site contient quatre parties principales :</p>
        <ul>
            <li>une page d'accueil</li>
            <li>une page de visualisations</li>
            <li>une page de présentation du modèle</li>
            <li>une page de prédiction</li>
        </ul>
    </section>

</body>
</html>