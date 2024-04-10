from fastapi import FastAPI

app = FastAPI()


@app.get("/fastapi")
def read_root():
    return {"FastAPI_status": "Works"}
