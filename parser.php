<?php

Function title($file=null){
	if ($file == null) {	
		$title = "Live Editor";
	}else{
		$title = $file." - Live Editor";
	}
	echo "<title>$title</title>";
}

?>