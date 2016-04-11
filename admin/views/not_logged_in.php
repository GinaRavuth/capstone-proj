<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ordino - Admin Login</title>
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
				<h3 style="text-align:center">Admin Portal</h3>
			</div>
		</div>
<div class="row">
	<div class="col-sm-4"></div>
		<form class="form-group col-sm-4" method="post" action="index.php" name="loginform">
			<label for="usr"></label>
			<input id="login_input_username" type="text" class="form-control" name="user_name" placeholder="Username">
			<label for="pwd"></label>
			<input id="login_input_password" type="password" class="form-control" id="pwd" name="user_password" autocomplete="off" placeholder="Password">
			<br />
			<div class="text-center button-index">
				<input id="btn-style" type="submit" class="btn"  name="login" value="Log In" />
				<p  class="space-password-button">
					<a href="#">Forgot password? </a>
				</p>
			</div>
		</form>
	<div class="col-sm-4"></div>			
</div>
</div>



<!--  scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- end scripts -->


</body>
</html>