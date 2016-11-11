<?php
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user']) == "" ) {
	header("Location: ?action=home");
	exit;
	}

?>
<div class="content">
	<div class="container">
		<?php
			foreach ($team as $team_list){
				$team_name = $team_list['team_name'];
				$team_id = $team_list['id'];
				$qr_code = $team_list['qr_name'];
				$team_img = $team_list['team_img'];
				$description = $team_list['description'];
				$team_members_array = explode(',', $team_list['team_members']);
				echo "<h2>".$team_name."</h2>";
				foreach($team_members_array as $team_members){
					echo "<h3>".$team_members."</h3>";
				}
				echo "<div class='description'>";
				echo $description."<br>";
				echo "<button class='homeaccount'><a href='?action=description_form'>Pas hier de tekst aan</a></button>";
				echo "</div>";
				echo "<div class='qr-code'>";
				echo "<img src='".$team_img."'/>";
				echo "<button class='homeaccount'><a href='?action=img_upload_form'>Pas foto aan</a></button>";
				echo "</div>";
				echo "<button class='homeaccount'><a href='?action=home'>Home</a></button>";
			}
		?>

	</div>
</div>

<img src="img/pixels.png" alt"pixels" class="pixels" width="300px">
