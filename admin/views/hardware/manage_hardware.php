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
		<div class="col-sm-12">
			<h2 >Manage Hardware</h2>
				<p>Use this module to manage your hardware. You may add, edit, or delete hardware.</p>
			<br />
			<br />
		</div>
<!-- End page content -->
    </div>
<!-- End wrapper -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/admin_template/admin_script.php'); ?>
</body>
</html>
