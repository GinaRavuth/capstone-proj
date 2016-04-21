<!DOCTYPE html>
<html>
<head>
	<title>About Ordino</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/local.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet" type='text/css'>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/favicon.php'); ?>
</head>
<body >
<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
					<a class="navbar-brand" href="index.html">
					<h1 id="ordino">Ordino</h1>
					</a>
            </div>
            <div class="collapse navbar-collapse nav-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html" class="active">Home</a>
                    </li>
                    <li>
                        <a href="hardware.php">Hardware</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="returns.php">Returns</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- End navigation -->
<!-- Page content -->
    <div class="container" style="margin-top: 120px;">
		<div class="row">
			<div class="col-md-12">
				<h2 class="bold">How It Started</h2>
					<p>
					Ordino is the culmination of our group's desire to develop a compact and agile system to solve a particular need within Georgia Southern's IT Department. We noticed a particular problem with the traceability of student accessible hardware in the IT labs. Thus, the idea for Ordino was born. 
					</p>
					<br />
				<h2 class="bold">How It Works</h2>
					<p>
					To use Ordino, simply select a hardware item from the tables, fill out the form on the product page, and submit the request. It’s that simple. To return, simply select the hardware which you previously checked out from the Returns page, fill out the form, and submit the return request. 
					</p>
					<br />
			</div>
		</div>
		<h2 class="bold">Contact Us</h2>
		<br />
		<form class="form-horizontal" method="post" action="splash.php">
			<div class="form-group">
				<label for="name" class="col-sm-1 control-label text-left">Name</label>
				<div class="col-sm-11">
					<input type="text" class="form-control" name="name" id="name" placeholder="Name">
				</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-1 control-label text-left">E-Mail</label>
				<div class="col-sm-11">
					<input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
				</div>
			</div>
			<div class="form-group">
			<label for="subject" class="col-sm-1 control-label text-left">Subject</label>
				<div class="col-sm-11">
					<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
				</div>
			</div>
			<div class="form-group">
			<label for="message" class="col-sm-1 control-label text-left">Message</label>
				<div class="col-sm-11">
					<textarea class="form-control" rows="5" name="message" id="message" placeholder="What's on your mind? (500 Character Limit)"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-12">
					<input type="submit" class="btn btn-default pull-right" id="message_submit" name="Submit" value="Submit"> 
				</div>
			</div>
		</form>
	</div>
<!-- End page content -->
<!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- End scripts -->
</body>
</html>
