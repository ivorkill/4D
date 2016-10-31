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
				$team_id = $team_list['id'];
				$qr_code = $team_list['qr_name'];
				$description = $team_list['description'];
				echo "<div class='description'>";
				echo $description;
				echo "<a href='?action=description_form'>Change description</a>";
				echo "</div>";
				echo "<div class='qr-code'>";
				echo "<img src='img/".$qr_code."'/>";
				echo "</div>";
				echo "<a href='?action=home'>Home</a>";
			}
		?>

	</div>
</div>
