<!DOCTYPE html>
<html>
<head>
	<title>Ordino - Admin Registration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='css/local-index.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body id="background">
<div class="container">
		<div class="row centered">
				<div class="col-lg-12 center-block dec-marg">
					<h1>Ordino</h1>
					<h3 style="text-align:center">Admin Registration</h3>
				</div>
		</div>
<div class="row">
	<div class="col-sm-4"></div>
	<div class="form-group col-sm-4"><br>
		<p>Please fill out form below.</p>
		<form>
			<label for="user">Username  </label><input type="text" placeholder="Letters and numbers only" id="user" class="form-control" required><br>
			<label for="email">Email  </label><input type="email" placeholder="Email address" id="email" class="form-control" required><br>
			<label for="pwd">Password  </label><input type="password" placeholder="6 character minimum" id="pwd" class="form-control" required><br>
			<label for="pwd-repeat">Re-Enter Password  </label><input type="password" placeholder="Re-enter password" id="pwd-repeat" class="form-control" required><br>
	</div>
	<div class="col-sm-4"></div>

</div>
<div class="text-center button-index">
	<a href="hardware.html">
		<button type="button" class="btn">Register</button>
	</a>
</div>
		</form>
</div>


<!--  scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- end scripts -->


</body>
</html>