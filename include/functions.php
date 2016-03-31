<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/config/db.php');
function open_database_connection() {
    $host = DB_HOST;
    $name = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;
    $link = new PDO("mysql:host=$host;dbname=$name",$user,$pass);
    
    return $link;
}
function close_database_connection($link) {
    $link = null;
}
function get_column_heads($var,$table) {
    $link = open_database_connection();
    $sql = "DESCRIBE $table";
    $result = $link->prepare($sql);
    $result->execute();
    $columns = $result->fetchAll(PDO::FETCH_COLUMN);
    
    close_database_connection($link);
    
    //if table is hardware, perform front/backend cleanup of columns
    if($table==="hardware") {
        unset($columns[6]);
        unset($columns[7]);    
    }
    if($var==="front") {
        for ($i=0; $i<count($columns); $i++) {
            $columns[$i] = str_replace("_"," ",$columns[$i]);
            $columns[$i] = ucwords($columns[$i]);
        }
    }
    
    return($columns);
}
function get_types() {
    $link = open_database_connection();
    $sql = 'SELECT DISTINCT type FROM hardware';
    $result = $link->prepare($sql);
    $result->execute();
    
    $types = $result->fetchAll(PDO::FETCH_COLUMN);
    
    close_database_connection($link);
    
    return($types);
    
}
function get_hardware() {
    $link = open_database_connection();
    $sql = 'SELECT hardware_id, type, status, model, notes, location FROM hardware';
    
    $sql .= ' ORDER BY hardware_id';
    
    $query = $link->prepare($sql);
    
    $query->execute();
    
    $hardware = array();
    
    while($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $hardware[] = $row;
    }
    
    close_database_connection($link);
    
    return($hardware);
    
}
function formatBody($content) {
    $result = '';
    foreach($content as $item):
    $result .=
    '<tr>
        <td>'.$item['hardware_id'].'</td>
        <td>'.$item['type'].'</td>
        <td>'.$item['status'].'</td>
        <td>'.$item['model'].'</td>
        <td>'.$item['notes'].'</td>
        <td>'.$item['location'].'</td>
    </tr>';
    endforeach;
    
    return $result;
}
function linkDataTablesID($array,$url) {
    //get size of array returned from SQL database
    $a = count($array['data']);
    $b = 0;
    
    //get the current url to see where to direct user
    switch($url) {
        case 'hardware.php':
            $destinationURL = 'checkout.php';
            break;
        case 'returns.php':
            $destinationURL = 'hardware-return.php';
            break;
        default:
            $destinationURL = '#';
    }
    
    //loop through array and change id table cell to a link taking the user to a checkout or return page based on their origin.
    do {
        $id = $array['data'][$b][0];
        $type = $array['data'][$b][1];
        $status = $array['data'][$b][2];
        $model = $array['data'][$b][3];
        $notes = $array['data'][$b][4];
        $location = $array['data'][$b][5];
        $array['data'][$b][0] = "<a href='$destinationURL?id=$id&type=$type&status=$status&model=$model&notes=$notes&location=$location'>$id</a>";
        $b++;
    } while ($b < $a);
    
    return $array;
}
?>