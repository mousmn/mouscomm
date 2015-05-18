<!DOCTYPE html>
<html lang="en-US">
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
</head>

<body>

<!--<div id="menu">
	<ul id="menu">
		<li><a href="/index.html">Home</a></li>
		<li><a href="/post/post.html">Form</a></li>
		<li><a href="/ucp/ucp.html">UCP</a></li>
		<li><a href="/nicsres.html">nicsres</a></li>
		<li><a href="/archive.html">Upload Image</a></li>
		<li><a href="/archive">Archive</a></li>
	</ul>
</div>
-->

<!--#include virtual="/menu.html" -->

<?php include '/menu.php'; get(); ?>

<div id="cendex">

<?php 
	/*class gallery{
		public function display(){
			findImages();
			print_r($openDir);
		}

		public $ARCHIVEDIR = '/archive';

		public function findImages(){
			$openDir = scandir($this->ARCHIVEDIR);
			print_r($openDir);
		}
	}

	$g = new gallery();
	$g->findImages();*/

	echo is_readable('/');

	$dir = '/';
	$files = scandir($dir) or die('Hlep me');
	print_r($files);

	echo '<p>Yahallo</p>';
 ?>

</div>	

</body>
</html>
