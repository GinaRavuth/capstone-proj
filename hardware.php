<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

//config
$columnSetting = "front";   

//initialize page variables
$title = ucfirst(basename(__FILE__, '.php'));
$header = 'Find Hardware';
$description = 'This section will tell about the different "categories" in the system. It will describe each category so users can know where to look for their item and have a better experience.';
$columns = get_column_heads($columnSetting);
$types = get_types();
$type = NULL;
$hardware = formatBody(get_hardware($type));

require_once($_SERVER['DOCUMENT_ROOT'].'/include/tabletemplate.php');
?>