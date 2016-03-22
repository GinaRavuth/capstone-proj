<!DOCTYPE html>
<html>
<head>
	<title>Ordino - <?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/css.php'); ?>

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
	
	<div class="row">
		<div class="col-md-12">
			
			<div class="input-group">
				<label class="control-label" id="label_category" for="cats">Choose Category: &nbsp; </label>
				<div class="selectContainer">
					<select name="categories" class="form-control" id="cats">
						<option value="select">Select Type</option>
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


<!--scripts -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/js.php');?>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/js_functions.php');?>
  
  <!--end scripts -->
</body>
</html>