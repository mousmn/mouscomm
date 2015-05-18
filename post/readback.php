<!DOCTYPE html>
<html>
<head>
	<title>Read back</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
</head>

<body>

<div id="menu">
	<ul id="menu">
		<li><a href="/index.html">Home</a></li>
		<li><a href="/post/post.html">Form</a></li>
		<li><a href="/ucp/ucp.html">UCP</a></li>
		<li><a href="/nicsres.html">nicsres</a></li>
		<li><a href="/archive.html">Upload Image</a></li>
		<li><a href="/archive">Archive</a></li>
	</ul>
</div>

<div id="cendex" class="fielddex">
	<fieldset>

	<?php
		echo $_POST["identity"];
		$postFile = fopen("/posts/posttest.txt", "r") or die("Open fail");
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
