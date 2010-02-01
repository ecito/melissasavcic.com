$(document).ready(function() {  

	var $content = $('#content');

	function homeclick() {
                $content.slideUp("slow").load("home.php #content", function () {
                        $.getScript("js/jquery.easyslider.1.5.js", function () {
                                $.getScript("js/custom-slide.js");
                        });
                        $.getScript("js/jquery.facebox.js", function () {
                                $.getScript("js/custom-facebox.js");
                        });
                });

		$content.slideDown("slow");
		document.title = 'melissa savcic :: home';
		return (false);
	}
	$("a.home").click(homeclick);
	$("#header").click(homeclick);
	$("#nav a.bio").click(function() {
		$content.slideUp("slow").load("bio.php #content").slideDown("slow");
		document.title = 'melissa savcic :: bio';
		return (false);
	});
	
	$("#nav a.shows").click(function() {
		$content.slideUp("slow").load("shows.php #content").slideDown("slow");
		document.title = 'melissa savcic :: shows';
		return (false);
	});
	
	
	$("#nav a.photos").click(function() {
		$content.slideUp("slow").load("includes/gallery.php", function () {
			$.getScript("js/jquery.galleria.js", function () {
				$.getScript("js/custom-gallery.js");
			});
		});
		$("#content").slideDown("slow");
		document.title = 'melissa savcic :: photos';
		return (false);
	});
	
	$("#nav a.lyrics").click(function() {
		$content.slideUp("slow").load("includes/lyric-menu.php", function () {
			$.getScript("js/custom-lyrics.js");
		});
		$content.slideDown("slow");
		document.title = 'melissa savcic :: lyrics';
		return (false);
	});
	
	$("#nav a.shop").click(function() {
		$content.slideUp("slow").load("shop.php #content").slideDown("slow");
		document.title = 'melissa savcic :: shop';
		return (false);
	});
	$("div#video-blog").click(function() {
		$(this).removeClass("side");
		$('#music-videos').addClass("side");

	});
	$("div#music-videos").click(function() {
		$(this).removeClass("side");
		$('#video-blog').addClass("side");
	});
	$("#videos > h2").click(function() {
		$('#music-videos').addClass("side");
		$('#video-blog').addClass("side");
	});
});
