<div class="content">
	<div class="container">
		<?php
			foreach ($team as $team_list){
				$team_id = $team_list['id'];
				$team_img = $team_list['qr_name'];
				echo "<img src='img/".$team_img."'/>";
			}
		?>
		
	</div>
</div>
