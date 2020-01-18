<?php
header('Content-Type: text/xml');
$site = 'https://poi.sinxdr.workers.dev';
$dog = file_get_contents('https://pastebin.com/raw/6vQu04pp'); 
echo $dog; //randombrain heheh, u can use your own rss template maybe

$curl = curl_init($site); //unlocked country, or your own scraper?
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
curl_close($curl);

function sed($text)
{
    $sed = $text;
	$sed = str_replace('-', ' ', $sed);
	$sed = str_replace('/', '', $sed);
    return $sed; //str inject, use this when matching str, to rm some char like '/','=',':', etc
}

//for now only main index, nexttime i make other parameter like search,genre,etc
$regex = '/<div id="boxid">(.*?)<h2 class="screen-reader-text">/s';
if ( preg_match($regex, $page, $list) )	
preg_match_all('#<h2><a href="(.*?)">#', $page, $match);
foreach($match[1] as $judul)

   {

echo "<item>
<guid>$judul</guid>"; //grepguid
echo "
<link>$site$judul</link>"; //greplink
echo "
<title>",strtoupper(sed($judul)),"</title>"; //greptitle
echo "
<description>",strtoupper(sed($judul)),"</description>"; //grepdescription

$jembot = file_get_contents($site.$judul); //grepimg
preg_match_all('#srcset="(.*?) 300w#', $jembot, $m); 
foreach($m[1] as $ga)

echo'
<image>',$site.$ga,'</image>';
echo'
<pubDate>Fri, 17 Jan 2020 21:38:16 +0000</pubDate>
</item>'; //timestamp isn't correct, but still valid, next i'll adjust it

   }
print '</channel></rss>';
?>