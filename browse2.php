<?php
require_once('product.php');
$opts = ''; 
$quanity = '';
$os = "";
$msg = "";

if(isset($_GET['product'])) {
	$quanity = $_GET['quanity'];
	$os = $_GET['product'];
	$msg = "<h1>You want to order $quanity $os machines.</h1>";
	if($os == 'Macintosh' && $quanity > 7) {
		$msg = "<h1>You can't order over 7 $os</h1>";
	} 
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
		<?php echo $msg; ?>
		<?php if($_GET['product'] == "") {
		echo '<h1>Browse Products</h1> 
		<form action="">
	 		<label for="product">Product:</label>
	 		<select name="product" id="">
	 			<?php echo $opts; ?>
	 		</select>
	 		<label for="quanity">Quanity:</label>
	 		<input type="text" name="quanity">
	 		<button>Submit</button>
	 	</form>
	</main>';
	foreach ($products as $product) {
	 	$opts .= "<option value=\"$product\">$product</option>";	
	}
	}
	?>
	<?php require_once('footer.php'); ?>
</body>
</html>

