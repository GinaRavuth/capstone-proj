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
        $alias1 = 'h';
        $alias2 = 'l';
        $joinQuery = "FROM hardware AS $alias1 LEFT JOIN loaned_hardware AS $alias2 ON $alias1.hardware_id = $alias2.loaned_hardware_id WHERE $alias2.loaned_hardware_id IS NULL";
        break;
    case "returns.php":
        $table = 'loaned_hardware';
        $primaryKey = 'eagle_id';
        $where = 'checkout_auth = 1';
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



if(isset($joinQuery)) {
    $results = SSP::simple( $_GET, $sqlDetails, $table, $primaryKey, $columns, $joinQuery);    
} elseif(isset($where)) {
    $results = SSP::complex( $_GET, $sqlDetails, $table, $primaryKey, $columns, $where);
} else {
    $results = SSP::simple( $_GET, $sqlDetails, $table, $primaryKey, $columns);
}

//query and echo results

echo json_encode(linkDataTablesID($results,$url));

?>