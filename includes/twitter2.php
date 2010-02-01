<div class="twitter_container">
<?php 
// require the twitter library
require "twitter.lib.php";

// your twitter username and password
$username = "MelissaSavcic";
$password = "mel2ssa";

// initialize the twitter class
$twitter = new Twitter($username, $password);

// fetch public timeline in xml format
$options = array('count' => 2);
$xml = $twitter->getUserTimeline($options);

$twitter_status = new SimpleXMLElement($xml);
foreach($twitter_status->status as $status){
foreach($status->user as $user){
echo '<img src="'.$user->profile_image_url.'" class="twitter_image">';
echo '<a href="http://www.twitter.com/MelissaSavcic">'.$user->name.'</a> ';
}
echo $status->text;
echo '<br/>';
echo '<br/>';
//echo '<div class="twitter_posted_at">Posted at:'.$status->created_at.'</div>';
}
echo '</div>';

?>


<img src="images/sidebar-bot.gif"></img>
