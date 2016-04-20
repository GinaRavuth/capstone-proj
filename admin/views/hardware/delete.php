<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
    <title>Ordino - Admin Dashboard</title>
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
         <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_nav.php'); ?>
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
			<h2 >Delete Hardware</h2>
				<p>Please enter the ID of the item to remove from the database.</p>
			<br />
			<br />
		</div>
		<form id="hardware_form" class="form-horizontal" method="post" action="/splash.php">
		  <div class="form-group">
			<label for="id" class="col-sm-2 control-label text-left">Hardware ID</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id" name="id" placeholder="ID">
				</div>
		  </div>
		  <div class="form-group">
			<div class="col-xs-8">
				<input type="submit" class="btn btn-default pull-right" id="submit_hardware" name="delete" value="Delete Hardware">
			</div>
		  </div>
		</form>
<!-- /#page-content-wrapper -->
    </div>
<!-- /#wrapper -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>		
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="admin_functions/admin_functions.js"></script>
</body>
</html>