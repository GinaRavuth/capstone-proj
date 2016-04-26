<!DOCTYPE html>
<html lang="en">
<head>
   <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_head.php'); ?>
    <title>Ordino - Admin Dashboard</title>
</head>
<body>
<!-- Wrapper -->
    <div id="wrapper">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_nav.php'); ?>

<!-- Admin dashboard top navbar -->
		<nav class="navbar navbar-default navbar-static-top">
		<div id="page" class="container">
			<h1>Ordino<span class="caret"></span></h1>
		</div>
		</nav>
<!-- End top navbar -->
<!-- Page Content -->
		<div class="container" style="margin-top: 120px;">
	<div class="row">
		<div class="col-md-12">
			<h1><?php echo $header; ?></h1>
			<p><?php echo $description; ?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
	
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
					<?php foreach($columns as $tableHead): ?>
						<th><?php echo $tableHead; ?></th>
					<?php endforeach; ?>
					</tr>
				</thead>
				<tbody>
					 <tr>
						<td></td>
					 </tr>
				</tbody>
			</table>

		</div>
	</div>
</div>
<!-- End page content -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_script.php'); ?>
<!-- Table scripts -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/js.php');?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/css.php');?>
<!-- End table scripts -->
</body>
</html>
