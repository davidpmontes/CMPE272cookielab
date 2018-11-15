<H3>Website A List of Users</H3>

<?php
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://yangpollo.com/app/views/database.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$contents = curl_exec ($ch);
	echo($contents);
	curl_close ($ch);
?>