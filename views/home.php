<div class="content">
	<div class="container">
		<ul class="top">
			<?php
			if(isset($_SESSION['user']))
			{
			?>
            <li><a href="?action=logout"><button class="center">Logout</button></a></li>
            <li><button class="center"><a href="?action=account">Account</a></button></li>
			<?php
			}
			else{
			?>
        <li>
						<a class="betterbutton"  href="?action=register_teams">

								Register

						</a>
				</li>
      	<li>
					<a class="betterbutton"  href="?action=login_teams">

							Login

					</a>
				</li>
				<li>
					<a class="betterbutton" href="?action=scoreboard">
							Scoreboard

					</a>
				</li>
			<?php
			}
			?>
            <img src="img/pixels.png" alt"pixels" class="pixels" width="300px">
		</ul>
	</div>
</div>
