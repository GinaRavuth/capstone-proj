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
	 <?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/css.php'); ?>
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
                    <a href="index.php?view=checkouts">Approve Checkouts</a>
                </li>
                <li>
                    <a href="index.php?view=hardware">Add Hardware</a>
                </li>
                <li>
                    <a href="index.php?view=category">Create Category</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#logOut">Log Out</a>
                </li>
            </ul>
        </div>
<!-- /#sidebar-wrapper -->
<!-- nav bar at top -->
		<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<h1>Ordino</h1>
		</div>
		</nav>
<!-- end nav -->		
<!-- Page Content -->
		<div class="col-sm-12 ">
			<h2>Approve Checkouts</h2>
			<p>Please select checkouts to approve. <br>To approve, please select checkout request, read over the request, and then click Submit to approve.</p>
			<br><br>
			<table class="table table-striped table-bordered" id="datatable">
			<tr>
				<th>Item ID</th>
				<th>Type</th>
				<th>Status</th>
				<th>Location</th>
			</tr>
			<tr>
				<td>1</td>
				<td>TV</td>
				<td>Not Available</td>
				<td>Rm 2208</td>				
			</tr>
			<tr>
				<td>2</td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>3</td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>4</td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>5</td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>6</td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>7</td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>8</td>
				<td></td>
				<td></td>
				<td></td>				
			</tr>
			</table>	
		<div class="form-group">
		<div class="col-xs-12">
			<button type="submit" class="btn btn-default pull-right" id="submit">Approve</button>
		</div>		
		</div>
<!-- /#page-content-wrapper -->
    </div>
<!-- /#wrapper -->
<!-- Modal -->
			<div class="modal fade" id="logOut" tabindex="-1" role="dialog" aria-labelledby="logOut">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  </div>
				  <div class="modal-body">
				  <p>Are you sure you want to log out?</p>
					<div id="log_buttons">
						<button type="button" class="btn btn-primary">Yes</button>&nbsp;&nbsp;
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
					</div>
				  </div>
				</div>
			  </div>
			</div>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- jQuery -->
    <script src="/js/jquery.js"></script>
<!-- Menu Toggle Script -->
    <script>
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
		});
    </script>
</body>
</html>