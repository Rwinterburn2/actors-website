from flask import Flask, render_template
from models import experience


app = Flask(__name__)

@app.route('/')
def index():
    data = experience()
    
    return render_template('index.html', **data)

@app.route('/resume')
def resume():
    data = experience()
    return render_template('resume.html', **data)

@app.route('/showreel')
def showreel():
    data = experience()
    return render_template('showreel.html', **data)

@app.route('/contact')
def contact():
    data = experience()
    return render_template('contact.html', **data)

@app.route('/Gallery')
def Gallery():
    return render_template('gallery.html')


if __name__ == '__main__':
    app.run(debug=True)