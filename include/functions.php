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
function get_column_heads($var) {
    $link = open_database_connection();
    $sql = 'DESCRIBE hardware';
    $result = $link->prepare($sql);
    $result->execute();
    $columns = $result->fetchAll(PDO::FETCH_COLUMN);
    
    close_database_connection($link);
    
    if($var == "front") {
        unset($columns[6]);
        unset($columns[7]);        
    }

    for ($i=0; $i<count($columns); $i++) {
        $columns[$i] = str_replace("_"," ",$columns[$i]);
        $columns[$i] = ucwords($columns[$i]);
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
    
    /*This section should contain code for adding parameters to the query, probably from GET variables passed via AJAX
     *build out the queries for refining hardware selection
     */
    $order = ' ORDER BY hardware_id';
    
    $sql .= $order;
    
    $result = $link->query($sql);
    $hardware = array();
    
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
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
?>