<?php
		require_once('includes/functions.php');

		if (isset($_GET['product1'])){
			moveCounter(1);
		}
		else if (isset($_GET['product2'])){
			moveCounter(2);
		}
		else if (isset($_GET['product3'])){
			moveCounter(3);
		}
		else if (isset($_GET['product4'])){
			moveCounter(4);
		}
		else if (isset($_GET['product5'])){
			moveCounter(5);
		}
		else if (isset($_GET['product6'])){
			moveCounter(6);
		}
		else if (isset($_GET['product7'])){
			moveCounter(7);
		}
		else if (isset($_GET['product8'])){
			moveCounter(8);
		}
		else if (isset($_GET['product9'])){
			moveCounter(9);
		}
		else if (isset($_GET['product10'])){
			moveCounter(10);
		}
?>

<?php include 'includes/header.php'; ?>

<div id="content">
	<?php
		if (isset($_GET['about'])){
			include 'includes/about.php';
		} 
		else if (isset($_GET['contact'])){
			include 'includes/contact.php';
		}
		else if (isset($_GET['products'])){
			include 'includes/products.php';
		}
		else if (isset($_GET['secure'])){
			include 'includes/secure.php';
		}
		else if (isset($_GET['news'])){
			include 'includes/news.php';
		}
		else if (isset($_GET['list'])){
			include 'includes/list.php';
		}
		else if (isset($_GET['mostvisited'])){
			include 'includes/mostvisited.php';
		}
		else if (isset($_GET['product1'])){
			include 'includes/product1.php';
		}
		else if (isset($_GET['product2'])){
			include 'includes/product2.php';
		}
		else if (isset($_GET['product3'])){
			include 'includes/product3.php';
		}
		else if (isset($_GET['product4'])){
			include 'includes/product4.php';
		}
		else if (isset($_GET['product5'])){
			include 'includes/product5.php';
		}
		else if (isset($_GET['product6'])){
			include 'includes/product6.php';
		}
		else if (isset($_GET['product7'])){
			include 'includes/product7.php';
		}
		else if (isset($_GET['product8'])){
			include 'includes/product8.php';
		}
		else if (isset($_GET['product9'])){
			include 'includes/product9.php';
		}
		else if (isset($_GET['product10'])){
			include 'includes/product10.php';
		}
		else
		{
			include 'includes/home.php';
		}
	?>
</div>

<?php include 'includes/footer.php'; ?>
