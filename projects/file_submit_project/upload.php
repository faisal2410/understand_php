<!DOCTYPE html>
<html>
<head>
	<title>File Upload Project</title>
	<style>
  <?php include "styles.css" ?>
</style>
</head>
<body>
	<?php
		if(isset($_FILES['file'])) {
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES['file']['name']); 
			$upload_ok = 1;
			$image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

			// Check if file already exists
			if (file_exists($target_file)) {
				echo "<h1>Sorry, file already exists.</h1>";
				$upload_ok = 0;
			}

			// Check file size
			if ($_FILES['file']['size'] > 500000) {
				echo "<h1>Sorry, your file is too large.</h1>";
				$upload_ok = 0;
			}

			// Allow certain file formats
			if($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg"
			&& $image_file_type != "gif" ) {
				echo "<h1>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h1>";
				$upload_ok = 0;
			}

			if ($upload_ok == 0) {
				echo "<h1>Sorry, your file was not uploaded.</h1>";
			} else {
				if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
					echo "<h1>The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.</h1>";
				} else {
					echo "<h1>Sorry, there was an error uploading your file.</h1>";
				}
			}
		}
	?>
</body>
</html>
