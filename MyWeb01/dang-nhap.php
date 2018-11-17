<?php 
	session_start();
 ?>
<?php include 'includes/header.php'; ?>
<?php include_once 'database/connect.php'; ?>
<?php 
	if (isset($_POST["btnDangNhap"])) {
		$user = $_POST["username"];
		$pass = $_POST["pass"];
		
		$user = strip_tags($user);
		$user = addslashes($user);
		$pass = strip_tags($pass);
		$pass = addslashes($pass);

		if ($user == "" || $pass == "") {
			echo "<p class='thongbao'>Thông tin không được để trống</p>";
		}else{
			$sql = "select * from users where password = '$pass' and username = '$user'";
			$data = mysqli_query($conn, $sql);
			if (mysqli_num_rows($data) <= 0) {
				echo "<p class='thongbao'>Tài khoản hoặc mật khẩu không chính xác</p>";
			}else{
				header('Location: index.php');
			}
		}
	}
 ?>
<div id="dangnhap">
	<form action="dang-nhap.php" method="post">
		<h2>Đăng nhập</h2>
		<label>Tên tài khoản: </label>
		<input type="text" name="username"><br><br>
		<label>Mật khẩu: </label>
		<input type="text" name="pass"><br><br>
		<input type="submit" name="btnDangNhap" value="Đăng nhập">
	</form>
</div>
<?php include 'includes/footer.php'; ?>