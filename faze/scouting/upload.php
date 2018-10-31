<?php
require_once('config.php');
require_once('functions.php');

$domain = $_SERVER['HTTP_HOST'];
$uri = parse_url($_SERVER['HTTP_REFERER']);
$r_domain = substr($uri['host'], strpos($uri['host'], '.'), strlen($uri['host']));

if ($domain == $r_domain) {

// 	// Open connection
	$link2 = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	// clean our post to prevent injection attacks
	$_POST = f_clean($_POST);

	// main variables to process the form
	$table = $_POST['formid'];
	$keys = implode(", ", (array_keys($_POST)));
	$values = implode("', '", (array_values($_POST)));

	// variables for our redirect
	$redirect = $_POST['redirect_to'];
	$referred = $_SERVER['HTTP_REFERER'];
	$query = parse_url($referred, PHP_URL_QUERY);
	$referred = str_replace(array('?', $query),'', $referred);

	// add anything extra you always want added here
	$x_fields = 'timestamp';
	$x_values = time();

	// check to see if tables already exisits
	// if not, create it
	if (!f_tableExists($table, DB_NAME)) {
		$sql = "CREATE TABLE $table (
		ID int NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(ID),
		timestamp int NOT NULL
		)";

		$result = mysqli_query($link2, $sql);

		if (!$result) {
			die('Invalid query: ' . mysqli_error($result));
		}
	}



	// now check to see if each field exists
	// create new fields if they don't
	foreach ($_POST as $key => $value) {
		$column = mysqli_real_escape_string($link2, $key);
		$alter = f_fieldExists($table, $column, $column_attr = "VARCHAR(255) NULL");

		if(!alter) {
			echo "Unable to add column: " / $column;
		}
	}

	// insert values into the db
	$sql = "INSERT INTO $table ($keys, $x_fields) VALUES ('$values' ,'$x_values')";

	if(!mysqli_query($link2, $sql)) {
		die("Error: " . mysqli_error($link2));
	}

	// close db connection
	mysqli_close($link2);

	if(!empty($redirect)) {
		header("Location: $redirect?msg=1");
	} else {
		header("Location: $referred?msg=1");
	}

} else {
	die("You are not allowed to submit data to this form");
}

?>