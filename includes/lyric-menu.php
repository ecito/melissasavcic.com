<?php
$song=$_GET['song'];
?>

<ul id="lyrics-left">
    <li class="rue <?php if ($song == 'rue' || !$song) echo " selected" ?>"><a href="lyrics.php?song=rue">Rue</a></li>
    <li class="seasapart <?php if ($song == 'seasapart') echo " selected" ?>"><a href="lyrics.php?song=seasapart">Seas Apart</a></li>
    <li class="holdon <?php if ($song == 'holdon') echo " selected" ?>"><a href="lyrics.php?song=holdon">Hold on</a></li>
    <li class="whatif <?php if ($song == 'whatif') echo " selected" ?>"><a href="lyrics.php?song=whatif">What If</a></li>
    <li class="feedyoursoul <?php if ($song == 'feedyoursoul') echo " selected" ?>"><a href="lyrics.php?song=feedyoursoul">Feed Your Soul</a></li>
    <li class="lifewithyou <?php if ($song == 'lifewithyou') echo " selected" ?>"><a href="lyrics.php?song=lifewithyou">Life With You</a></li>
    <li class="sweetsong <?php if ($song == 'sweetsong') echo " selected" ?>"><a href="lyrics.php?song=sweetsong">Sweet Song</a></li>
    <li class="lookingback <?php if ($song == 'lookingback') echo " selected" ?>"><a href="lyrics.php?song=lookingback">Looking Back</a></li>

</ul>

<div class="lyrics-right">

            <div id="rue" <?php if ($song == 'rue' || !$song)  echo " class=\"show\""; echo ">"; include 'lyrics/rue.php' ?> </div>
            <div id="seasapart" <?php if ($song == 'seasapart')  echo " class=\"show\""; echo ">"; include 'lyrics/seasapart.php' ?> </div>
            <div id="holdon" <?php if ($song == 'holdon')  echo " class=\"show\""; echo ">"; include 'lyrics/holdon.php' ?> </div>
            <div id="whatif" <?php if ($song == 'whatif')  echo " class=\"show\""; echo ">"; include 'lyrics/whatif.php' ?> </div>
            <div id="feedyoursoul" <?php if ($song == 'feedyoursoul')  echo " class=\"show\""; echo ">"; include 'lyrics/feedyoursoul.php' ?> </div>
            <div id="lifewithyou" <?php if ($song == 'lifewithyou')  echo " class=\"show\""; echo ">"; include 'lyrics/lifewithyou.php' ?> </div>
            <div id="sweetsong" <?php if ($song == 'sweetsong')  echo " class=\"show\""; echo ">"; include 'lyrics/sweetsong.php' ?> </div>
            <div id="lookingback" <?php if ($song == 'lookingback')  echo " class=\"show\""; echo ">"; include 'lyrics/lookingback.php' ?> </div>
</div>
