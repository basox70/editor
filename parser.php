<?php
if (isset($_POST["file"]) && isset($_POST["filename"])) {
	// $file = $_POST["file"];
	read($_POST["file"],$_POST["filename"]);
	title($filename);
}


Function title($filename=null){
	if ($filename == null) {	
		$title = "Live Editor";
	}else{
		$title = $filename." - Live Editor";
	};
	echo "<title>$title</title>";
}

Function read($filedir=null,$filename=null){
	$lines = file($filedir);
	$content = "";
	foreach ($lines as $line) {
		$content = $content.$line;
	}
	// $response = array('file' => $filedir, 'filename' => $filename, 'content' => $content);
	// $json = new Services_JSON();
	echo $content;
}

?>