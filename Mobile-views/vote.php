<body>
<div class="container">
	<div class="logo">
    	<img src="Mobile-views/img/logo_quickrate.png" alt="logo Quick Rate" title="logo Quick Rate" height="60" />
  </div>
<?php
$rate = (empty($_POST['rating'])) ? '' : $_POST['rating'];
$id = (empty($_POST['id'])) ? '' : $_POST['id'];
if ($rate > 0 && $rate < 6) {
	if(isset($_COOKIE['UserID']))
	{
		$UserID = $_COOKIE['UserID'];
		$sql = "SELECT * FROM votes WHERE ip_address = '$UserID' AND team_id = '$id'";
		$votes =  $mysqli->query($sql)->fetch_assoc();
	  if($votes)
	  {
	    echo "<form method='post'><h2>Je hebt al gestemt.</h2><br><p>Druk op de knop om terug te gaan.</p><br><input type='hidden' name='page' value='Scannen'><div class='button1'><input class='button' type='submit' value='Terug'></div></form>";
		}
	  else {
	    if($mysqli->query("INSERT INTO votes(vote,ip_address,team_id) VALUES('$rate','$UserID','".$id."')")){
				echo "<form method='post'><h2>Je hebt nu gestemt.</h2><br><p>Druk op de knop om een ander project te scannen.</p><br><input type='hidden' name='page' value='Scannen'><div class='button1'><input class='button' type='submit' value='Terug'></div></form>";
	    }
	    else{
				echo "<form method='post'><h2>Er is iets fout gegaan.</h2><br><p>Druk op de knop om terug te gaan.</p><br><input type='hidden' name='page' value='Scannen'><div class='button1'><input class='button' type='submit' value='Terug'></div></form>";
	    }
	  }
	}
	else {
		echo "<form method='post'><h2>Er is iets fout gegaan.</h2><br><p>Druk op de knop om terug te gaan.</p><br><input type='hidden' name='page' value='Scannen'><div class='button1'><input class='button' type='submit' value='Terug'></div></form>";
	}
}
else {
  echo "Your vote was not from 1-5 please try again.";
}
?>
	<img src="Mobile-views/img/pixels.png" alt="pixels" title="pixels" height="250" class="pixels"/>
</div>
<script src="Mobile-views/js/stars.js" type="text/javascript"></script>
</body>
