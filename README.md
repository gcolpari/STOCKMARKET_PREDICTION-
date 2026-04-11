# STOCKMARKET_PREDICTION-

# Introduction

L’objectif de ce projet est de prédire la performance du S&P 500 à l’aide de modèles d’apprentissage supervisé ainsi que de modèles de *deep learning* orientés *forecasting*. Le S&P 500 est un indice boursier de référence représentant les 500 plus grandes entreprises cotées aux États-Unis. Il est largement utilisé comme indicateur de la performance globale du marché financier.

Dans ce cadre, plusieurs jeux de données économiques et financiers sont mobilisés afin de construire des modèles capables de capturer les dynamiques temporelles et d’améliorer la qualité des prédictions. L’objectif est d’évaluer et de comparer différentes approches, allant des modèles statistiques classiques aux architectures neuronales avancées.

---

# Modèles

Les modèles suivants ont été implémentés et évalués :

## Modèles statistiques

* Régression linéaire simple
* Régression linéaire multiple
* Régression linéaire multiple intégrant l’inflation
* Régression linéaire multiple intégrant l’inflation et l’indice Big Mac

## Modèles de machine learning et deep learning

* Réseau de neurones dense (*Deep Neural Network – DNN*)
* Réseau de neurones récurrent de type LSTM (*Long Short-Term Memory*) unidirectionnel

---

# Arborescence du projet

```bash
├── outils/
│   └── Contient toutes les fonctions utilitaires du projet ainsi que la classe WindowGenerator utilisée pour l’entraînement des modèles.
│
├── BDD/
│   └── Base de données et sa description.
│
├── RAW_DATA/
│   └── Données brutes non traitées.
│
├── CLEAN_DATA/
│   └── Données après nettoyage et prétraitement.
│
├── SiteWeb/
│   └── Site web associé au projet.
│
├── models/
│   └── Modèles entraînés utilisés pour le déploiement.
│
├── AED.ipynb
│   └── Notebook d’analyse exploratoire des données (EDA).
│
├── cleaning.ipynb
│   └── Notebook de nettoyage et prétraitement des données.
│
├── Prediction.ipynb
│   └── Notebook d’entraînement des modèles et analyses de prédiction/statistiques.
│
├── requirements.txt
│   └── Dépendances Python nécessaires au projet.
│
└── LICENSE
    └── Licence du projet.

```

# Données

Le projet s’appuie sur plusieurs sources de données hétérogènes :

* Données historiques du S&P 500
* Données textuelles issues de tweets financiers
* Données comportementales liées aux marchés financiers
* Données sur les cryptomonnaies (Bitcoin et Ethereum)
* Indice des prix à la consommation (inflation)
* Indice Big Mac

## Sources

* https://github.com/datasets/s-and-p-500/blob/main/data/data.csv
* https://www.kaggle.com/datasets/davidwallach/financial-tweets
* https://www.kaggle.com/datasets/ziya07/financial-behavior
* https://www.kaggle.com/datasets/kapturovalexander/bitcoin-and-ethereum-prices-from-start-to-2023
* https://fred.stlouisfed.org/series/CPIAUCSL
* https://www.kaggle.com/datasets/vittoriogiatti/bigmacprice



-----------

# Installation 
```bash
git clone <https://github.com/gcolpari/STOCKMARKET_PREDICTION.git>
```

# Creation de un environment virtuelle 
On macOS
```bash
python -m venv venv
source venv/bin/activate
``` 
On Windows: 
```bash
python -m venv venv
venv\Scripts\activate
```
# Installer les dépendances
```bash
pip install -r requirements.txt
```

## Python:
Librairies utilisées pour le projet :  
- numpy  
- pandas  
- matplotlib
- seaborn
- mysql.connector
- tensorflow
- fastapi
- uvicorn
- scikit-learn

## Contributeur 

- Gabriel Estevez
  Conception de la base de données, modèles de forecasting et analyse exploratoire des données (AED).

- Santiago Roque
  Développement du site web, rédaction du compte rendu et BERTopic.

- Gabriel Colpari
  Modèles de forecasting, rédaction du compte rendu et analyse exploratoire des données (AED).

- Léandre Vignol
  Développement de l’API, modèle de classification de tweets et analyse exploratoire des données (AED).
