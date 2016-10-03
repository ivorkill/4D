<?php
	// Declaring variables
	$class_name = $mysqli->real_escape_string($_POST['class_name']);

	if($mysqli->query("INSERT INTO classs(class_name) VALUES('$class_name')"))
	{
?>
<?php
    header("Location: ?action=register_classes");
	}
	else
	{
?>
    <script>alert('error while registering you...');</script>
<?php
	}
?>
?>
