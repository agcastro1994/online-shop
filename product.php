<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product detail</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/index.css"> 
	<script src="js/bootstrap.min.js"> </script>
	<script src="js/jquery-3.2.1.min.js"> </script>

</head>
<body>

	<?php include 'includes/header.php'; ?>
	<div class="container">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Watches</a></li>
				<li class="active">Beautiful watch</li>
			</ol>			
		</div>	
		<div class="col-md-8">
			<h3 class="pp-title">Beautiful Watch</h3>		
			<img src="images/watch1.jpg" class="img-responsive" alt="">	
			<h4 class="pp-desc-head">Description</h4>
			<div class="pp-desc-detail">
				<p>This is a sexy watch. Very expensive. you can't buy this, but feel free to click the buy button</p>
			</div>
		</div>
		<div class="col-md-4"></div>	
	</div>
	<?php include 'includes/footer.php'; ?>
	
</body>
</html>