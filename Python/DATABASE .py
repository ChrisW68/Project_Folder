import sqlite3

db = sqlite3.connect('myhtml.db')
cursor = db.cursor()
cursor.execute('''CREATE TABLE IF NOT EXISTS users(id INTEGER PRIMARY KEY, html TEXT)''')
db.commit()
db.close()
