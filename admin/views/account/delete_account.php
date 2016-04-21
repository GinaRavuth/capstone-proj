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
			<h2>Delete Account</h2>
			<p>Please fill out the form to delete an admin account.</p>
		<div class="error">
		</div>
		<br />
		</div>
  		<form id="account_form" class="form-horizontal" method="post" action="index.php?view=delete_account">
		  <div class="form-group">
			<label for="id" class="col-sm-2 control-label text-left">Username</label>
			<div class="col-sm-6">
			  <input type="text"  name="name" id="username" placeholder="Enter the username of the account you wish to delete" class="form-control" pattern="[a-zA-Z0-9]{2,64}">
			</div>
		  </div>
		  <div class="form-group">
			<label for="type" class="col-sm-2 control-label text-left">Email</label>
			<div class="col-sm-6">
			  <input type="email"  name="email" id="email" placeholder="Enter the email address of the account you wish to delete" class="form-control">
			</div>
		  </div>
		  <div class="form-group">
			<label for="type" class="col-sm-2 control-label text-left">Verify password</label>
			<div class="col-sm-6">
			  <input type="password" name="password" id="password" placeholder="Verify the password of the account" pattern=".{6,}" class="form-control" autocomplete="off">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-xs-8">
			 <input type="submit" class="btn btn-default pull-right" id="database_interact" name="delete" value="Delete Account">
			</div>
		  </div>
		</form>
<!-- End page content -->
    </div>
<!-- End wrapper -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_script.php'); ?>
</body>
</html>