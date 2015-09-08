<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Post Listing</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
</head>

<body>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/menu.php'); ?>

<div id="cendex">

	<?php
		$dir = 'posts/';
		$file_list = scandir($dir, 1);

		//print_r($file_list);

		/*for ($i = 0; $i<count($file_list); $i++){
			while ($line = fgets($file_list[$i])){
				printf("%s\n", $line);
			}
		}*/
		for ($i=0; $i<(count($file_list)-2); $i++){
			$filename = preg_replace("/\.txt/", "", $file_list[$i]);
			printf("<p><a href=\"posts/%1\$s.txt\">%1\$s</a></p>", $filename);
		}
	?>

</div>

</body>
</html>

