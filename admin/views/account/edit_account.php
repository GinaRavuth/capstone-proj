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
			<h2 >Edit Account</h2>
			<p>Please fill out the form to edit an admin account.</p>
		<div class="error">
		<?php
		// show potential errors / feedback (from registration object)
			if (isset($registration)) {
    			if ($registration->errors) {
        			foreach ($registration->errors as $error) {
            				echo $error;
       			 	}
				}
    			if ($registration->messages) {
        			foreach ($registration->messages as $message) {
            				echo $message;
        			}
    			}
			}
		?>
		</div>
		<br />
		<br />
		</div>
  		<form id="register_form" class="form-horizontal" method="post" action="index.php?view=edit_account">
		  <div class="form-group">
			<label for="id" class="col-sm-2 control-label text-left">Username</label>
			<div class="col-sm-6">
			  <input type="text" name="username" placeholder="Letters and numbers only" class="form-control" pattern="[a-zA-Z0-9]{2,64}">
			</div>
		  </div>
		  <div class="form-group">
			<label for="type" class="col-sm-2 control-label text-left">Email</label>
			<div class="col-sm-6">
			  <input type="email" name="email" placeholder="Email address" class="form-control">
			</div>
		  </div>
		  <div class="form-group">
			<label for="type" class="col-sm-2 control-label text-left">New password</label>
			<div class="col-sm-6">
			  <input type="password" id="login_input_password_new" name="password" placeholder="6 character minimum" pattern=".{6,}" class="form-control" autocomplete="off">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-xs-8">
			 <input type="submit" class="btn btn-default pull-right" id="hardware_interact" name="edit" value="Edit Account">
			</div>
		  </div>
		</form>
<!-- End page content -->
    </div>
<!-- End wrapper -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_script.php'); ?>
</body>
</html>