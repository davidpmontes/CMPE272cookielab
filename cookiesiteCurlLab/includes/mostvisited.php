<table border = "0" cellspacing = "0" cellpadding = "10">
	<?php
		$topfive = unserialize($_COOKIE["products"]);
		arsort($topfive);

		$i = 0;
		print( "<h3> Your 5 most visited products! </h3>" );

		print( "<ul>" );
		foreach ( $topfive as $key => $value)
		{
			if ($i < 5 and $value != 0)
			{

				print( "<li>Product $key: ");
				print( "
					<a href=\"/cookiesite/index.php?product$key\">
						<img src= \"/cookiesite/images/product$key.png\" width=\"50\" height=\"50\">
					</a>
				");
				print ( "  $value times </li> ");
			}
			$i++;
		}
		print( "</ul>");
	?>
</table>