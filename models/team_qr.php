<?php
	$sql = "SELECT * FROM teams WHERE team_name = '$name'";
	$result = $mysqli->query($sql);
	while ($items = $result->fetch_assoc()){
		$team[] = $items;
	}

	return $team;
?>
