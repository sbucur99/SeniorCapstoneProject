from threading import Thread
import json
from flask import request
from flask import Flask, render_template, redirect, abort, url_for, jsonify, session
import sys
from flask_cors import CORS, cross_origin
import os
import test1
app = Flask(__name__)

app.config['CORS_HEADERS'] = 'Content-Type'

CORS(app)
global response

# this receives answers from JS and process it through python then sends it back


@app.route("/api", methods=["POST"])
def process_data():
    labels = request.get_json()
    mode_result = test1.model(labels)
    result = {"message": f"{mode_result}"}
    response = jsonify(result)
    response.headers.add('Access-Control-Allow-Origin', '*')
    return response


if __name__ == "__main__":
    app.run(host="localhost", port=5000, debug=True)
