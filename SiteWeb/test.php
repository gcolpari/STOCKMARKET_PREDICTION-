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
        <h1>Modèles d'IA</h1>
        <p>
            Dans cette page, vous allez pouvoir tester les 3 modèles qui ont été utilisés pour classer des tweets.
        </p>
    </header>

    <!-- le test -->
    <input type="text" id="textInput" placeholder="Entrez du texte">
    <button id="bttn" onclick="sendText()">Predict</button>
    <div id="ttt">
    <p id="rf"></p>
    <p id="lr"></p>
    <p id="nb"></p>
    </div>

    <script>
        async function sendText() {
        const text = document.getElementById("textInput").value;

        const response = await fetch("https://stockmarket-prediction-atgx.onrender.com/predict", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ text: text })
        });

        const raw = await response.text();

        console.log("STATUS:", response.status);
        console.log("RAW RESPONSE:", raw);

        let data;
        try {
            data = JSON.parse(raw);
        } catch (e) {
            console.error("PAS DU JSON !");
            return;
        }

        document.getElementById("rf").innerText = "Random Forest : " + data.rf;
        document.getElementById("lr").innerText = "Logistic Regression : " + data.lr;
        document.getElementById("nb").innerText = "Naive Bayes : " + data.nb;

        console.log(data);
    }
    </script>



</body>
</html>
