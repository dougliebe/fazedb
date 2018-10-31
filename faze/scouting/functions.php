<?php

// Clean array to protect against injection attacks
function f_clean($array) {
	global $link2;
	return array_map( array($link2,'real_escape_string'), $array);
}

// Connect to and select the specific db with the user
function f_sqlConnect($user, $pass, $db) {
	$link = mysqli_connect(DB_HOST,$user,$pass,$db); // store link

	if (!$link) {
		die('Cant\'t use ' . $db . ': ' . mysql_error());
	}
}

function mysqli_result($search, $row, $field=0){
	$i=0; while($results=mysqli_fetch_array($search)){
	if ($i==$row){$result=$results[$field];}
	$i++;}
	return $result;
} 

function f_tableExists($tablename, $database = false) {
	global $link2;
	if(!$database) {
		$res = mysqli_query($link2, "SELECT DATABASE()");
		$database = mysqli_result($res, 0);
	}

	$res = mysqli_query($link2, "
		SELECT COUNT(*) AS count 
		FROM information_schema.tables
		WHERE table_schema = '$database' 
		AND table_name = '$tablename'
		");

	return mysqli_result($res, 0) == 1;
}	

function f_fieldExists($table, $column, $column_attr = "VARCHAR(255) NULL") {
	global $link2;
	$exists = false;
	$columns = mysqli_query($link2, "show columns from $table");
	while($c = mysqli_fetch_assoc($columns)) {
		if($c['Field'] == $column) {
			$exists = true;
			break;
		}
	}
	if(!$exists) {
		mysqli_query($link2, "ALTER TABLE `$table` ADD `$column` $column_attr");
	}
}



?>