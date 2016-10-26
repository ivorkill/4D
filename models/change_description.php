<?php
	$description = $mysqli->real_escape_string($_POST['description']);
	$id = $_SESSION['user'];
	if ($mysqli->query("UPDATE teams SET description='$description' WHERE id='$id'"))
	{
	    echo "<a href='?action=account'>Je Team</a>";
	}
	else
	{
		header ("Location: ?action=description_form");
	}
	?>
