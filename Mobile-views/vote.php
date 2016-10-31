<body>
<div class="container">
	<div class="logo">
    	<img src="Mobile-views/img/logo_quickrate.png" alt="logo Quick Rate" title="logo Quick Rate" height="60" />
  </div>
<?php
$rate = (empty($_POST['rating'])) ? '' : $_POST['rating'];
$id = (empty($_POST['id'])) ? '' : $_POST['id'];
if ($rate > 0 && $rate < 6) {
  if ($_SERVER['REMOTE_ADDR']>1){
    $ip = str_replace(".","",$_SERVER['REMOTE_ADDR']);
  }
  else {
    $ip = 1;
  }
  $votes =  $mysqli->query("SELECT * FROM votes WHERE ip_address = $ip AND team_id = $id")->fetch_assoc();
  if($votes)
  {
    echo "Je hebt al gestemt kut";
  }
  else {
    if($mysqli->query("INSERT INTO votes(vote,ip_address,team_id) VALUES('$rate','$ip','".$id."')")){
      echo "Er is succesvol gestemt.";
    }
    else{
      echo "Er is iets fout gegaan";
    }
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
