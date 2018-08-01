<?php
	setcookie('key4','afda', time()+3600, "/");
	if (!$_COOKIE['key4']) {
		# code...
		echo "No";
	}else{
		echo "User: ".$_COOKIE['key4'];
	}
?>