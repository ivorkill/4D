<?php
	$teams = array();

	$sql = "SELECT * FROM teams JOIN schools ON teams.class_id = classes.id";
	$result = $mysqli->query($sql);
	while ($items = $result->fetch_assoc()){
		$teams = $items;
	}

	return $teams;
?>
