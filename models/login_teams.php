<?php
	$team_name = $mysqli->real_escape_string($_POST['team_name']);
	$password = hash('sha512', $mysqli->real_escape_string($_POST['password']));
	$sql = "SELECT * FROM teams WHERE team_name='$team_name' AND password='$password'";
	$result = $mysqli->query($sql);
	$count = $result->num_rows;
	echo $count;
	while ($login = $result->fetch_array()) {
		if($count == 1)
		{
			// make the user session equal to the id of the team
			$_SESSION['user'] = $login['id'];
			header("Location:?action=account");
		}
		elseif ($count == 0) {
			echo "Incorrect team name and/or password";
			// echo "<a href='?action=home'>Go back</a>";
			// header("Location:?action=home");
		}
	}
?>
