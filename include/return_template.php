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
				<br />
				<h2 class="bold"><?php echo $description_title; ?></h2>		
				<p><?php echo $description; ?></p>
			</div>
		</div>
        <div class="row">
            <div class="col-md-8">
                <h2 class="bold">Important!</h2>
                <p><strong>Before returning</strong>, please check that your hardware has been placed in its original location. If the hardware cannot be located by the approver your return will be denied and you will continue to be responsible for your hardware.</p>
				<br />
                <form class="form-horizontal" method="post" action="splash.php">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="submit" class="btn btn-default pull-right" name="Return" id="submit" name="submit" value="Process Return">
                        </div>
                    </div>
                </form>                     
            </div>
       
        </div>

	</div> 
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/templateparts/js.php');?>  
<!--end scripts -->
</body>
</html>