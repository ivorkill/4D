<?php
	$sql = ("SELECT * FROM votes");
	$result = $mysqli->query($sql);
	while ($items = fetch_assoc()){
		$votes[] = $items;
	}

	return $votes;
?>
