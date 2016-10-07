<?php
	// Declaring variables
	$team_name = $mysqli->real_escape_string($_POST['team_name']);
	$description = $mysqli->real_escape_string($_POST['description']);
	$team_members = $mysqli->real_escape_string($_POST['team_members']);
	// $password = hash('sha512', $mysqli->real_escape_string($_POST['password']));
	$code = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"), -10);

	if($mysqli->query("INSERT INTO teams(team_name,password,code) VALUES('$team_name','$password','$code')"))
	{
?>
<?php
    header("Location: ?action=register_teams");
	}
	else
	{
?>
    <script>alert('error while registering you...');</script>
<?php
	}
?>
?>
