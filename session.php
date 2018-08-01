<?php
	session_start();
	if (isset($_POST['save-ss'])) {
		$_SEESION['iduser'] = $_POST['username'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session PHP</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="username" value="">
		<input type="submit" name="save-ss" value="Get session">
	</form>
	<?php
		if (isset($_SEESION['iduser'])){
			echo 'User name: '.$_SEESION['iduser'];
		}
	?>
</body>
</html>