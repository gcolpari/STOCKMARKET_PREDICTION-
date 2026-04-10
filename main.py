from fastapi import FastAPI
from fastapi.middleware.cors import CORSMiddleware
import pickle
import os

app = FastAPI()

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

with open("models.pkl", "rb") as f:
    models = pickle.load(f)

@app.post("/predict")
def predict(input: InputText):
    results = {}

    for name in models:
        clf, vectorizer, le = models[name]

        X = vectorizer.transform([text])
        y_pred = clf.predict(X)
        label = le.inverse_transform(y_pred)[0]

        results[name] = label

    return results

if __name__ == "__main__":
    import uvicorn
    port = int(os.environ.get("PORT", 8000))
    uvicorn.run(app, host="0.0.0.0", port=port)
