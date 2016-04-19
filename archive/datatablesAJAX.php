<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

require($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

//get current page filename
$url = $_POST['URL'];

// SQL server connection information
$sqlDetails = array(
    'user' => DB_USER,
    'pass' => DB_PASS,
    'db'   => DB_NAME,
    'host' => DB_HOST
);

if($url==="returns.php") {
    $table = 'loaned_hardware';
    $primaryKey = 'eagle_id';
} else {
    // DB table to use
    $table = 'hardware';
     
    // Table's primary key
    $primaryKey = 'hardware_id';
}

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columnNames = get_column_heads("back",$table);
$columns = array();

for($i = 0; $i < count($columnNames); $i++) {
    $pushArray = array( 'db' => $columnNames[$i], 'dt' => $i);
    array_push($columns,$pushArray);
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require($_SERVER['DOCUMENT_ROOT'].'/include/classes/ssp.class.php');
 
$results = SSP::simple( $_GET, $sqlDetails, $table, $primaryKey, $columns );
echo json_encode(linkDataTablesID($results,$url));
?>