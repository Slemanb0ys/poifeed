# poifeed
[![CodeFactor](https://www.codefactor.io/repository/github/sinkaroid/poifeed/badge)](https://www.codefactor.io/repository/github/sinkaroid/poifeed) [![](https://img.shields.io/pypi/v/colorama)](https://pypi.org/project/feedparser/) [![](https://img.shields.io/packagist/php-v/curl/curl)](https://packagist.org/packages/curl/curl)  

## NekopoiRSS
this case i using [nekopoi](https://nekopoi.care/ "nekopoi") with curl implementation,  
then how to make feed/rss from site that isn't yours?  
DBconnection or mySQL interface isn't needed  
simply, using curl and some regex to grep content or can adjust with [simplehtmldom](https://simplehtmldom.sourceforge.io/ "simplehtmldom") and read this code u'll get it.  
for now only mainindex, i'll update it with other parameter like genre,search,etc.  

## Implementation  
that code is trash as fuck but still readable with hooks/bot.  
u can implement the logic above to grep contents from other sites that isn't yours, just adjust at all.  

----

     $ pip install -r requirements.txt
     $ cd src && ./nino.py
