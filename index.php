<h1>The rules</h1>

<h2>Try to use at least five tropes, to generate an interesting character, including backstory:</h2>

<?php

	//Get 10 trope titles
	for($i = 0; $i < 10; $i++){
		//Read html from a random tvtropes page
		$url = "https://tvtropes.org/pmwiki/randomitem.php?p=1";
		$meta = get_meta_tags($url);

		$title = $meta["twitter:title"]; //Read the title
		$title = str_replace(" - TV Tropes", "", $title); //Cut the "TV Tropes" at the end of the string
		$link = "https://tvtropes.org/pmwiki/pmwiki.php/Main/" . preg_replace("/[^A-Za-z0-9]/", "", $title);
		echo "<a href=\"" . $link . "\" target=\"_blank\">" . $title . "</a><br>";
	}	

?>