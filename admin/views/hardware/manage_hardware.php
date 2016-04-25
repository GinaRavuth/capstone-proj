<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_head.php'); ?>
</head>
<body>
<!-- Wrapper -->
    <div id="wrapper">
		<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_nav.php'); ?>
		<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/mobile_nav.php'); ?>
<!-- Page Content -->
		<div id="content_header" class="col-sm-12">
			<h2>Manage Hardware</h2>
			<p>Use this module to manage hardware. You may add, edit, or delete hardware</p>
			<hr />
			<br />
		</div>
		 <div id="manage_hardware">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 spaced">
					<a href="index.php?view=add">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
										<h2>Add Hardware</h2>
										<span class="glyphicon glyphicon-plus"></span>
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
                    <div class="col-lg-4 col-sm-6 spaced">
					<a href="index.php?view=edit">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
										<h2>Edit Hardware</h2>
										<span class="glyphicon glyphicon-edit"></span>					
									</div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
                    <div class="col-lg-4 col-sm-6 spaced">
					<a href="index.php?view=delete">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div><br/><br/>
									<div class="col-lg-12 text-center">
										<h2>Delete Hardware</h2>
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
