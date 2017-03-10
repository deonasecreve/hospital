<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$room = $db->escape_string($_POST["room"]);
		$status = $db->escape_string($_POST["status"]);
		
		// Prepare query and execute
		$query = "insert into client (name, room, status) values ('$name','$room','$status')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>