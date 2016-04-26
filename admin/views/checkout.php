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
		<div class="col-sm-12" id="checkout">
			<div id="content_header">
				<h2>Approve Checkouts</h2>
				<p class="inbox">Approve pending checkouts</p>
				<hr />
				<div class="error">
				</div>
			</div>
			<table class="table table-hover" id="checkout_table">	
			</table>
		</div>
<!-- End page content -->
    </div>
<!-- End wrapper -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_functions/checkout/checkout_script.php'); ?>
</body>
</html>
