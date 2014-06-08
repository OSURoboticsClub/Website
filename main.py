from flask import Flask, request, session, g, redirect, url_for, abort, render_template, flash
import time
from flask.ext.sqlalchemy import SQLAlchemy
from pprint import pprint
from datetime import datetime
import urllib2
import json
from bs4 import BeautifulSoup
import xmltodict


## SETUP
DEBUG = True
SECRET_KEY = 'development key'
USERNAME = 'admin'
PASSWORD = 'default'

application = Flask(__name__)
app = application
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///flaskr.db'
db = SQLAlchemy(app)
app.config.from_object(__name__)

app.config['SECRET_KEY'] = "deterministic"
app.config['TESTING'] = True

### Routing ###
@app.route('/')
def home():
    return render_template('index.html')

if __name__ == '__main__':
	#if not app.debug:
    import logging
    from logging.handlers import WatchedFileHandler
    file_handler = WatchedFileHandler('flask.log')
    formatter = logging.Formatter('%(asctime)s %(levelname)s %(message)s')
    file_handler.setFormatter(formatter)
    app.logger.addHandler(file_handler)
    app.logger.setLevel(logging.WARNING)
    app.run()