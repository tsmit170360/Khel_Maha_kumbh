import sqlite3

conn = sqlite3.connect("sports_event.db")
cursor = conn.cursor()

cursor.execute("""
CREATE TABLE IF NOT EXISTS winning (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    player_id INTEGER NOT NULL,
    date TEXT NOT NULL,
    opponent TEXT NOT NULL,
    result INTEGER NOT NULL,
    FOREIGN KEY (player_id) REFERENCES players (id)
)
""")

conn.commit()
conn.close()
