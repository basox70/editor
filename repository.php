<?php
if (isset($_POST["dir"])) {
	// $file = $_POST["file"];
	getRepository($_POST["dir"]);
}

/* 
&#9654; => triangle vers la droite
&#9660; => triangle vers le bas
*/

function liste($root,$dir){
	$folder = 0;
	$file = 0;
	echo "<b>current dir : <span id='dir'>$root</span> </b><br/>";
	if ($root != "../") {
		echo "<i><span class='root'>back to root</span></i><br/>";
	}
	foreach ($dir as $rep) {
		if (is_dir($root.$rep)){
			echo "<span class='folder'>&#9654; $rep</span><br/>";
			$folder +=1;
		}else{
			echo "- <span class='file'>$rep</span><br/>";
			$file +=1;
		}	
	}
	echo "Folder(s) : $folder  -  File(s) : $file";
}

function getRepository($dir = "../"){
	$directories = scandir($dir);
	$directory = array();
	foreach ($directories as $file) {
		if ($file != ".." && $file != "." && $file != "editor") {
			array_push($directory, $file);
		}
	}
	liste($dir,$directory);
}
?>