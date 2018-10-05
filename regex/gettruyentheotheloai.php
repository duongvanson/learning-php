<?php
	include('simple_html_dom.php');
	/**
	 * 
	 */
	class Truyen
	{
		var $url;
		var $image;
		var $title;
		var $vote;
		function __construct()
		{
		}
	}
	$loi = "Không có dữ liệu";
	if (isset($_GET['url'])) {
	$urlTheLoai = $_GET['url'];
	if (empty($urlTheLoai)) {
		echo $loi;
		return;
	}
	$soucre = file_get_html($urlTheLoai);
	$danhSach = $soucre->find('.manga-list',0)->find('div.item');
	$truyens = array();
	//duyet
	foreach ($danhSach as $item) {
		$truyen = new Truyen();
		//lay link
		$truyen->url = 'http://comicvn.net'.$item->find('a.img',0)->href;
		$truyen->image = $item->find('img',0)->src;
		$truyen->title = $item->find('img',0)->title;
		$truyen->vote = $item->find('i',0)->innertext;
		array_push($truyens, $truyen);
	}
	echo (json_encode($truyens));
	}else{
		echo $loi;
	}
?>