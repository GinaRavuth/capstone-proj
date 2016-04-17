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
                    <a id="hardware" href="index.php?view=hardware">Manage Hardware <b class="caret"></b></a>
                </li>
					<ul id="submenu">
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
		<div class="col-sm-8" id="message">
			<h2>Message Inbox</h2>
			<p>Check your messages below.</p>
			<div class="error">
			
			</div>
			<br />
			<table class="table table-striped table-bordered" id="message_table">
				
			</table>	
		</div>
<!-- /#page-content-wrapper -->
    </div>
<!-- /#wrapper -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="admin_functions/admin_functions.js"></script>
	<script type="text/javascript" src="admin_functions/message/message_functions.js"></script>
</body>
</html>
