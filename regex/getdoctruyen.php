<?php 
	include 'simple_html_dom.php';
	$loi = "Không có dữ liệu";
	if (isset($_GET['url'])) {
	$urlChap = $_GET['url'];
	if (empty($urlChap)) {
		echo $loi;
		return;
	}
	$soucre = file_get_html($urlChap);
	$imgs = trim($soucre->find('#txtarea',0)->innertext);
	$danhSachs = array();
	$list = explode('>', $imgs);
	for($i = 0; $i < count($list)-1; $i++) {
		//tuyen viet cho
		try {
			preg_match('/src="(.+?)" title=/', $list[$i], $res);
			if(isset($res[1])){
				$danhSachs[$i] = $res[1];
			}
		} catch (Exception $e) {
			preg_match('/src=""(.+?)" title=/', $list[$i], $res);
			if(isset($res[1])){
				$danhSachs[$i] = $res[1];
			}
		}
	}
	echo json_encode($danhSachs);
}else{
		echo $loi;
	}
 ?>