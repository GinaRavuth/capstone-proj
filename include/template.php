<!DOCTYPE html>
<html>
<head>
	<title>Ordino - Hardware</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/css.php'); ?>

</head>
<body >
  <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
					<a class="navbar-brand" href="#">
					<h1 id="ordino">Ordino</h1>
					</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html" class="active">Home</a>
                    </li>
                    <li>
                        <a href="hardware.html">Hardware</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="returns.html">Returns</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  


<div class="container" style="margin-top: 120px;">
	<div class="row">
		<div class="col-md-12">
		<h2 >Find Hardware</h2>
		<p>This section will tell about the different "categories" in the system. It will describe each category so users can know where to look for their item and have a better experience.</p>
<br />

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
    <tbody>
        <?php foreach($hardware as $item): ?>
        <tr>
            <td><?php echo $item['hardware_id']; ?></td>
            <td><?php echo $item['type']; ?></td>
            <td><?php echo $item['status']; ?></td>
            <td><?php echo $item['model']; ?></td>
            <td><?php echo $item['notes']; ?></td>
            <td><?php echo $item['location']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

		</div>
	</div>
</div>


<!--scripts -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/js.php'); ?>

<script>
$(document).ready(function(){
    $('#dataTable').DataTable();
});
</script>
  
  <!--end scripts -->
</body>
</html>