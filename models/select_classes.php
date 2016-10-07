<?php
	$classes = array();

	$sql = "SELECT * FROM classes JOIN schools ON classes.school_id = schools.id";
	$result = $mysqli->query($sql);
	while ($items = $result->fetch_assoc()){
		$classes[] = $items;
	}

	return $classes;
?>
