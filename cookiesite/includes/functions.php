<?php
	function initializeCookies()
	{
		if (!isset($_COOKIE["recents"]) or !isset($_COOKIE["counter"]) or !isset($_COOKIE["products"]))
		{
			for ($i = 0; $i <= 4; $i++) {
				$values[$i] = 0;
			} 			
			setcookie("recents", serialize($values), time() + 60*60*24*5, "/");

			setcookie("counter", 0, time() + 60*60*24*5, "/");

			for ($i = 1; $i <= 10; $i++) {
				$productCount[$i] = 0;
			}
			$productCount[$p] = 1;
			setcookie("products", serialize($productCount), time() + 60*60*24*5, "/");	
		}
	}

	function moveCounter($p)
	{		
		if (isset($_COOKIE["recents"]) and isset($_COOKIE["counter"]) and isset($_COOKIE["products"]))
		{	
			$values = unserialize($_COOKIE["recents"]);
			$i = $_COOKIE["counter"];
			
			if ($values[0] != $p and $values[1]  != $p and $values[2] != $p and $values[3] != $p and $values[4] != $p)
			{
				$values[$i] = $p;
				
				setcookie("recents", serialize($values), time() + 60*60*24*5, "/");
				
				if ($i >= 4)
					setcookie("counter", 0, time() + 60*60*24*5, "/");
				else
					setcookie("counter", $i + 1, time() + 60*60*24*5, "/");
			}
			
			$productCount = unserialize($_COOKIE["products"]);
			$productCount[$p]++;
			setcookie("products", serialize($productCount), time() + 60*60*24*5, "/");
		}
		else
		{
			for ($i = 0; $i <= 4; $i++) {
				$values[$i] = 0;
			} 			
			$values[0] = $p;
			setcookie("recents", serialize($values), time() + 60*60*24*5, "/");

			setcookie("counter", 1, time() + 60*60*24*5, "/");
			
			for ($i = 1; $i <= 10; $i++) {
				$productCount[$i] = 0;
			}
			$productCount[$p] = 1;
			setcookie("products", serialize($productCount), time() + 60*60*24*5, "/");
		}
	}
?>