<?php
/*-----------------------START CONFIG-----------------------*/
//get the functions file and querying class
require($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');
require($_SERVER['DOCUMENT_ROOT'].'/include/classes/ssp.class.php');

//get current page filename
$url = $_POST['URL'];

// SQL server connection information
$sqlDetails = array(
    'user' => DB_USER,
    'pass' => DB_PASS,
    'db'   => DB_NAME,
    'host' => DB_HOST
);

//set up query variables based on current page
switch($url) {
    case "hardware.php":
        $table = 'hardware';
        $primaryKey = 'hardware_id';
        $maxLength = 5;
        break;
    case "returns.php":
        $table = 'loaned_hardware';
        $primaryKey = 'eagle_id';
        $maxLength = 5;
        break;
    default:
        $table = 'hardware';
        $primaryKey = 'hardware_id';
}

/*-----------------------END CONFIG-----------------------*/

//get table columns
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columnNames = get_column_heads($table);
$columns = array();

for($i = 0; $i < count($columnNames); $i++) {
    $pushArray = array( 'db' => $columnNames[$i], 'dt' => $i);
    array_push($columns,$pushArray);
}

//query and echo results
$results = SSP::simple( $_GET, $sqlDetails, $table, $primaryKey, $columns );
echo json_encode(linkDataTablesID($results,$url));

?>