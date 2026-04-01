<?php
/* page des graphiques */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Visualisations</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        <h1>Visualisations</h1>
        <p>
            Cette page montre quelques graphiques simples pour illustrer l'analyse.
        </p>
    </header>

    <!-- premier graphique -->
    <section>
        <h2>Évolution du S&amp;P 500</h2>
        <p>
            Ce graphique montre une évolution simplifiée de l'indice S&amp;P 500.
        </p>
        <canvas id="graphiqueSP500"></canvas>
    </section>

    <!-- deuxième graphique -->
    <section>
        <h2>Évolution de l'inflation</h2>
        <p>
            Ce graphique montre une évolution simplifiée du taux d'inflation.
        </p>
        <canvas id="graphiqueInflation"></canvas>
    </section>

    <!-- troisième graphique -->
    <section>
        <h2>Évolution du Bitcoin</h2>
        <p>
            Ce graphique montre une évolution simplifiée du prix du Bitcoin.
        </p>
        <canvas id="graphiqueBitcoin"></canvas>
    </section>

    <script>
        /* données simples pour le premier graphique */
        const labels1 = ["Jan", "Fév", "Mar", "Avr", "Mai", "Juin"];
        const dataSP500 = [4200, 4280, 4350, 4300, 4420, 4500];

        new Chart(document.getElementById("graphiqueSP500"), {
            type: "line",
            data: {
                labels: labels1,
                datasets: [{
                    label: "S&P 500",
                    data: dataSP500,
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                responsive: true
            }
        });

        /* données simples pour le deuxième graphique */
        const labels2 = ["Jan", "Fév", "Mar", "Avr", "Mai", "Juin"];
        const dataInflation = [5.2, 5.0, 4.8, 4.6, 4.4, 4.3];

        new Chart(document.getElementById("graphiqueInflation"), {
            type: "bar",
            data: {
                labels: labels2,
                datasets: [{
                    label: "Inflation",
                    data: dataInflation,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });

        /* données simples pour le troisième graphique */
        const labels3 = ["Jan", "Fév", "Mar", "Avr", "Mai", "Juin"];
        const dataBitcoin = [38000, 40000, 39500, 42000, 45000, 47000];

        new Chart(document.getElementById("graphiqueBitcoin"), {
            type: "line",
            data: {
                labels: labels3,
                datasets: [{
                    label: "Bitcoin",
                    data: dataBitcoin,
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>

</body>
</html>