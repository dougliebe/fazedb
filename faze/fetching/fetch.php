<?php
require_once('config.php');

$domain = $_SERVER['HTTP_HOST'];
$uri = parse_url($_SERVER['HTTP_REFERER']);
$r_domain = substr($uri['host'], strpos($uri['host'], '.'), strlen($uri['host']));

if ($domain == $r_domain) {

// 	// Open connection
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	// clean our post to prevent injection attacks
	// $_POST = f_clean($_POST);

	// main variables to process the form
	$fromDate = $_POST['fromDate'];
	$opp = $_POST['team'];
	$query = "SELECT * FROM `form`
	WHERE `input1` >= '$fromDate'";
	// AND
	// month = $opp";

	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_array($result)){ 
			echo "".$row['textarea']."<br>";
	}

	// $keys = implode(", ", (array_keys($_POST)));
	// $values = implode("', '", (array_values($_POST)));

}

?>