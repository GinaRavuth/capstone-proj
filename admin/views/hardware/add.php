<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_head.php'); ?>
</head>
<body>
<!-- Wrapper -->
    <div id="wrapper">
       <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_nav.php'); ?>
		<nav class="navbar navbar-default navbar-static-top">
		  <div id="page" class="container">
			<h1>Ordino</h1>
		  </div>
		</nav>
<!-- Page Content -->
		<div class="col-sm-12">
			<h2 >Add Hardware</h2>
				<p>Please fill out the form about the piece of hardware you would like to add and click submit.</p>
			<br />
			<br />
		<div class="error">
		</div>
		</div>
		<form id="hardware_form" class="form-horizontal" method="post" action="index.php?view=add">
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
			<div class="col-xs-8">
				<input type="submit" class="btn btn-default pull-right" id="submit_hardware" name="add" value="Add Hardware">
			</div>
		  </div>
		</form>
<!-- End page content -->
    </div>
<!-- End wrapper -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_script.php'); ?>
</body>
</html>
