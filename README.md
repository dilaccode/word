# STOP, move to develop [WORD LIKE GAME](https://github.com/dilaccode/word-like-game)
1. this project:
  - complete click word on **mean**.
# [Test SITE](http://localhost/public)
# Software
[download all](https://www.dropbox.com/sh/sqtmrit7bmr8auu/AABm4R-uSwsFZZF2L0ERUahKa?dl=1)
# HOW CONNECT GITHUB - VSCODE
## setting account
1. open terminal
2. run command:<br>
git config --global user.email "congtk1992@gmail.com" <br>
git config --global user.name "dilaccode"
## clone code, db to XAMPP folder
run command on Terminal (any location):<br>
```bash
cd c:\ & RMDIR "C:\xampp\htdocs" /S /Q & MKDIR C:\xampp\htdocs & cd C:\xampp\htdocs & git clone https://github.com/dilaccode/word.git . & C:\xampp\mysql\bin\mysql.exe --user=root --password= --host=localhost --port=3306 < "C:\xampp\htdocs\database\word_database.sql"
```
run again if **fail**
# database , backup work
bk database,  commit code, db to git
```bash
C:\xampp\mysql\bin\mysqldump.exe --user=root --password= --host=localhost --port=3306 --result-file="C:\xampp\htdocs\database\word_database.sql" --databases "word" & git add -A & git commit -m "work backup: code, db" & git push
```
# Relate project
[Word count idea](https://github.com/quangcongvn/word-count)
# test zone
12
