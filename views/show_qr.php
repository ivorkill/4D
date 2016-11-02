<div class="content">
	<div class="container">
		<?php
		foreach($team as $teamlist){
			$qr_code = $teamlist['qr_name'];
			echo "<div class='qr_code'>";
			echo "<img src='img/".$qr_code."'/>";
			echo "<a href='?action=account'>Ga terug</a>";
			echo "</div>";
		}
		?>
	</div>
</div>
