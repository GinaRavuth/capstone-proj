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
		<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/mobile_nav.php'); ?>
<!-- End top navbar -->
<!-- Page Content -->
		<div class="col-sm-12" id="message">
			<div id="content_header">
				<h2>Message Inbox</h2>
				<p class="inbox">Check your messages below.</p>
				<hr />
				<div class="error">
				</div>
			</div>
			<table class="table table-hover" id="message_table">	
			</table>
		</div>
<!-- End page content -->
    </div>
<!-- End wrapper -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_script.php'); ?>
</body>
</html>
