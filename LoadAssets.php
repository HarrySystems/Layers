<?php
	// css
		$css = "assets/css/"
			.str_replace(
				".php", 
				".css",
				basename($_GET['url'])
			);

		if(file_exists(__DIR__."/".$css))
		 	echo "<link href='".$css."' rel='stylesheet'>";
		else
			trigger_error($css);

	// js
		$js = "assets/js/"
			.str_replace(
				".php", 
				".js",
				basename($_GET['url'])
			);

		if(file_exists(__DIR__."/".$js))
		 	echo "<script src='".$js."'></script>";
		else
			trigger_error($js);
