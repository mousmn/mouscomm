<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Create a post</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/menu.php'); ?>

<div id="cendex" class="fielddex">
	<form action="submit.php" method="POST">
	<fieldset>
	<legend>Edit post</legend>

		Identity:<br/>
		<input type="text" name="identity" size="64" autofocus><br/>

		Post field:<br/>
		<textarea name="postfield" rows="10" cols="50"></textarea><br/>

		<input type="submit" value="Submit">
	</fieldset>
	</form>
</div>
	<script src="allowTab.js"></script>

</body>
</html>

