<?php exec("ls /home/andren/www/melissasavcic.com/photos |grep -v thumb | awk -F. '{print $1}'",$photos); ?>
<link href="css/galleria.css" rel="stylesheet" type="text/css" media="screen">
	<ul class="galleria_unstyled">
		<?php 
		foreach($photos as $key => $photo) {
				echo "\t\t<li";
				if ($key == 0) echo " class=\"active\"";
				echo "><a href=\"photos/" . $photo . ".jpg\"><img src=\"photos/" . $photo . "_thumb.jpg\" title=\"\" width=\"198\" height=\"149\" alt=\"Melissa Savcic\"></a></li>\n";
		}
		?>
	</ul>
	
