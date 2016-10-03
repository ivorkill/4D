<?php
	$schools = array();

	$sql = "SELECT * FROM schools";
	$result = $mysqli->query($sql);
	while ($items = $result->fetch_assoc()){
		$schools = $items;
	}

	return $schools;
?>
