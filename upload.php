<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload file php</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="avatar">
		<input type="submit" name="upload" value="Upload">
	</form>
	<?php
		// if (isset($_POST['upload'])) {
		// 	if (isset($_FILES['avatar'])) {
		// 		if ($_FILES['avatar']['error'] > 0) {
		// 			echo 'File error';
		// 		}else{
		// 			move_uploaded_file($_FILES['avatar']['tmp_name'], './upload/'.$_FILES['avatar']['name']);
		// 			echo 'Uploaded.';
		// 		}
		// 	}else{
		// 		echo 'Not chose file';
		// 	}
		// }
		// echo $_FILES['avatar']['type'];
	?>
</body>
</html>