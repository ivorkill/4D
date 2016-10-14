<div class="content">
	<div class="container">
		<ul>
			<?php
			if(isset($_SESSION['user']))
			{
			?>
				<li><a href="?action=logout">Logout</a></li>
				<li><a href="?action=account">Account</a></li>
			<?php
			}
			else{
			?>
				<li><a href="?action=register_teams">Register</a></li>
				<li><a href="?action=login_teams">Login</a></li>
			<?php
			}
			?>
		</ul>
	</div>
</div>
