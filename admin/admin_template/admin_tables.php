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
			
			<div class="input-group">
				<label class="control-label" id="label_category" for="cats">Choose Category: &nbsp; </label>
				<div class="selectContainer">
					<select name="categories" class="form-control" id="cats">
						<option value="select" selected disabled>Select Type</option>
						<?php foreach($types as $type): ?>
						<option value="<?php echo $type ?>"><?php echo $type ?></option>                
						<?php endforeach; ?>
					</select>
				</div>
			</div>
	
			<table class="table table-striped table-bordered" id="dataTable">
				<thead>
					<tr>
					<?php foreach($columns as $tableHead): ?>
						<th><?php echo $tableHead; ?></th>
					<?php endforeach; ?>
					</tr>
				</thead>
				<tbody id="tableBody">
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
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/datatablesJS.php');?>
<!-- End table scripts -->
</body>
</html>
