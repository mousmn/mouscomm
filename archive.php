<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Upload an image</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
</head>

<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/menu.php'); ?>


<div id="cendex" style="padding: 6px 10px 6px 10px" > 
	<form action="/upload.php" method="post" enctype="multipart/form-data">
		<!-- In folder:<br/>
		<input type="radio" name="folder" value="None" checked>None
		<br/>
		<input type="radio" name="folder" value="Polandball">Polandball
		<p></p> -->
	    	Select image to upload:
	        <input type="file" name="fileToUpload" id="fileToUpload">
         	<input type="submit" value="Upload Image" name="submit">
	</form>
</div>

</body>
</html>
