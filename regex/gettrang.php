<?php 
	include 'simple_html_dom.php';
	$loi = "Không có dữ liệu";
	if (isset($_GET['url'])) {
	$urlTruyen = $_GET['url'];
	if (empty($urlTruyen)) {
		echo $loi;
		return;
	}
	$soucre = file_get_html($urlTruyen);
	$danhSach = $soucre->find('ul.pagination',0)->find('li');
	$trangs = array();
	for($i = 0; $i < count($danhSach); $i++){
		$trangs[$i+1] = $danhSach[$i]->find('a',0)->href;
	}
	echo json_encode($trangs);
}else{
		echo $loi;
	}
 ?>