<!DOCTYPE html>
<html>
<head>
	<title>Ordino - <?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/css.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/favicon.php'); ?>
</head>
<body >
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/navbar.php'); ?>
	<div class="container" style="margin-top: 120px;">
		<div class="row">
			<div class="col-md-12">	
				<h1><?php echo $header; ?></h1>
				<p><?php echo $description; ?></p>
			</div>
		</div>
	<div class="form-inline dt-boostrap">
	<div class="row">
		<div class="col-xs-12">
			<div class="input-group">
				<label class="control-label" id="label_category" for="cats">Choose Category: &nbsp; </label>
				<div class="selectContainer">
					<select name="categories" class="form-control" id="cats">
						<option value="select" selected disabled>Select Type</option>
						<option value="">All Categories</option>
						<?php foreach($types as $type): ?>
						<option value="<?php echo $type ?>"><?php echo $type ?></option>                
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<br />
			<table class="table table-striped table-bordered"  id="dataTable">
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
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/js.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/datatablesJS.php');?>
</body>
</html>