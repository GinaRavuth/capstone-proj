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
function get_hardware() {
    $link = open_database_connection();
    $sql = 'SELECT hardware_id, type, status, model, notes, location FROM hardware';
    
    /*This section should contain code for adding parameters to the query, probably from GET variables passed via AJAX
     *build out the queries for refining hardware selection
     */
    
    $result = $link->query($sql);
    $hardware = array();
    
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $hardware[] = $row;
    }
    
    close_database_connection($link);
    
    return($hardware);
    
}
?>