
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
                    <a href="index.php?view=returns">Approve Returns</a>
                </li>
                <li>
                    <a href="index.php?view=checkout">Approve Checkouts</a>
                </li>
                <li>
                    <a href="index.php?view=hardware">Add Hardware</a>
                </li>
                <li>
                    <a href="index.php?view=category">Create Category</a>
                </li>
                <li>
                   <a href="" name="logout" id="logout" value="logout">Log out</a>
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
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 spaced">
					<a href="index.php?view=messages">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
										<h2>Check Messages</h2>
										<span class="glyphicon glyphicon-comment"></span>
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
                    <div class="col-lg-4 col-sm-6 spaced">
					<a href="index.php?view=returns">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
										<h2>Approve Returns</h2>
										<span class="glyphicon glyphicon-repeat icon-flipped"></span>					
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
                    <div class="col-lg-4 col-sm-6 spaced">
					<a href="index.php?view=checkouts">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
										<h2>Approve Checkouts</h2>
										<span class="glyphicon glyphicon-ok"></span>										
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
                    <div class="col-lg-6 col-sm-6 spaced">
					<a href="index.php?view=hardware">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
									<br/>
										<h2>Add Hardware</h2>
										<span class="glyphicon glyphicon-plus"></span>
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
                    <div class="col-lg-6 col-sm-6 spaced">
					<a href="index.php?view=category">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
									<br/>
										<h2>Create Category</h2>
										<span class="glyphicon glyphicon-th-large"></span>										
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
                </div>
<!-- end 2nd row -->
            </div>
        </div>
<!-- /#page-content-wrapper -->
    </div>
<!-- /#wrapper -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="admin_functions/admin_js.js"></script>
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