<?php 
	include 'simple_html_dom.php';
	$loi = "Không có dữ liệu";
	if (isset($_GET['url'])) {
	$urlTruyen = $_GET['url'];
	if (empty($urlTruyen)) {
		echo $loi;
		return;
	}
	class Chap
	{
		var $url;
		var $title;
		var $view;
		var $date;
		// var $caption;
		// var $maintitle;
		function Chap($url, $title, $view, $date)
		{
			$this->url = $url;
			$this->title = $title;
			$this->view = $view;
			$this->date = $date;
		}
	}
	$soucre = file_get_html($urlTruyen);
	$items = $soucre->find('li.u84ho3');
	$danhSachs = array();
	$caption = "";
		try {
			$caption = $soucre->find('div.manga-summary',0)->plaintext;
		} catch (Exception $e) {
			$caption = $soucre->find('p.tomtattruyen',0)->plaintext;
		}
	$maintitle = $soucre->find('title',0)->innertext;
	foreach ($items as $item) {
		array_push($danhSachs, new Chap(
			'http://comicvn.net'.$item->find('a', 0)->href,
			$item->find('a', 0)->innertext,
			$item->find('span.hit', 0)->innertext,
			$item->find('span.date', 0)->innertext
		));
	}
	$result = array(
		"maintitle" => $maintitle,
		"caption" => $caption,
		"listchap" => $danhSachs
	);
	echo json_encode($result);
	}else{
		echo $loi;
	}
 ?>