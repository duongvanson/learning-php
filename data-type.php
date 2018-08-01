<?php
	$num = '123a';
	echo $num;
	echo '<br>';
	$num = (int)$num;
	echo $num;
	echo '<br>';
	var_dump(is_int($num));

	$arrOne = array(
		0 => 'HTML',
		1 => 'CSS',
		2 => 'JAVASCRIPT');
	echo('<br>');
	print_r($arrOne);
	echo '<br>array[0] = '.$arrOne[0];
?>