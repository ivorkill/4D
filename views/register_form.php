<!-- The register to add the teams -->
<div class="logo">
    <img src="img/logo_quickrate.png" alt"logo" width="30%">
</div>

<form class="register_team" action="?action=add_teams" method="post">
	<table>
		<tr>
			<td>
                <label for="team_name"><p class="label">Team Naam:</p><br><input type="text" name="team_name"  autofocus></label><br>
			</td>
		</tr>
		<tr>
			<td>
                <label for="team_members"><p class="label">Team Leden:</p><br>
				<input type="text" name="team_members" ></label><br>
				<label for="team_members" id="team_members"><p>*Scheid de namen met een komma*</p></label><br>
			</td>
		</tr>
		<tr>
			<td>
                <label for="password"><p class="label">Wachtwoord:</p><br><input type="password" name="password" ></label><br>
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
