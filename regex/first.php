<?php
	$rex = "/(?:son)/";//"/^son$/";
	$str = "vsond";
	preg_match($rex, $str, $result);
	var_dump ($result);
?>