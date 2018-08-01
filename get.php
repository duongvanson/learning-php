<?php
	echo "Data get: <br/>";
	foreach ($_GET as $key => $value) {
		echo "<strong>".$key.'=>'.$value.'<strong><br/>';
	}
?>