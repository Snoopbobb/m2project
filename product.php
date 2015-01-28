<?php

// Require the products "database"
require_once('products.php');

// Initialize variables
$quanity = '';
$os = "";
$msg = "";

// Check if $_GET is set
if(isset($_GET['product_id'])) {
	$quanity = $_GET['quanity'];
	$product_id = $_GET['product_id'];

	//  Check if $_GET key exsists
	if(array_key_exists($product_id, $products)) {
		$os = $products[$product_id];
		$msg = "<h1>You want to order {$quanity} {$os} machines.</h1>";
	} else {
		$msg = "<h1>You have entered an invalid input.</h1>";
	}
	if($os === 'Macintosh' && $quanity > 7) {
		$msg = "<h1>You can't order over 7 {$os} machines.</h1>";
	}
	if($_GET['quanity'] <= 0) {
		$msg = "<h1>You have entered an invalid input.</h1>";
	}
} else {
	$msg = "<h1>You have entered an invalid input.</h1>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link href='http://fonts.googleapis.com/css?family=Lato|Lobster' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://github.com/necolas/normalize.css/blob/master/normalize.css">
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>

	<?php require_once('header.php'); ?>

	<main>
		<?php echo $msg; ?>
	</main>

	<?php require_once('footer.php'); ?>

</body>
</html>