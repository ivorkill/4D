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
						<a href="?action=register_teams">
							<button class="center">
								Register
							</button>
						</a>
				</li>
      	<li>
					<a href="?action=login_teams">
						<button class="center">
							Login
						</button>
					</a>
				</li>
			<?php
			}
			?>
            <img src="img/pixels.png" alt"pixels" class="pixels" width="300px">
		</ul>
	</div>
</div>
