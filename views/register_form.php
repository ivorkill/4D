<!-- The register to add the teams -->
<form class="register_team" action="?action=add_teams" method="post">
	<table>
		<tr>
			<td>
				<label for="team_name">Team Naam:<br><input type="text" name="team_name" placeholder="Team Naam..." autofocus></label><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="team_members">Team Leden:<br>
				<input type="text" name="team_members" placeholder="Team Leden..."></label><br>
				<label for="team_members" id="team_members"><p>*Scheid de namen met een komma*</p></label><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="password">Wachtwoord:<br><input type="password" name="password" placeholder="Wachtwoord..."></label><br>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="name" value="Send">
			</td>
		</tr>
	</table>
</form>
