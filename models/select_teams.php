<?php
	$id = $_SESSION['user'];
	$sql = "SELECT * FROM teams WHERE id = $id";
	$result = $mysqli->query($sql);
	while ($items = $result->fetch_assoc()){
		$team[] = $items;
	}

	return $team;
?>
