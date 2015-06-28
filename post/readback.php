<!DOCTYPE html>
<html>
<head>
	<title>Read back</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
</head>

<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/menu.php'); ?>

<div id="cendex" class="fielddex">
	<fieldset>
	<?php
		$postID = $_POST["postID"];
		echo $_POST["identity"];
		$postFile = fopen("posts/$postID", "r") or die("Open fail");
		if ($postFile == false){
			return;
		}
		//Print identity	
		echo fgets($postFile);
		echo "<br/><br/>";
		
		//Print postFiled
		while(!feof($postFile)){
			#echo htmlentities(fgets($postFile));
			echo fgets($postFile);
			echo "<br/>";
		}
		fclose($postFile);
	?>

	</fieldset>
</div>

</body>
</html>
