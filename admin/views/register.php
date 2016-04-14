<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
    <title>Ordino - Admin Registration</title>
<!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <div id="wrapper">
<!-- Sidebar -->
       <div id="sidebar-wrapper">
            <ul class="sidebar-nav text-center">
                <li class="sidebar-brand">
                   <a href="index.php"><h1>Ordino</h1></a>
                </li>
                <li>
                    <a href="index.php?view=messages">Check Messages</a>
                </li>
                <li>
                    <a href="index.php?view=returns">Approve Returns</a>
                </li>
                <li>
                    <a href="index.php?view=checkout">Approve Checkouts</a>
                </li>
                <li>
                    <a href="index.php?view=hardware">Add Hardware</a>
                </li>
                <li>
                    <a href="index.php?view=register">Create Account</a>
                </li>
                <li>
                    <a href="" name="logout" id="logout" value="logout">Log out</a>
                </li>
            </ul>
        </div>
<!-- /#sidebar-wrapper -->
<!-- nav bar at top -->
		<nav class="navbar navbar-default navbar-static-top">
		<div id="page" class="container">
			<h1>Ordino</h1>
		</div>
		</nav>
<!-- end nav -->
<!-- Page Content -->
		<div class="col-sm-12">
		<h2 >Create Account</h2>
		<p>Please fill out the form to create a new admin account.</p>
		<br />
		<br />
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
  		<form id="register_form" class="form-horizontal" method="post" action="index.php?view=register" name="registerform">
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
			<div class="col-xs-8">
			 <input type="submit" class="btn btn-default pull-right" id="submit_hardware" name="register" value="Register">
			</div>
		  </div>
		</form>
<!-- /#page-content-wrapper -->
    </div>
<!-- /#wrapper -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="admin_functions/admin_js.js"></script>
</body>
</html>
