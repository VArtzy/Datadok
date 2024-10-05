from fastapi import FastAPI, UploadFile, File
import io
import json
import numpy as np
from sumStats import analyze_csv
from fastapi.responses import JSONResponse

app = FastAPI()

def convert_numpy_types(results):
    if isinstance(results, dict):
        return {k: convert_numpy_types(v) for k, v in results.items()}
    elif isinstance(results, list):
        return [convert_numpy_types(v) for v in results]
    elif isinstance(results, np.integer):
        return int(results)
    elif isinstance(results, np.floating):
        return float(results)
    elif isinstance(results, np.ndarray):
        return results.tolist()
    else:
        return results

@app.post('/sum-stats')
async def sum_stats(file: UploadFile = File(...)):
    contents = await file.read()
    df = io.StringIO(contents.decode('utf-8'))

    results = analyze_csv(df)

    return JSONResponse(content=convert_numpy_types(results))
