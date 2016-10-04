<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Building Finder - Main</title>
	<link type="text/css" href="./style.css" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="./preview.js"></script>
</head>
<body>
	<div class="contain">
	<!-- Code of Title -->
		<div id="header"> 
			<br>
			Building Finder
			<br>
			<br>
		</div>
		
	<!-- Code of ImageBox -->
		<div>
			<img id="image" src="./gray.png" alt="Preview">
		</div>
		
	<br>Input image file<br>
	<!-- Code of Form -->
		<form id="upload_form" method="post" enctype="multipart/form-data" action="do.php">
			<input id="file_form" type="file" name="upload_file">
			<br>
			<br>
			<input class="buttonform" id="button_run" type="submit" value="Run">
		</form>
	</div>
</body>
</html>