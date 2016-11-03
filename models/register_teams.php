<?php
	// Declaring variables
	$team_name = $mysqli->real_escape_string($_POST['team_name']);
	$team_members = $mysqli->real_escape_string($_POST['team_members']);
	$qr_name = $team_name.'.png';
	$password = hash('sha512', $mysqli->real_escape_string($_POST['password']));
	$code = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"), -10);
	//Generating QR-code
	QRcode::png(''.$code.'', 'img/'.$qr_name, 'L', 14, 2);
	if(isset($team_name)){
		$sql = $mysqli->query ("SELECT * FROM teams WHERE team_name = '$team_name'");
		$get_rows = $sql->num_rows;
		if($get_rows >= 1){
			echo "Team exists already";
			echo "<a href='?action=register_teams'>Go back</a>";
		}
		else{
			if($mysqli->query("INSERT INTO teams(team_name,team_members,code,qr_name,password) VALUES('$team_name','$team_members','$code','$qr_name','$password')"))
			{
?>
<?php
				echo "<a href='?action=qr_gen&name=".$team_name."'>Je QR-code</a>";
			}
			else
			{
?>
			    <script>alert('error while registering you...');</script>
			<?php
				echo "<a href='?action=register_teams'>Go back</a>";
			}
		}
	}
?>
