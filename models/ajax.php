<?php
  $data = array();
  include '../config/config.php';
  include '../config/dbconnect.php';
	$sql = "SELECT team_id, team_name, AVG(vote) AS rating
          FROM votes
          JOIN teams ON votes.team_id = teams.id
          GROUP BY team_id";
	$result = $mysqli->query($sql);
	while ($row = $result->fetch_assoc()){
    $data[] = $row;
	}
  print json_encode ($data);
?>
