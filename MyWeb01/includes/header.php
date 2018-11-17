<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MyWeb</title>
	<link rel="stylesheet" href="css/styles.css">
	<?php
		define("URL","http://localhost/learning-php/MyWeb01/");
		define("URL_ADMIN","http://localhost/learning-php/MyWeb01/admin/");
	?>
</head>

<body>

	<header>
		<h1 class="logo">VSond Web Developer</h1>
	</header>
	<div id="main">
		<div id="side-l">
			<a href="<?php echo URL ?>dang-ky.php">Đăng ký</a><br>
			<a href="<?php echo URL ?>dang-nhap.php">Đăng nhập</a><br>
			<a href="<?php echo URL_ADMIN ?>them-bai-viet.php">Thêm bài viết</a>
		</div>
		<div id="content">