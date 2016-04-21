<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_head.php'); ?>
</head>
<body>
<!-- Wrapper -->
    <div id="wrapper">
		<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_nav.php'); ?>
<!-- Admin dashboard top navbar -->
		<nav class="navbar navbar-default navbar-static-top">
		  <div id="page" class="container">
			<h1>Ordino</h1>
		  </div>
		</nav>
<!-- End top navbar -->
<!-- Page Content -->
		<div id="content_header" class="col-sm-6">
			<h2 >Manage Accounts</h2>
			<p>Use this module to manage admin accounts. You may add, edit, or delete accounts.</p>
			<br />
		</div>
		 <div id="manage_hardware">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 spaced">
					<a href="index.php?view=create_account">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
										<h2>Add Account</h2>
										<span class="glyphicon glyphicon-plus"></span>
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
                    <div class="col-lg-4 col-sm-6 spaced">
					<a href="index.php?view=edit_account">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
										<h2>Edit Account</h2>
										<span class="glyphicon glyphicon-edit"></span>					
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
                    <div class="col-lg-4 col-sm-6 spaced">
					<a href="index.php?view=delete_account">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
										<h2>Delete Account</h2>
										<span class="glyphicon glyphicon-trash"></span>										
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
				</div>
			</div>
		</div>
<!-- End page content -->
    </div>
<!-- End wrapper -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_script.php'); ?>
</body>
</html>
