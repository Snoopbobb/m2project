<?php

// Require the products database
require_once('products.php');

// Loop through database and populate drop down options
$opts = ''; 
foreach ($products as $key => $product) {
	 	$opts .= "<option value=\"$key\">$product</option>";	
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Site</title>
	<link href='http://fonts.googleapis.com/css?family=Lato|Lobster' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://github.com/necolas/normalize.css/blob/master/normalize.css">
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>

	<?php require_once('header.php'); ?>

	<main>
		
		<div>
			<h1>Browse Products</h1> 
			<form action="product.php">
		 		<label>Product:</label>
		 		<select name="product_id">
		 			<?php echo $opts; ?>
		 		</select>
		 		<label>Quanity:</label>
		 		<input type="text" name="quanity">
		 		<button>Submit</button>
		 	</form>
	 	</div>
	</main>

	<?php require_once('footer.php'); ?>

</body>
</html>

