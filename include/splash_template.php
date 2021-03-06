<!DOCTYPE html>
<html>
<head>
	<title>Message - Thank You</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='css/local-index.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/favicon.php'); ?>
</head>
<body>
	<div class="container">
		<div class="row centered">
				<div class="col-lg-12 center-block">
					<h1><?php echo $display ?></h1>
					<h2><?php echo $status ?></h2>
					<hr />
				</div>
		</div>

		<div class="text-center button-index">
			<a href="<?php echo $url ?>">
				<button type="button" class="btn"><?php echo $text ?></button>
			</a>
		</div>
	</div>



<!--  scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- end scripts -->


</body>
</html>