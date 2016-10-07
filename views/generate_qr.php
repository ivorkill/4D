<div class="content">
	<div class="container">
		<?php
			//Including the QR-generator
			include 'phpqrcode/qrlib.php';
			foreach ($team as $team_list) {
				$team_name = $team_list['team_name'];
				$code = $team_list['code'];
				QRcode::png(''.$code.'', 'img/'.$team_name.'.png', 'L', 14, 2);

				echo '<img src="img/'.$team_name.'.png"><br>';
				echo '<h3>Jullie alfanumerieke code is: '.$code.'</h3>';
			}
		?>
	</div>
</div>
