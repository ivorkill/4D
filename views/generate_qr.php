<div class="content">
	<div class="container">
		<div class="register_qr">
		<?php
			foreach ($team as $team_list) {
				$team_name = $team_list['team_name'];
				$code = $team_list['code'];

				echo '<img src="img/'.$team_name.'.png"><br>';
				echo '<h3>Jullie alfanumerieke code is: '.$code.'</h3>';
			}
		?>
		</div>
		<a class="betterbutton" href="?action=login_teams">Login</a><br>
		<a class="betterbutton" href="?action=home">Home</a>
	</div>
</div>
