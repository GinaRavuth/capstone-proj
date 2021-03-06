<!DOCTYPE html>
<html lang="en">
<head>
   <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_head.php'); ?>
</head>
<body>
<!-- Wrapper -->
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_nav.php'); ?>
		<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/mobile_nav.php'); ?>
<!-- Page Content -->
		<div id="content_header" class="col-sm-12">
			<h2 >Edit Hardware</h2>
				<p>Please fill out the form below to edit an item in the database.</p>
				<hr />
			<div class="error">
			</div>
			<br />
			</div>
		<form id="admin_form" class="form-horizontal" method="post">
		  <div class="form-group">
			<label for="id" class="col-sm-2 control-label text-left">Hardware ID</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id" name="id" placeholder="ID">
				</div>
		  </div>
		  <div class="form-group">
			<label for="type" class="col-sm-2 control-label text-left">Type</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="type" name="type" placeholder="Type">
				</div>
		  </div>
		  <div class="form-group">
			<label for="type" class="col-sm-2 control-label text-left">Model</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="model" name="model" placeholder="Type">
				</div>
		  </div>
		  <div class="form-group">
			<label for="status" class="col-sm-2 control-label text-left">Status</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="status" name="status" placeholder="Status">
				</div>
		  </div>
		  <div class="form-group">
			<label for="desc" class="col-sm-2 control-label text-left">Description</label>
				<div class="col-sm-6">
					<textarea class="form-control" rows="5" id="description" name="description" placeholder="Description of hardware"></textarea>
				</div>
		  </div>
		  <div class="form-group">
			<label for="location" class="col-sm-2 control-label text-left">Location</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="location" name="location" placeholder="Location">
				</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-8">
				<input type="submit" class="btn btn-default" id="database_interact" name="edit" value="Edit Hardware">
			</div>
		  </div>
		</form>
<!-- End page content -->
    </div>
<!-- End wrapper -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_script.php'); ?>
</body>
</html>
