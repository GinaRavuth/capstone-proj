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
			<h2 >Create Account</h2>
			<p>Please fill out the form to create a new admin account.</p>
			<hr />
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
		</div>
  		<form id="" class="form-horizontal" method="post" action="index.php?view=create_account" name="registerform">
		  <div class="form-group">
			<label for="id" class="col-sm-2 control-label text-left">Username</label>
			<div class="col-sm-6">
			  <input type="text" id="login_input_username" name="user_name" placeholder="Letters and numbers only" class="form-control" pattern="[a-zA-Z0-9]{2,64}" required>
			</div>
		  </div>
		  <div class="form-group">
			<label for="type" class="col-sm-2 control-label text-left">Email</label>
			<div class="col-sm-6">
			  <input type="email" id="login_input_email" name="user_email" placeholder="Email address" class="form-control" required>
			</div>
		  </div>
		  <div class="form-group">
			<label for="type" class="col-sm-2 control-label text-left">Password</label>
			<div class="col-sm-6">
			  <input type="password" id="login_input_password_new" name="user_password_new" placeholder="6 character minimum" pattern=".{6,}" class="form-control" required autocomplete="off">
			</div>
		  </div>
		  <div class="form-group">
			<label for="status" class="col-sm-2 control-label text-left">Re-enter Password</label>
			<div class="col-sm-6">
			 <input type="password" id="login_input_password_new" name="user_password_repeat" placeholder="6 character minimum" pattern=".{6,}" class="form-control" required autocomplete="off">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-8">
			 <input type="submit" class="btn btn-default pull-right" name="register" value="Create Account">
			</div>
		  </div>
		</form>
<!-- End page content -->
    </div>
<!-- End wrapper -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_script.php'); ?>
</body>
</html>
