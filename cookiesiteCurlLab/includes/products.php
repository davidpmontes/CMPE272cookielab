<h3>Our Products</h3>

<p>Click <a href="index.php?mostvisited">HERE</a> to see your 5 most visited products! </p>
<h3>Your 5 most recent product views</h3>
<hr>
<?php
	foreach ( unserialize($_COOKIE["recents"]) as $key => $value)
	{
		if ($value == 0)
		{
			print("");
		}
		else
		{
			print( "<a href=\"/cookiesite/index.php?product");
			print( $value );
			print( "\">");
			print( "<img src= \"");
			print( "/cookiesite/images/product");
			print( $value);
			print( ".png\" width=\"50\" height=\"50\">");
			print( "</td>
					</tr>");
			print( "</a>");	
		}
	}
?>
<hr>

<a href="index.php?product1">
	<h3>1. Rugged Paper Towel</h3>
	<img src= "/cookiesite/images/product1.png" width="100" height="100">
</a>

<a href="index.php?product2">
	<h3>2. Papyrus Paper Towel</h3>
	<img src= "/cookiesite/images/product2.png" width="100" height="100">
</a>

<a href="index.php?product3">
	<h3>3. Ash Paper Towel</h3>
	<img src= "/cookiesite/images/product3.png" width="100" height="100">
</a>

<a href="index.php?product4">
	<h3>4. Invisible Paper Towel</h3>
	<img src= "/cookiesite/images/product4.png" width="100" height="100">
</a>

<a href="index.php?product5">
	<h3>5. Water Paper Towel</h3>
	<img src= "/cookiesite/images/product5.png" width="100" height="100">
</a>

<a href="index.php?product6">
	<h3>6. EcoFriendly Paper Towel</h3>
	<img src= "/cookiesite/images/product6.png" width="100" height="100">
</a>

<a href="index.php?product7">
	<h3>7. Celebrity Paper Towel</h3>
	<img src= "/cookiesite/images/product7.png" width="100" height="100">
</a>

<a href="index.php?product8">
	<h3>8. Reuseable Paper Towel</h3>
	<img src= "/cookiesite/images/product8.png" width="100" height="100">
</a>

<a href="index.php?product9">
	<h3>9. Cloth Paper Towel</h3>
	<img src= "/cookiesite/images/product9.png" width="100" height="100">
</a>

<a href="index.php?product10">
	<h3>10. Cartoon Paper Towel</h3>
	<img src= "/cookiesite/images/product10.png" width="100" height="100">
</a>