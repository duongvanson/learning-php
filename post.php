<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POST PHP</title>
</head>
<body>
	<form method="POST">
		Username: <input type="text" name="username" value=""/> <br/>
                Password: <input type="password" name="password" value=""/><br/>
        <input type="submit" name="form_click" value="Send"/>
        <?php
        	if (isset($_POST['form_click'])){
        		echo 'User: ' .$_POST['username'];
        		echo '<br/>';
        		echo 'Pass:' .$_POST['password'];
        	}
        ?>
	</form>
</body>
</html>