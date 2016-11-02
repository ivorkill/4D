<?php
// it will never let you open index(login) page if session is set
if ( isset($_SESSION['user'])!="" ) {
header("Location: ?action=account");
exit;
}
?>

<div class="logo">
        <img src="img/logo_quickrate.png" alt"logo" width="30%">
        </div>

<!-- The login to add the teams -->
<form class="login_team" action="?action=login" method="post">
	<table>
		<tr>
			<td>
                <label for="team_name"><p class="label">Team Naam:</p> <input class="input" type="text" name="team_name" autofocus></label><br>
			</td>
		</tr>
		<tr>
			<td>
                <label for="password"><p class="label">Wachtwoord:</p> <input class="input" type="password" name="password" ></label><br>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="name" value="Send">
			</td>
		</tr>
	</table>
</form>

<img src="img/pixels.png" alt"pixels" class="pixels" width="300px">