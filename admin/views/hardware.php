
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
       <div id="sidebar-wrapper">
            <ul class="sidebar-nav text-center">
                <li class="sidebar-brand">
                   <a href="index.php"><h1>Ordino</h1></a>
                </li>
                <li>
                    <a href="index.php?view=messages">Check Messages</a>
                </li>
                <li>
                    <a href="index.php?view=checkout">Approve Checkouts</a>
                </li>
                <li>
                    <a href="index.php?view=return">Approve Returns</a>
                </li>
                <li>
                    <a href="index.php?view=hardware">Manage Hardware<b class="caret"></b></a>
                </li>
					<ul class="submenu">
						<li>
							<a href="index.php?view=add">Add Hardware</a>
						</li>
						<li>
							<a href="index.php?view=edit">Edit Hardware</a>
						</li>
						<li>
							<a href="index.php?view=delete">Delete Hardware</a>
						</li>
					</ul>
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
			<h2 >Manage Hardware</h2>
				<p>Use the sidebar to navigate the hardware module. You may add, edit, or delete hardware. </p>
			<br />
			<br />
		</div>
		<!-- <form id="hardware_form" class="form-horizontal" method="post" action="/splash.php">
		  <div class="form-group">
			<label for="id" class="col-sm-2 control-label text-left">Hardware ID</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id" name="id" placeholder="ID">
				</div>
		  </div>
		  <div class="form-group">
			<label for="type" class="col-sm-2 control-label text-left">Type</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="type" name="type" placeholder="Type">
				</div>
		  </div>
		  <div class="form-group">
			<label for="type" class="col-sm-2 control-label text-left">Model</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="model" name="model" placeholder="Type">
				</div>
		  </div>
		  <div class="form-group">
			<label for="status" class="col-sm-2 control-label text-left">Status</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="status" name="status" placeholder="Status">
				</div>
		  </div>
		  <div class="form-group">
			<label for="desc" class="col-sm-2 control-label text-left">Description</label>
				<div class="col-sm-6">
					<textarea class="form-control" rows="5" id="description" name="description" placeholder="Description of hardware"></textarea>
				</div>
		  </div>
		  <div class="form-group">
			<label for="location" class="col-sm-2 control-label text-left">Location</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="location" name="location" placeholder="Location">
				</div>
		  </div>
		  <div class="form-group">
			<div class="col-xs-8">
				<input type="submit" class="btn btn-default pull-right" id="submit_hardware" name="addHardware" value="Submit">
			</div>
		  </div>
		</form>  -->
<!-- /#page-content-wrapper -->
    </div>
<!-- /#wrapper -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>		
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="admin_functions/admin_functions.js"></script>
</body>
</html>
