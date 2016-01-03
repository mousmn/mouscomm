<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Minecraft</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
</head>

<body>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/menu.php'); ?>

<div id="cendex">

	<div style="width:75%;margin:auto;">
		<h2 style="text-align:center;">Intelligentsia Pack</h2>
		<p><img src="cover.png" style="float:right;" alt="cover" title="cover"></p>
		<h5>Created by Crestor123</h5>
		<p><a href="http://www.technicpack.net/modpack/intelligentsia-pack.709976" target="_blank">Modpack</a> |
			<a href="http://www.technicpack.net/download" target="_blank">Technic Launcher</a></p>
		<p>This modpack is distributed on the Technic platform and is needed to use it.
			It can be downloaded from the above link.</p>
		<p>Install the modpack by visiting the the link above and click INSTALL THIS MODPACK to copy the url.</p>
		<p>In the Technic Launcher click on the MODPACKS tab and paste the url into the box 
			that says "Add Pack or Search" with Ctrl-v or Command-v and click Install.</p>

		

		<hr/>
		
		<h2 style="text-align:center;">MousLanOne</h2>
		<h5>Created by Mousmn</h5>
		<p>"Not Maxx"</p>


		<?php
			$file = @fopen('ModList.txt', 'r');

			if ($file){

				# Regexes for comments and blanks
				$comments = '/^#|^\s+#/';
				$blanks = '/^$|^\s+$/';

				# Pack version, MC version
				$ver = fgets($file);
				print '<p>Version: ' . $ver . '<br/>';
				print 'Minecraft ' . fgets($file) . '</p>';
				print "<p><a href=\"MousLanOne-$ver.zip\">Download</a></p>";

				# Gen table
				print '<table class="ucpTab" style="width: 80%;">';
				print '<th>Mod</th>';
				print '<th>Version</th>';

				# Mod line counter
				$lc = 0;

				while (($line = fgets($file)) !== false){
					if (!preg_match($comments, $line) && !preg_match($blanks, $line)){
						# God-awful function; split line by '=' into odd array thing
						$parts = explode('=', $line);

						# Determine even/odd for styling
						if ($lc % 2 === 0){
							$class = 'even';
						}
						else {
							$class = 'odd';
						}

						# Print row with mod, ver
						print "<tr class=\"$class\">";
						print "<td>$parts[0]</td>";
						print "<td>$parts[1]</td>";
						print '<tr>';

						$lc++;
					}
				}

				# Finish up with mod count
				print '<tfoot><tr>';
				print '<td><b>Total mod count:</b></td>';
				print "<td><b>$lc</b></td>";
				print '</tr></tfoot>';

				print '</table>';
			}
			else {
				print '<p>File not found :(</p>';
			}

			fclose($file);
		?>
	</div>

</div>

</body>
</html>

