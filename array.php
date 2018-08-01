<?php
	$arr1 = array(
	0 => 'HTML',
	1 => 'CSS');
	print_r($arr1);
	echo "<br/>";
	array_push($arr1, 'JS');
	print_r($arr1);
	echo "<br/>";
	array_unshift($arr1, 'PHP');
	print_r($arr1);
	echo "<br/>";
	$arr2 = array(
		'one' => 'HTML',
	 	'two' => 'CSS');
	$arr2 = array_change_key_case($arr2, 1);
	print_r($arr2);
	echo "<br/>";
	var_dump($arr2);
	echo "<br/>";
	echo $arr1[0];
	echo "<br/>";
	echo $arr2['ONE'];
?>