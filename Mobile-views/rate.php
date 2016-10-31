<body>
<div class="container">
	<div class="logo">
    	<img src="Mobile-views/img/logo_quickrate.png" alt="logo Quick Rate" title="logo Quick Rate" height="60" />
  </div>
<?php
	$code = (empty($_POST['Code'])) ? '' : $_POST['Code'];
	$sql = "SELECT * FROM teams WHERE code = '$code'";
	$result = $mysqli->query($sql)->fetch_assoc();
	if ($result) {
?>
	<div class="name">
    <h2>
			<?php
				echo ucfirst($result['team_name']);
			?>
		</h2>
	</div>
	<div class="text1">
			<?php
			 echo ucfirst($result['description']);
			?>
	</div>
	<form method="post">
		<span class="star-rating">
	  <input type="radio" name="rating" value="1" required="" checked=""><i></i>
	  <input type="radio" name="rating" value="2"><i></i>
	  <input type="radio" name="rating" value="3"><i></i>
	  <input type="radio" name="rating" value="4"><i></i>
	  <input type="radio" name="rating" value="5"><i></i>
	</span>
	<input type="hidden" value=<?php echo $result['id']; ?> name="id">
	<div class="button1">
		<input type="submit" value="Stem" name="page" class="button">
	</div>
</form>
<?php
	}
	else {
 ?>
	<h1>
		Verkeerde Code.
	</h1>
	<br>
	<p>
		Helaas is er een verkeerde code ingevult!<br>
		Druk op de knop om terug te gaan.
	</p>
	<br>
	<form method="post">
	 <input type="submit" value="Terug" name="page" class="button">
	</form>
<?php
	};
?>
	<img src="Mobile-views/img/pixels.png" alt="pixels" title="pixels" height="250" class="pixels"/>
</div>
<script src="Mobile-views/js/stars.js" type="text/javascript"></script>
</body>
