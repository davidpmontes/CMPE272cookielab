<!DOCTYPE html>
<html>
<head>
	<title>This is my PHP site</title>
</head>
<body>
	<header>
		<h1>Difflin Munder</h1>

		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?about">About</a></li>
				<li><a href="index.php?contact">Contact</a></li>
				<li><a href="index.php?products">Products</a></li>
				<li><a href="index.php?news">News</a></li>
				<li><a href="index.php?secure">Secure</a></li>
			</ul>
		</nav>
	</header>

<?php

/*
$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://davidpmontes.com/cookiesite/includes/database.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$contents = curl_exec ($ch);
	echo($contents);
	curl_close ($ch);
?>
*/