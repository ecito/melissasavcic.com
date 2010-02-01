<?php
require_once('rss/rss_fetch.inc');

$url = 'http://www.reverbnation.com/controller/rss/artist_shows_rss/melissasavcic';

$rss = fetch_rss($url);

echo "<ul>";
foreach($rss->items as $item) {
echo "<li>";	
echo "<h2>" , $item[title] , "</h2>\n";
echo "<h3>" , $item[venue] , " - " , $item[address] , "</h3>\n"; 
echo "<p>" , $item[note];
echo "<p>Ticket price: " , $item[show_price];
echo "\n</li>";
}
echo "\n</ul>";
