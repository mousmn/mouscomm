<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Mousm★n</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<style>
		img {
			width: 100%;
		}
		#under{
			display: none;
			position: absolute;
			width: 100%;
			padding: 0;
			max-height: 0;
		}
		#menu li:hover #under{
			display:block;
			max-height: 1000px;
		}
	</style>
</head>

<body>

<!--<div>
	<ul id="menu">
		<li><a href="/index.html">Home</a></li>
		<li><a href="/post/post.html">Form</a></li>
		<li onmouseover="mouseover(this)" onmouseout="mouseout(this)"><a href="/ucp/ucp.html">UCP</a>
			<ul id="under"><li style="display: none;">Other thing</li></ul>
		</li>
		<li><a href="/nicsres.html">nicsres</a></li>
		<li><a href="/archive.html">Upload Image</a></li>
		<li><a href="/archive">Archive</a></li>
	</ul>
</div>-->

<?php include($_SERVER['DOCUMENT_ROOT'] . '/menu.php'); ?>

<div id="cendex">
	<header style="text-align:center;">
		<h1>Mousmn</h1>
		<p><i>Quiet as a mous</i></p>
	</header>

	<p style="margin:auto;width:250px;height:283px;"><img src="/images/quietasmous.png" alt="Quiet as a mous"></p>	
	<!--<p><i>"Nothing actually works"</i></p>-->
	<!--<p><i>"Everything currently works"</i></p>-->
	<p><i>"We &#x2665; PHP"</i></p>
</div>

<script>
/*
	var l = document.getElementById("under");
	console.log(l);
	console.log("help");
	function mouseover(obj){
		l.style.display = "block";
		console.log("hey");
	}
	function mouseout(obj){
		l.style.display = "hidden";
		console.log("ho");
	}
 */
</script>

</body>
</html>

