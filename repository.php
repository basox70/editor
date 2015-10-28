<?php


/* 
&#9654; => triangle vers la droite
&#9660; => triangle vers le bas
*/
function liste($root,$dir){
	foreach ($dir as $rep) {
		if (is_dir($root.$rep)){
			echo "<span class='folder'>&#9654;</span> $rep<br/>";
		}else{
			echo "- <span class='select'>$rep</span><br/>";
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