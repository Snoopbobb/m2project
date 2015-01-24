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
		<h1>Contact Page</h1>
		<form action="">
			<label for="name">Name:</label>
			<input type="text" id="name">
			<label for="email">Email Address:</label>
			<input type="email" id="email">
			<button>Submit</button>
		</form>
	</main>	

	<?php require_once('footer.php'); ?>
</body>
</html>