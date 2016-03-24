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
 
// DB table to use
$table = 'hardware';
 
// Table's primary key
$primaryKey = 'hardware_id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columnNames = get_column_heads("back");

$columns = array(
    array( 'db' => $columnNames[0], 'dt' => 0 ),
    array( 'db' => $columnNames[1], 'dt' => 1 ),
    array( 'db' => $columnNames[2], 'dt' => 2 ),
    array( 'db' => $columnNames[3], 'dt' => 3 ),
    array( 'db' => $columnNames[4], 'dt' => 4 ),
    array( 'db' => $columnNames[5], 'dt' => 5 ),
);
 
// SQL server connection information
$sqlDetails = array(
    'user' => DB_USER,
    'pass' => DB_PASS,
    'db'   => DB_NAME,
    'host' => DB_HOST
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require($_SERVER['DOCUMENT_ROOT'].'/include/classes/ssp.class.php');
 
echo json_encode(
    SSP::simple( $_GET, $sqlDetails, $table, $primaryKey, $columns )
);