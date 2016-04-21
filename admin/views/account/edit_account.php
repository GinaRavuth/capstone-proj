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
		<div id="content_header" class="col-sm-12">
			<h2 >Edit Account</h2>
			<p>Please fill out the form to edit an admin account.</p>
			<hr />
		<div class="error">
		</div>
		<br />
		</div>
  		<form id="admin_form" class="form-horizontal" method="post" action="index.php?view=edit_account">
		  <div class="form-group">
			<label for="id" class="col-sm-2 control-label text-left">Username</label>
			<div class="col-sm-6">
			  <input type="text" name="username" id="username" placeholder="Enter the username of the account you wish to edit" class="form-control" pattern="[a-zA-Z0-9]{2,64}">
			</div>
		  </div>
		  <div class="form-group">
			<label for="type" class="col-sm-2 control-label text-left">New Email</label>
			<div class="col-sm-6">
			  <input type="email" name="email" id="email" placeholder="Enter a new email address for the account" class="form-control">
			</div>
		  </div>
		  <div class="form-group">
			<label for="type" class="col-sm-2 control-label text-left">New password</label>
			<div class="col-sm-6">
			  <input type="password" name="password" id="password" placeholder="Enter a new password for the account" pattern=".{6,}" class="form-control" autocomplete="off">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-8">
			 <input type="submit" class="btn btn-default pull-right" id="database_interact" name="edit" value="Edit Account">
			</div>
		  </div>
		</form>
<!-- End page content -->
    </div>
<!-- End wrapper -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_script.php'); ?>
</body>
</html>