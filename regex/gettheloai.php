<?php
	class TheLoai{
		var $url;
		var $name;
		function TheLoai($url, $name){
			$this->url = $url;
			$this->name = $name;
		}
	}
	include('simple_html_dom.php');
	$html = file_get_html('http://comicvn.net/');
	$theLoai = $html->find('.genres-list',0)->find('li');
	$danhSach = array();
	foreach ($theLoai as $li) {
		$a = $li->find('a',0);
		array_push($danhSach,new TheLoai('http://comicvn.net'.$a->href, $a->plaintext));
	}
	echo (json_encode($danhSach));
 ?>