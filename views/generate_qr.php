<div class="content">
	<div class="container">
		<?php
			foreach ($team as $team_list) {
				$team_name = $team_list['team_name'];
				$code = $team_list['code'];

				echo '<img src="img/'.$team_name.'.png"><br>';
				echo '<h3>Jullie alfanumerieke code is: '.$code.'</h3>';
			}
		?>
		<a href="?action=login_teams">Login</a>
	</div>
</div>
