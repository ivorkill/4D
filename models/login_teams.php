<?php
	$team_name = $mysqli->real_escape_string($_POST['team_name']);
	$password = hash('sha512', $mysqli->real_escape_string($_POST['password']));
	$result = $mysqli->query ("SELECT * FROM teams WHERE team_name='$team_name' AND password='$password'");
	$count = $result->num_rows;
	while ($login = $result->fetch_array()) {
		if($count==1)
		{
			$_SESSION['user'] = $login['id'];
			header("Location:?action=account");
		}
		else
		{
			// echo "Incorrect team name and/or password";
			// echo "<a href='?action=home'>Go back</a>";
			header("Location:?action=home");
		}
	}
?>
