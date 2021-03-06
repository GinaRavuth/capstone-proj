<!DOCTYPE html>
<html>
<head>
	<title>Ordino - <?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/css.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/favicon.php'); ?>
</head>
<body >
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/navbar.php'); ?>
    <div class="container" style="margin-top: 120px;">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo $header; ?></h1>
				<br />
				<h2 class="bold"><?php echo $description_title; ?></h2>		
				<p><?php echo $description; ?></p>
			</div>
		</div>
		<h2 class="bold">Request Form</h2>
		<p>Please fill out the form below to submit a hardware request.</p><br>
		<form class="form-horizontal" method="post" action="/splash.php">
			<div class="form-group">
				<label for="name" class="col-sm-1 control-label text-left">Name</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="name" name="name" placeholder="Name">
				</div>
			</div>
			<div class="form-group">
				<label for="eagleid" class="col-sm-1 control-label text-left">Eagle ID</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="eagleid" name="eagleid" placeholder="Eagle ID">
				</div>
			</div>
			<div class="form-group">
				<label for="message" class="col-sm-1 control-label text-left">Reason</label>
				<div class="col-sm-7">
					<textarea class="form-control" rows="5" id="message" name="message" placeholder="Why do you need this hardware?"></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-8">
					<input type="hidden" name="hardware_id" value="<?php echo $id ?>">
					<input type="submit" class="btn btn-default pull-right" name="Checkout" id="submit" value="Request Hardware">
				</div>
			</div>
		</form>
	</div> 
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/js.php');?>  
<!--end scripts -->
</body>
</html>