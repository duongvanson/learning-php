<?php
	$num = 1;
	for ($i=0; $i < 3; $i++) { 
		for ($j=0; $j < 3; $j++) { 
			echo "<input type=\"button\" value=\"Num $num\" />";
			$num++;
		}
		echo "<br/>";
	}
?>