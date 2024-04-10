ARG PYTHON_VER=3.11

FROM python:${PYTHON_VER}-slim

WORKDIR /code

# RUN python -m pip install --upgrade pip
RUN pip install --no-cache-dir uvicorn fastapi

CMD ["uvicorn", "src.main:app", "--host", "0.0.0.0", "--port", "4321", "--reload"]
