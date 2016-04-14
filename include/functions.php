<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/config/db.php');
/*-----DATABASE FUNCTIONS-----*/
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
/*----------------*/

/*-----Column Heads-----*/
//gets raw column head information used for backend function and querying
function get_column_heads($table) {
    $link = open_database_connection();
    
    $sql = "DESCRIBE $table";
    $result = $link->prepare($sql);
    $result->execute();
    $columns = $result->fetchAll(PDO::FETCH_COLUMN);
    
    close_database_connection($link);
    
    return($columns);
}

//removes extra columns from array, maxLength is number of columns you want to truncate to
function truncate_columns($columns,$maxLength) {
    $arrLength = count($columns);
    
    for ($i = $maxLength; $i<=$arrLength; $i++) {
        unset($columns[$i]);
    }
    
    return $columns;
}

//formats column heads for display, capitalizes letters, replaces underscores with whitespaces
function format_column_heads($columns) {
    for ($i=0; $i<count($columns); $i++) {
        $columns[$i] = str_replace("_"," ",$columns[$i]);
        $columns[$i] = ucwords($columns[$i]);
    }
    
    return $columns;
}
/*----------------*/

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

function linkDataTablesID($array,$url) {
    //get size of array returned from SQL database
    $a = count($array['data']);
    $b = 0;
    
    //get the current url to see where to direct user
    switch($url) {
        case 'hardware.php':
            $destinationURL = 'checkout.php';
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
            break;
        case 'returns.php':
            $destinationURL = 'hardware-return.php';
            do {
                $id = $array['data'][$b][0];
                $eId = $array['data'][$b][1];
                $name = $array['data'][$b][2];
                $date = $array['data'][$b][3];
                $array['data'][$b][0] = "<a href='$destinationURL?id=$id&eID=$eId&name=$name&date=$date'>$id</a>";
                $b++;
            } while ($b < $a);   
            break;
        default:
            $destinationURL = '#';
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
        $status = 1;
    } else {
        $status = 0;
    }
    
    return $status;
}

function addHardware($id, $type, $model, $status, $description, $location){
	$link = open_database_connection();
	 
	$sql = "INSERT INTO hardware (hardware_id, type, model, status, notes, location) VALUES (:id, :type, :model, :status, :notes, :location)";
	$insert = $link->prepare($sql);
	$insert->bindParam(':id',$id);
	$insert->bindParam(':type',$type);
	$insert->bindParam(':model',$model);
	$insert->bindParam(':status',$status);
	$insert->bindParam(':notes',$notes);
	$insert->bindParam(':location',$location);
	
	 if($insert->execute()) {
        $status = "Checkout successful";
    } else {
        $status = "Checkout unsuccessful";
    }
    
    return $status;
}

function message($name, $email, $subject, $message){
	$link = open_database_connection();
	
	$sql = "INSERT INTO messages (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
	
	$insert = $link->prepare($sql);
	$insert->bindParam(':name',$name);
	$insert->bindParam(':email',$email);
	$insert->bindParam(':subject',$subject);
	$insert->bindParam(':message',$message);
	
	$insert->execute();
}
?>