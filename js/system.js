$(document).ready(function() {
	$.Juitter.start({
		searchType:"fromUser", // needed, you can use "searchWord", "fromUser", "toUser"
		searchObject:"MelissaSavcic", // needed, you can insert a username here or a word to be searched for, if you wish multiple search, separate the words by comma.

		// The values below will overwrite the ones on the Juitter default configuration. 
		// They are optional here.
		// I'm changing here as a example only
		lang:"en", // restricts the search by the given language
		live:"live-30", // the number after "live-" indicates the time in seconds to wait before request the Twitter API for updates.
		placeHolder:"juitterContainer", // Set a place holder DIV which will receive the list of tweets example <div id="juitterContainer"></div>
		loadMSG: "Loading messages...", // Loading message, if you want to show an image, fill it with "image/gif" and go to the next variable to set which image you want to use on 
		imgName: "loader.gif", // Loading image, to enable it, go to the loadMSG var above and change it to "image/gif"
		total: 1, // number of tweets to be show - max 100
		readMore: "Read it on Twitter", // read more message to be show after the tweet content
		nameUser:"image" // insert "image" to show avatar of "text" to show the name of the user that sent the tweet 
	});	
	$("#aJuitter").click(function(){
		$(".jLinks").removeClass("on");
		$(this).addClass("on");								  
		$.Juitter.start({
			searchType:"searchWord",
			searchObject:"Juitter",
			live:"live-180" // it will be updated every 180 seconds/3 minutes
		});
	});
});
