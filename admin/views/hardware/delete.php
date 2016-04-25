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
			<h2 >Delete Hardware</h2>
				<p>Please enter the ID of the item to remove from the database.</p>
				<hr />
			<div class="error">
			</div>
			<br />
		</div>
		<form id="admin_form" class="form-horizontal" method="post" action="/splash.php">
		  <div class="form-group">
			<label for="id" class="col-sm-2 control-label text-left">Hardware ID</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id" name="id" placeholder="ID">
				</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-8">
				<input type="submit" class="btn btn-default pull-right" id="database_interact" name="delete" value="Delete Hardware">
			</div>
		  </div>
		</form>
<!-- End page content -->
    </div>
<!-- End wrapper -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_script.php'); ?>
</body>
</html>
