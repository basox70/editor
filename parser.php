<?php
if (isset($_POST["file"]) && isset($_POST["filename"])) {
	// $file = $_POST["file"];
	read($_POST["file"],$_POST["filename"]);
}

Function read($filedir=null,$filename=null){
	$lines = file($filedir);
	$content = "";
	foreach ($lines as $line) {
		$content = $content.$line;
	}
	echo htmlspecialchars($content);
}

?>