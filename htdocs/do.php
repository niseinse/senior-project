<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link type="text/css" href="./style.css" rel="stylesheet">
	<title>Building Finder - Process</title>
</head>
<body>
	<pre><?
		// file upload
		$file_name = $_FILES['upload_file']['name'];
		$tmp_file = $_FILES['upload_file']['tmp_name'];
		$file_path = './files/'.$file_name;
		$r = move_uploaded_file($tmp_file, $file_path);

		// execution command
		$exec_command = "";
		$exec_output = "";
		$exec_ret = "";
		exec($exec_command, $exec_output, $exec_ret);
		print_r($exec_output);
		?> 
	</pre>
</body>
</html>