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
    //this needs to be refactored to use bindParam instead of direct variable injection
    $sql = "DESCRIBE $table";
    $result = $link->prepare($sql);
    $result->execute();
    $columns = $result->fetchAll(PDO::FETCH_COLUMN);
    
    close_database_connection($link);
    
    //if table is hardware, perform front/backend cleanup of columns
    if($table==="hardware") {
        unset($columns[6]);
        unset($columns[7]);    
    } elseif($table==="loaned_hardware") {
        unset($columns[4]);
        unset($columns[5]);
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
    if($url==='hardware.php') {
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
    } elseif($url==='returns.php') {
        do {
            $id = $array['data'][$b][0];
            $eId = $array['data'][$b][1];
            $name = $array['data'][$b][2];
            $date = $array['data'][$b][3];
            $array['data'][$b][0] = "<a href='$destinationURL?id=$id&eID=$eId&name=$name&date=$date'>$id</a>";
            $b++;
        } while ($b < $a);        
    }
    
    return $array;
}
function checkIfExists($id, $table) {
    $link = open_database_connection();
    
    $sql = "SELECT hardware_id FROM $table WHERE hardware_id = :id";
    $query = $link->prepare($sql);
    $query->bindParam(':id',$id);
    
    $query->execute();

    $rows = $query->fetchAll(PDO::FETCH_NUM);
    
    if(count($rows) >= 1) {
        return 1;
    } else {
        return 0;
    }
}
function moveToLoaned($id, $name, $eId, $reason) {
    $link = open_database_connection();
    
    $date = date('Y-m-d G:i:s');
    
    $sql = "INSERT INTO loaned_hardware (hardware_id, eagle_id, name, date_out) VALUES ((SELECT hardware_id FROM hardware WHERE hardware_id=:hardware_id), :eagle_id, :name, :date)";
    $insert = $link->prepare($sql);
    $insert->bindParam(':hardware_id',$id);
    $insert->bindParam(':eagle_id',$eId);
    $insert->bindParam(':name',$name);
    $insert->bindParam(':date', $date);

    
    if($insert->execute()) {
        $status = "Checkout successful";
    } else {
        $status = "Checkout unsuccessful";
    }
    
    return $status;
}
?>