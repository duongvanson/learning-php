<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$dt = date('d-m-Y H:i:s');
	echo $dt;
	echo('<br/>');
	$dtInt = strtotime($dt);
	echo $dtInt;
	echo "<bt/>";
	echo date('d-m-Y',$dtInt);
	$dateint = mktime(0, 0, 0, 11, (20 + 12), 2016);
	echo date('d/m/Y', $dateint); // 02/12/2016
?>