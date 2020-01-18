#!python
#!C:\Python37\python.exe
import requests
from colorama import Fore, Style
import feedparser
import webbrowser

print(Fore.RED)
print("""
            _     ___              _ 
 _ __   ___| | __/ _ \ _ __   ___ (_)
| '_ \ / _ \ |/ / | | | '_ \ / _ \| |
| | | |  __/   <| |_| | |_) | (_) | |
|_| |_|\___|_|\_||___/| .__/ \___/|_|
                      |_|          
                      PoiRSS - Simplefeed creator, sin""")
print(Style.RESET_ALL)
print ("index:\n")

feed = feedparser.parse("http://www.getwritershelp.com/poi.php")

feed_entries = feed.entries

for entry in feed.entries:

    article_title = entry.title
    article_link = entry.link
    
    content = entry.summary
    print ("{} -> [{}]".format(Fore.GREEN + article_title, Fore.BLUE+article_link + Style.RESET_ALL))
 