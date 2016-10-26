<?php
// it will never let you open index(login) page if session is set
if ( isset($_SESSION['user'])!="" ) {
header("Location: ?action=account");
exit;
}
?>
<!-- The login to add the teams -->
<form class="login_team" action="?action=login" method="post">
	<table>
		<tr>
			<td>
				<label for="team_name">Team Naam: <input type="text" name="team_name" placeholder="Team Naam..." autofocus></label><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="password">Wachtwoord: <input type="password" name="password" placeholder="Wachtwoord..."></label><br>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="name" value="Send">
			</td>
		</tr>
	</table>
</form>
