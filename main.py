from fastapi import FastAPI
from pydantic import BaseModel
import pickle
from fastapi.middleware.cors import CORSMiddleware

app = FastAPI()

# CORS (pour autoriser ton site à appeler l'API)
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# Charger les modèles
with open("models.pkl", "rb") as f:
    models = pickle.load(f)

# Schéma de requête
class InputText(BaseModel):
    text: str

# Endpoint
@app.post("/predict")
def predict(data: InputText):
    results = {}

    for name in ["rf", "lr", "nb"]:
        clf, vectorizer, le = models[name]
        X = vectorizer.transform([data.text])
        y_pred = clf.predict(X)
        label = le.inverse_transform(y_pred)[0]
        results[name] = label

    return results