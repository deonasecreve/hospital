<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$address = $db->escape_string($_POST["address"]);
		
		// Prepare query and execute
		$query = "insert into client (name, address ) values ('$name','$address')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>