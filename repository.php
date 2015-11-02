<?php


/* 
&#9654; => triangle vers la droite
&#9660; => triangle vers le bas
*/

function liste($root,$dir){
	$folder = 0;
	$file = 0;
	echo "<b>current dir : <span id='dir'>$root</span> </b><br/>";
	foreach ($dir as $rep) {
		if (is_dir($root.$rep)){
			echo "<span class='folder'>&#9654;</span> $rep<br/>";
			$folder +=1;
		}else{
			echo "- <span class='file'>$rep</span><br/>";
			$file +=1;
		}	
	}
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