<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/lovelyRestStyle.css">
	<title>Lovely Restaurant</title>
</head>

<body>
		<nav>
			<div class="logo"><a>Lovely restaurant </a></div>
			<div>
				<ul>
					<li><a href="<?php echo Helper::htmlRoute('Home', 'index'); ?>">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="<?php echo Helper::htmlRoute('Category', 'index'); ?>">Categories</a></li>
					<li><a href="<?php echo Helper::htmlRoute('Meal', 'index'); ?>"> Meals </a></li>
				</ul>
			</div>
	</nav>