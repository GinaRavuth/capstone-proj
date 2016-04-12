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
    <link href="/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
    <link href="/css/simple-sidebar.css" rel="stylesheet">
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
<!-- Hardware Table -->
		<div class="container" style="margin-top: 120px;">
	<div class="row">
		<div class="col-md-12">
			
			<h1><?php echo $header; ?></h1>
			<p><?php echo $description; ?></p>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			
			<div class="input-group">
				<label class="control-label" id="label_category" for="cats">Choose Category: &nbsp; </label>
				<div class="selectContainer">
					<select name="categories" class="form-control" id="cats">
						<option value="select" selected disabled>Select Type</option>
						<?php foreach($types as $type): ?>
						<option value="<?php echo $type ?>"><?php echo $type ?></option>                
						<?php endforeach; ?>
					</select>
				</div>
			</div>
	
			<table class="table table-striped table-bordered" id="dataTable">
				<thead>
					<tr>
					<?php foreach($columns as $tableHead): ?>
						<th><?php echo $tableHead; ?></th>
					<?php endforeach; ?>
					</tr>
				</thead>
				<tbody id="tableBody">
				</tbody>
			</table>

		</div>
	</div>
</div>
<!-- End Table -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
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
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/js.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/datatablesJS.php');?>
<!--end scripts -->
</body>
</html>