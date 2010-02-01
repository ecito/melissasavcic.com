<?php
require_once('rss/rss_fetch.inc');
$url = "http://vimeo.com/savcic/videos/rss";
$rss = fetch_rss($url);

// echo "<pre>";
// print_r($rss);

echo "<ul>";
foreach($rss->items as $item) {
	echo "<li>";
	ereg('<img.*/></a>',$item[description],$thumb);
	ereg('[0-9]+',$item[link],$id);
	ereg("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]",$thumb[0],$thumbed);
	$thumb_location = "./cache/".$id[0].".jpg";
	if(!file_exists($thumb_location)) {
		copy($thumbed[0],$thumb_location);
	}
	echo "<a href=\"includes/vimeo.php?id=$id[0]\" rel=\"facebox\"><img src=\"./cache/".$id[0].".jpg\" alt=\"".$item[title]."\" /></a>";
	echo "<p>" , $item[title] , "<p>\n";
	echo "\n</li>";
}
echo "\n</ul>";
?>
