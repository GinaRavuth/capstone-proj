<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_head.php'); ?>
    <title>Ordino - Admin Dashboard</title>
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
<!-- End page content -->
    </div>
<!-- End wrapper -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_script.php'); ?>
</body>
</html>
