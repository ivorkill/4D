<?php
	if(isset($_SESSION['id'])!="")
	{
		header("Location: ?action=account");
	}
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
	header("Location: home.php");
	exit;
	}
	$team_name = $mysqli->real_escape_string($_POST['team_name']);
	$password = hash('sha512', $mysqli->real_escape_string($_POST['password']));
	$result = $mysqli->query ("SELECT * FROM teams WHERE team_name='$team_name' AND password='$password'");
	var_dump($result);
	$count = $result->num_rows;
	var_dump($count);
	while ($login = $result->fetch_array()) {
		if($count==1)
		{
			$_SESSION['user'] = $login['id'];
			header("Location:?action=account");
		}
		else
		{
			?>
			<script>
				windows.alert("Failed to login!");
			</script>
			<?php
		}
	}
?>
