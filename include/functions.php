<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/admin/config/db.php');

/*-----DATABASE FUNCTIONS-----*/

function open_database_connection()
{
	$host = DB_HOST;
	$name = DB_NAME;
	$user = DB_USER;
	$pass = DB_PASS;
	$link = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
	return $link;
}

function close_database_connection($link)
{
	$link = null;
}

/*----------------*/
/*-----Column Heads-----*/

// gets raw column head information used for backend function and querying

function get_column_heads($table)
{
	$link = open_database_connection();
	$sql = "DESCRIBE $table";
	$result = $link->prepare($sql);
	$result->execute();
	$columns = $result->fetchAll(PDO::FETCH_COLUMN);
	close_database_connection($link);
	return ($columns);
}

// removes extra columns from array, maxLength is number of columns you want to truncate to

function truncate_columns($columns, $maxLength)
{
	$arrLength = count($columns);
	for ($i = $maxLength; $i <= $arrLength; $i++) {
		unset($columns[$i]);
	}

	return $columns;
}

// formats column heads for display, capitalizes letters, replaces underscores with whitespaces

function format_column_heads($columns)
{
	for ($i = 0; $i < count($columns); $i++) {
		$columns[$i] = str_replace("_", " ", $columns[$i]);
		$columns[$i] = ucwords($columns[$i]);
	}

	return $columns;
}

/*----------------*/

function get_types()
{
	$link = open_database_connection();
	$sql = 'SELECT DISTINCT type FROM hardware';
	$result = $link->prepare($sql);
	$result->execute();
	$types = $result->fetchAll(PDO::FETCH_COLUMN);
	close_database_connection($link);
	return ($types);
}

function get_hardware()
{
	$link = open_database_connection();
	$sql = 'SELECT hardware_id, type, status, model, notes, location FROM hardware';
	$sql.= ' ORDER BY hardware_id';
	$query = $link->prepare($sql);
	$query->execute();
	$hardware = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$hardware[] = $row;
	}

	close_database_connection($link);
	return ($hardware);
}

function linkDataTablesID($array, $url)
{

	// get size of array returned from SQL database

	$a = count($array['data']);
	$b = 0;

	// get the current url to see where to direct user

	switch ($url) {
	case 'hardware.php':
		$destinationURL = 'hardware_request.php';
		if ($a > 0) {
		do {
			$id = $array['data'][$b][0];
			$type = $array['data'][$b][1];
			$status = $array['data'][$b][2];
			$model = $array['data'][$b][3];
			$notes = $array['data'][$b][4];
			$location = $array['data'][$b][5];
			$array['data'][$b][0] = "<a href='$destinationURL?id=$id&type=$type&status=$status&model=$model&notes=$notes&location=$location'>$id</a>";
			$b++;
		}

		while ($b < $a);
		}
		break;

	case 'returns.php':
		$destinationURL = 'return_request.php';

		// check to see if there is data in the table
		// since the returns table may have no items currently out, if this do/while runs it will throw an undefined index error for an empty array

		if ($a > 0) {
			do {
				$id = $array['data'][$b][0];
				$eID = $array['data'][$b][1];
				$name = $array['data'][$b][2];
				$date = $array['data'][$b][3];
				$array['data'][$b][0] = "<a href='$destinationURL?id=$id&eID=$eID&name=$name&date=$date'>$id</a>";
				$b++;
			}

			while ($b < $a);
		}

		break;

	default:
		$destinationURL = '#';
	}

	return $array;
}

function checkIfExists($id, $table)
{
	$link = open_database_connection();
	$sql = "SELECT hardware_id FROM $table WHERE hardware_id = :id";
	$query = $link->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();
	$rows = $query->fetchAll(PDO::FETCH_NUM);
	if (count($rows) >= 1) {
		return 1;
	}
	else {
		return 0;
	}
}

function check_user($user, $table)
{
	$link = open_database_connection();
	$sql = "SELECT user_name FROM $table WHERE user_name = :user";
	$query = $link->prepare($sql);
	$query->bindParam(':user', $user);
	$query->execute();
	$rows = $query->fetchAll(PDO::FETCH_NUM);
	if (count($rows) >= 1) {
		return 1;
	}
	else {
		return 0;
	}
}

function moveToLoaned($id, $name, $eId, $reason)
{
	$link = open_database_connection();
	$date = date('Y-m-d G:i:s');
	$sql = "INSERT INTO loaned_hardware (loaned_hardware_id, eagle_id, name, date_out) VALUES ((SELECT hardware_id FROM hardware WHERE hardware_id=:loaned_hardware_id), :eagle_id, :name, :date)";
	$insert = $link->prepare($sql);
	$insert->bindParam(':loaned_hardware_id', strip_tags($id));
	$insert->bindParam(':eagle_id', intval($eId));
	$insert->bindParam(':name', strip_tags($name));
	$insert->bindParam(':date', $date);
	if ($insert->execute()) {
		$status = 1;
	}
	else {
		$status = 0;
	}

	return $status;
}

function getReturns() {
	$link = open_database_connection();
	$sql = "SELECT loaned_hardware_id_, name, eagle_id, date_out FROM loaned_hardware WHERE return_auth=1";
	$select = $link->prepare($sql);
	$select->execute();
	$returns = array();
	while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
		$returns[] = $row;
	}

	close_database_connection($link);
	return ($returns);
}

function getApprovals() {
	$link = open_database_connection();
	$sql = "SELECT loaned_hardware_id, name, eagle_id, date_out FROM loaned_hardware WHERE checkout_auth=0";
	$select = $link->prepare($sql);
	$select->execute();
	$checkouts = array();
	while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
		$checkouts[] = $row;
	}

	close_database_connection($link);
	return ($checkouts);
}

function approveCheckout($id) {
	$link = open_database_connection();
	$sql = 'UPDATE loaned_hardware SET checkout_auth=1 WHERE loaned_hardware_id = :id';
	$update = $link->prepare($sql);
	$update->bindParam(':id', $id);
	$update->execute();	
	
	close_database_connection($link);
}

function returnHardware($id) {
    $link = open_database_connection();
	$sql = 'UPDATE loaned_hardware SET return_auth=1 WHERE loaned_hardware_id = :id';
	$update = $link->prepare($sql);
	$update->bindParam(':id', $id);
		
	if($update->execute()) {
		$status = 1;
	} else {
		$status = 0;
	}
	
	return $status;
}

// Add hardware to database for backend

function add_hardware($id, $type, $model, $status, $description, $location)
{
	$link = open_database_connection();
	$sql = "INSERT INTO hardware (hardware_id, type, model, status, notes, location) VALUES (:id, :type, :model, :status, :notes, :location)";
	$insert = $link->prepare($sql);
	$insert->bindParam(':id', $id);
	$insert->bindParam(':type', $type);
	$insert->bindParam(':model', $model);
	$insert->bindParam(':status', $status);
	$insert->bindParam(':notes', $notes);
	$insert->bindParam(':location', $location);
	if ($insert->execute()) {
		$status = "Checkout successful";
	}
	else {
		$status = "Checkout unsuccessful";
	}

	return $status;
}

// Front-end message push with splash text

function message_push($name, $email, $subject, $message)
{
	if (empty($_POST['name']) AND empty($_POST['email']) AND empty($_POST['subject']) AND empty($_POST['message'])) {
		$array = array(
			"display" => "Please fill out all fields!",
			"status" => "Click return to re-submit your message.",
			"url" => "javascript:history.go(-1)",
			"text" => 'Return'
		);
		return $array;
	}
	else {
		message($name, $email, $subject, $message);
		$array = array(
			"display" => "Message Sent!",
			"status" => "Thank you for using Ordino.",
			"url" => "index.html",
			"text" => 'Home'
		);
		return $array;
	}
}

// Pull name and subject for inbox

function get_messages()
{
	$link = open_database_connection();
	$sql = 'SELECT id, name, subject, email, message FROM messages';
	$query = $link->prepare($sql);
	$query->execute();
	$messages = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$messages[] = $row;
	}

	close_database_connection($link);
	return $messages;
}

// Generate text for appropriate splash pages

function splash_text($source)
{
	switch ($source) {
	case 'Checkout':
		$array = array(
			"display" => "Checkout request sent!",
			"status" => "Use the button below to return home.",
			"url" => "hardware.php",
			"text" => 'Home'
		);
		return $array;
		break;

	case 'Return':
		$array = array(
			"display" => "Return request sent!",
			"status" => "Use the button below to return home.",
			"url" => "hardware.php",
			"text" => 'Home'
		);
		return $array;
		break;
	case 'Empty':
		$array = array(
			"display" => "Please fill out all fields!",
			"status" => "Use the button below to re-submit your request.",
			"url" => "javascript:history.go(-1)",
			"text" => 'Return'
		);
		return $array;
		break;
	}
}

// Insert message into database

function message($name, $email, $subject, $message)
{
	$link = open_database_connection();
	$sql = "INSERT INTO messages (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
	$insert = $link->prepare($sql);
	$insert->bindParam(':name', $name);
	$insert->bindParam(':email', $email);
	$insert->bindParam(':subject', $subject);
	$insert->bindParam(':message', $message);
	$insert->execute();
}

// Remove hardware from database

function delete_hardware($id)
{
	$link = open_database_connection();
	$hardware = checkIfExists($id,'hardware');
	if ($hardware == 0){
		echo $hardware;
	} else {
	$sql = "DELETE FROM hardware WHERE hardware_id = :id";
	$delete = $link->prepare($sql);
	$delete->bindParam(':id', $id);
	$delete->execute();
	echo $hardware;
	}
}



// Edit hardware in the database

function edit_hardware($id, $type, $model, $status, $description, $location)
{	
	$link = open_database_connection();
	$hardware = checkIfExists($id,'hardware');

	if ($hardware == 0){
		echo $hardware;
	} else {
		if(!empty($type) && !empty($model) && !empty($status) && !empty($description) && !empty($location)){

			$sql = "UPDATE hardware SET type = :type, model = :model,status = :status, notes = :description, location = :location WHERE hardware_id = :id";
			$edit = $link->prepare($sql);
			$edit->bindParam(':id', $id);
			$edit->bindParam(':type', $type);
			$edit->bindParam(':model', $model);
			$edit->bindParam(':status', $status);
			$edit->bindParam(':description', $description);
			$edit->bindParam(':location', $location);
	
			$edit->execute();
		} else if (!empty($type) && !empty($model) && !empty($status) && !empty($description)){

			$sql = "UPDATE hardware SET type = :type, model = :model,status = :status, notes = :description WHERE hardware_id = :id";
			$edit = $link->prepare($sql);
			$edit->bindParam(':id', $id);
			$edit->bindParam(':type', $type);
			$edit->bindParam(':model', $model);
			$edit->bindParam(':status', $status);
			$edit->bindParam(':description', $description);
	
			$edit->execute();
		} else if (!empty($type) && !empty($model) && !empty($status)){
	
			$sql = "UPDATE hardware SET type = :type, model = :model,status = :status WHERE hardware_id = :id";
			$edit = $link->prepare($sql);
			$edit->bindParam(':id', $id);
			$edit->bindParam(':type', $type);
			$edit->bindParam(':model', $model);
			$edit->bindParam(':status', $status);
		
	
			$edit->execute();
		} else if (!empty($type) && !empty($model)){
		
			$sql = "UPDATE hardware SET type = :type, model = :model WHERE hardware_id = :id";
			$edit = $link->prepare($sql);
			$edit->bindParam(':id', $id);
			$edit->bindParam(':type', $type);
			$edit->bindParam(':model', $model);
	
			$edit->execute();
		} else if (!empty($type)){
	
			$sql = "UPDATE hardware SET type = :type WHERE hardware_id = :id";
			$edit = $link->prepare($sql);
			$edit->bindParam(':id', $id);
			$edit->bindParam(':type', $type);
	
			$edit->execute();
		}
		echo $hardware;
	}
}

// Delete message from database
function delete_message($id)
{
	$link = open_database_connection();
	$sql = "DELETE FROM messages WHERE id = :id";
	$delete = $link->prepare($sql);
	$delete->bindParam(':id', $id);
	$delete->execute();
}
// Edit the email and password of an account
function edit_account($user, $email, $password){
	$link = open_database_connection();
	$check = check_user($user, 'users');
	
	if ($check == 0){
		echo $check;
	} else {
		if (!empty($email) && !empty($password)){
			$sql = "UPDATE users SET user_password_hash = :password, user_email = :email WHERE user_name = :username";
			$edit = $link->prepare($sql);
			$edit->bindParam(':username', $user);
			$edit->bindParam(':email', $email);
			$edit->bindParam(':password', $password);
			$edit->execute();
		} else if (!empty($email)){
			$sql = "UPDATE users SET user_email = :email WHERE user_name = :username";
			$edit = $link->prepare($sql);
			$edit->bindParam(':username', $user);
			$edit->bindParam(':email', $email);

			$edit->execute();
		} else if (!empty($password)){
			$sql = "UPDATE users SET user_password_hash = :password WHERE user_name = :username";
			$edit = $link->prepare($sql);
			$edit->bindParam(':username', $user);
			$edit->bindParam(':password', $password);
			
			$edit->execute();
		}
		echo $check;
	}
}
// Get password hash to compare to the entered password
function get_hash($user, $email){
	$link = open_database_connection();
	
	$sql = "SELECT user_password_hash FROM users WHERE (user_name = :user) AND (user_email = :email)";
	$select = $link->prepare($sql);
	$select->bindParam(':user', $user);
	$select->bindParam(':email', $email);
	$select->execute();
	$password = $select->fetch(PDO::FETCH_OBJ);
	
	return $password->user_password_hash;
}

// Delete an account from the database
function delete_account($user, $email){
	
	$link = open_database_connection();
	$sql = "DELETE FROM users WHERE user_name = :user AND user_email = :email";
	$delete = $link->prepare($sql);
	$delete->bindParam(':user', $user);
	$delete->bindParam(':email', $email);
	
	$delete->execute();
}

?>