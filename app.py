from flask import Flask, render_template
from models import software


app = Flask(__name__)

@app.route('/')
def index():
    data = software()
    return render_template('index.html', **data)

@app.route('/resume')
def resume():
    data = software()
    return render_template('resume.html', **data)

@app.route('/showreel')
def showreel():
    data = software()
    return render_template('showreel.html', **data)

@app.route('/contact')
def contact():
    data = software()
    return render_template('contact.html', **data)


if __name__ == '__main__':
    app.run(debug=True)