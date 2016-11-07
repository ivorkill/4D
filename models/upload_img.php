<?php
if(isset($_FILES['image'])) {
    $errors     = array();
    $maxsize    = 2097152;
	$needheight = 800;
	$needwidth = 800;
	$id = $_SESSION['user'];
	$file= $_FILES['image']['tmp_name'];
	$filename= $_FILES['image']['name'];
	$destination= 'uploads/'.$_FILES['image']['name'];

	if(move_uploaded_file($file, $destination)){
		$image = getimagesize($destination);
		$actualwidth = $image[0];
		$actualheight = $image[1];
	    if(($_FILES['image']['size'] >= $maxsize) || ($_FILES["image"]["size"] == 0)) {
	        $errors[] = 'File too large. File must be less than 2 megabytes.';
	    }

		if($needwidth < $actualwidth || $needheight < $actualheight){
			$errors[] = 'Invalid file dimensions. File needs to be less than 1000 pixels high and wide.';
		}

	    if(count($errors) === 0) {
			$sql = "UPDATE teams SET team_img='$destination' WHERE id = '$id'";
		    $results = $mysqli->query($sql);

		    $result = $mysqli->query("SELECT * FROM teams WHERE id = '$id'");
		    echo "Uploaded Succesfully";
		    echo "<a href='?action=account'>Ga terug</a>";
	    }
	}
	else {
	  echo 'Error with uploading '.$filename."<br>";
	  echo "<a href='?action=account'>Ga terug</a>";
	}
}
?>
