<?php
	
	$db = new mysqli('localhost','root','','hospital');
	$query = "select * from patient";
	
	if (isset($_GET['sort'])){

		if ($_GET['sort'] == 'name')
		{
			$query .= " ORDER BY name";
		} 
		elseif ($_GET['sort'] == 'species')
		{
			$query .= " ORDER BY species";
		} 
		elseif ($_GET['sort'] == 'gender')
		{
			$query .= " ORDER BY gender";
		}
	}

	$result = $db->query($query);
	$patients = $result->fetch_all(MYSQLI_ASSOC);

?>