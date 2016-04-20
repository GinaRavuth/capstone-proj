<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_head.php'); ?>
    <title>Ordino - Admin Dashboard</title>
</head>
<body>
<!-- Admin dashboard top navbar -->
		<a href="/index.html"><nav class="navbar navbar-default navbar-static-top">
		<div id="home" class="container">
			<h1>Ordino</h1>
			<p>Dashboard</p>
		</div>
		</nav>
		</a>
<!-- End top navbar -->
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
					<a href="index.php?view=checkout">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
										<h2>Approve Checkouts</h2>
										<span class="glyphicon glyphicon-repeat icon-flipped"></span>					
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
                    <div class="col-lg-4 col-sm-6 spaced">
					<a href="index.php?view=return">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
										<h2>Approve Returns</h2>
										<span class="glyphicon glyphicon-ok"></span>										
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
                    <div class="col-lg-4 col-sm-6 spaced">
					<a href="index.php?view=manage_hardware">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
									<br/>
										<h2>Manage Hardware</h2>
										<span class="glyphicon glyphicon-plus"></span>
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
					<div class="col-lg-4 col-sm-6 spaced">
					<a href="index.php?view=manage_accounts">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
									<br/>
										<h2>Manage Accounts</h2>
										<span class="glyphicon glyphicon-user"></span>
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
					<div class="col-lg-4 col-sm-6 spaced">
					<a href="" id="logout">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
									<br/>
										<h2>Log Out </h2>
										<span class="glyphicon glyphicon-log-out"></span>
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End content -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_script.php'); ?>
</body>
</html>
