<?php
	$db = new mysqli('localhost','root','','hospital');

	$client_query = "SELECT * FROM client";
	$client_result = $db->query($client_query);
	$clients = $client_result->fetch_all(MYSQLI_ASSOC);

	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');

		if($_POST["gender"] == "1") {
			$genders = "female";
		} else{
			$genders ="male";
		}

		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);
		$gender = $db->escape_string($genders);
		$status = $db->escape_string($_POST["status"]);
		$client = $db->escape_string($_POST)["client"];
		
		// Prepare query and execute
		$query = "insert into patient (name, species, gender, status, client_id) values ('$name','$species', '$gender', '$status', '$client')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>