<?php
	// Declaring variables
	$school_name = $mysqli->real_escape_string($_POST['school_name']);

	if($mysqli->query("INSERT INTO schools(school_name) VALUES('$school_name')"))
	{
?>
<?php
    header("Location: ?action=register_schools");
	}
	else
	{
?>
    <script>alert('error while registering you...');</script>
<?php
	}
?>
?>
