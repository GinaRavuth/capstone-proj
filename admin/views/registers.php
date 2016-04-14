<!DOCTYPE html>
<html>
<head>
	<title>Ordino - Admin Registration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='/css/local-index.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body id="background">
<div class="container">
		<div class="row centered">
				<div class="col-lg-12 center-block dec-marg">
					<h1>Ordino</h1>
					<h3 style="text-align:center">Admin Account Registration</h3>
				</div>
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
		</div>
<div class="row">
	<div class="col-sm-4"></div>
	<div class="form-group col-sm-4"><br>
		<p>Please fill out form below.</p>
		<form method="post" action="register.php" name="registerform" >
			<label for="user">Username</label>
				<input type="text" id="login_input_username" placeholder="Letters and numbers only" class="form-control" pattern="[a-zA-Z0-9]{2,64}" required><br>
			<label for="email">Email</label>
				<input type="email" id="login_input_email" placeholder="Email address" class="form-control" required><br>
			<label for="pwd">Password</label>
				<input type="password" id="login_input_password_new" placeholder="6 character minimum" pattern=".{6,}" class="form-control" required autocomplete="off"><br>
			<label for="pwd-repeat">Re-Enter Password</label>
				<input type="password" id="login_input_password_repeat" placeholder="Re-enter password" class="form-control" pattern=".{6,}" required autocomplete="off" ><br>
			<div class="text-center button-index">
				<a href="#">
					<input id="btn-style" type="submit" class="btn"  name="login" value="Register" />
				</a>
				<br />
				<br />
			<div>
				<a href="index.php">Back to Dashboard</a>
			</div>
			</div>	
			</form>
	</div>
	<div class="col-sm-4"></div>
</div>
</div>


<!--  scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- end scripts -->


</body>
</html>