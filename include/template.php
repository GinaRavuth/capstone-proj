<!DOCTYPE html>
<html>
<head>
	<title>Ordino - Hardware</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/css.php'); ?>

</head>
<body >
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/navbar.php'); ?>


<div class="container" style="margin-top: 120px;">
	<div class="row">
		<div class="col-md-12">
		<h2 >Find Hardware</h2>
		<p>This section will tell about the different "categories" in the system. It will describe each category so users can know where to look for their item and have a better experience.</p>
<br />

    <div class="input-group">
        <label class="control-label" id="label_category" for="cats">Choose Category: &nbsp; </label>
        <div class="selectContainer">
            <select name="categories" class="form-control" id="cats" onchange="getCategory(this.value)">
                <option value="select">Select Type</option>
                <?php foreach($types as $type): ?>
                <option value="<?php echo $type ?>"><?php echo $type ?></option>                
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<div id="txtHint"></div>
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
//initialize data-tables.js
$(document).ready(function(){
    $('#dataTable').DataTable();
});

function getCategory(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","/include/hardware.php?cat="+str,true);
        xmlhttp.send();
    }
}
</script>
  
  <!--end scripts -->
</body>
</html>