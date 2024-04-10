# from typing import Union
from fastapi import FastAPI

app = FastAPI()



@app.get("/fastapi")
def read_root():
  return {"FastAPI_status": "Works"}
@app.get("/fastapi/subpage")
def read_root():
  return {"Page": "subpage"}




# @app.get("/items/{item_id}")
# def read_item(item_id: int, q: Union[str, None] = None):
#     return {"item_id": item_id, "q": q}