<?php exec("ls content/slides/big |grep jpg",$bigies);
foreach($bigies as $big) {
	if (!file_exists("content/slides/" . $big)) {
		exec("convert -resize 200x300! content/slides/big/" . $big . " content/slides/" . $big);
	}
} 
exec("ls content/slides |grep jpg",$slides); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<title>melissa savčić :: home</title>
	<meta http-equiv="Content-Language" content="en-us" />
	
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	
	<meta name="description" content="Melissa Savcic is an alternative rock pop musician based in Houston, TX" />
	<meta name="keywords" content="alternative rock pop acoustic melissa savcic chris garver craig nelson houston texas" />
	
	<meta name="author" content="Andre Navarro" />
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/custom.js" type="text/javascript"></script>
	<script src="js/jquery.juitter.js" type="text/javascript"></script>
	<script src="js/system.js" type="text/javascript"></script>
	<script src="js/jquery.history_remote.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.easyslider.1.5.js"></script>
	<script type="text/javascript" src="js/custom-slide.js"></script>
	<script type="text/javascript" src="js/jquery.facebox.js"></script>
	<script type="text/javascript" src="js/custom-facebox.js"></script>
	<style type="text/css" media="all">@import "css/master.css";</style>
</head>

<body>

<div id="page-container">
	<div id="page-top"></div>
        <div id="page-left"></div>
        <div id="page-center">

	<div id="header"><a href="home.php" class="home">
	  <h1>melissa savčić</h1></a>
  	</div>
    
  	<div id="nav">
		<?php include 'includes/nav.php'; ?>
	</div>
    
	<div id="content">

		<div id="slider">
			<ul>
				<?php foreach($slides as $slide) {
					print "<li><a href=\"content/slides/big/" . $slide . "\" rel=\"facebox\"><img src=\"content/slides/" . $slide . "\"></img></a></li>";
				} ?>
		

		</div>
	<div id="news">
		<?php include 'includes/news.php'; ?>
	</div>


    <p class="contact">Contact <a href="mailto:meli@melissasavcic.com"><strong class="email">meli@melissasavcic.com</strong></a> for booking</p>
    
    
    </div>
  	<div id="feed">
                <?php include 'includes/twitter.php'; ?>
        </div>

	<div id="player">
		<?php include 'includes/player.php'; ?>
	</div>
    
	<div id="footer">
		<?php include 'includes/footer.php'; ?>
	</div>
	</div>
        <div id="page-right"></div>
        <div id="page-bottom"></div>

</div>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-9208892-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
