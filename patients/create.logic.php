<?php
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
		
		// Prepare query and execute
		$query = "insert into patient (name, species, gender, status) values ('$name','$species', '$gender', '$status')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>