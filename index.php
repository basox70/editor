<?php include('parser.php');
include('repository.php'); ?>

<html>
	<head>
		<title>Live Editor</title>
		<!--<meta charset='utf-8'/>-->
		<link rel='stylesheet' type='text/css' href='css/style.css'>
		<script src='http://code.jquery.com/jquery-1.10.2.js'></script>
		<script type='text/javascript' src='js/javascript.js'></script>
	</head>
	<body>
		<div class='title' >Live Editor</div>
		<div class='repository' ><?php getRepository(); ?></div>
		<textarea class="edit" ></textarea>
		<button type='submit' id='Cancel' >Cancel</button>
		<button type='submit' id='Save' >Save</button>
		<!-- <div class="test"></div> -->
	</body>
</html>