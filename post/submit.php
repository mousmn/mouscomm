<!DOCTYPE html>
<html>
<head>
	<title>Post submitted</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">	
<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/menu.php'); ?>

<div id="cendex" class="fielddex"> 
	<fieldset>
		<p><?php echo "Post submit"; ?><br/></p>
		<p><?php echo $_POST["identity"]; ?><br/></p>
		<p><?php $formattedPost = str_replace(' ', '&nbsp', $_POST["postfield"]);
			echo nl2br($formattedPost); ?><br/></p>

		<?php
			if ($_POST["postfield"] == NULL)
				return;

			$postText = $_POST["postfield"] ;
			$postIdent = $_POST["identity"];
			$postID = date("Ymd-H:i:s") . '-' . $postIdent;
			$postFile = fopen("posts/$postID", "w") or die("Post open fail");

			if (fwrite($postFile, $postIdent . "\n" . $postText . "\n")){
				$counter = "posts/counter";
				if (!file_exists($counter)){
					touch($counter);
				}
				fopen("$counter", "r+") or die("Counter open fail");
				$updateCounter = intval(fread($counter));
				$updateCounter++;
				echo fwrite($counter, $updateCounter);
				fclose($counter);

			}
			fclose($postFile);

		?>
		<form action="readback.php" method="POST">
			<input type="hidden" name="postID" value="<?php echo $postID ?>">
			<input type="submit" value="Read back">
		</form>
	</fieldset>
</div>

</body>
</html>
