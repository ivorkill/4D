<?php
	$sql = "SELECT * FROM teams";
	$result = $mysqli->query($sql);
	while ($items = $result->fetch_assoc()){
		$team[] = $items;
	}

	return $team;
?>
