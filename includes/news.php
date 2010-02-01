<?php  
require_once('rss/rss_fetch.inc');
$url = 'http://www.facebook.com/feeds/notes.php?id=85841569134&viewer=516939353&key=525101cd30&format=atom10';
//$url = 'http://www.facebook.com/feeds/notes.php?id=583400456&viewer=516939353&key=acef7f41a6&format=atom10';

$rss = fetch_rss($url);

echo "<h2>News</h2>";
echo "<ul>";
foreach($rss->items as $item) {
echo "<li>";	
echo "<h3>" , $item[title] , "</h3>\n";
echo "<h4>" , date("F j, Y, g:i a",strtotime(substr($item[updated], 0, 10).' '.substr($item[updated], 11, 8))) , "</h4>\n"; 
$new_string = ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]","<a href=\"\\0\" class='readmore' target='_blank'>\\0</a><br>", $item[summary]);
echo "<p>" , $new_string;
echo "<a href=\"" , $item[link_] , "\" class=\"readmore\" target=\"_blank\">(Read More)</a>"  , "</p>" ;
echo "\n</li>";
}
echo "\n</ul>";
?>
