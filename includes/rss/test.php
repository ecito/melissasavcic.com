<?php  
require_once('rss_fetch.inc');
$url = 'http://www.facebook.com/feeds/notes.php?id=85841569134&viewer=516939353&key=525101cd30&format=atom10';
$rss = fetch_rss($url);
echo "<pre>";
print_r($rss);
?>
