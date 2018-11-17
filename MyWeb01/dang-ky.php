<?php include 'includes/header.php'?>
<?php include_once 'database/connect.php'; ?>
<?php
	if (isset($_POST["btnDangKy"])) {
		$username = $_POST["username"];
		$pass = $_POST["pass"];
		$name = $_POST["fullname"];
		$email = $_POST["email"];
		if ($username == "" || $pass == "" || $name == "" || $email == "") {
			echo "<p class='thongbao'>Vui lòng nhập đủ thông tin</p>";
		}else{
			$sql = "INSERT INTO users(username, password, fullname, email, createdate ) VALUES ( '$username', '$pass', '$name', '$email', now())";
			mysqli_query($conn, $sql);
			echo "<p class='thongbao'>Đăng ký thành công!</p>";
		}
	}
 ?>
<div id="dangky">
	<form action="dang-ky.php" method="post">
		<h2>Đăng ký</h2>
		<label>Tên tài khoản: </label>
		<input type="text" name="username" id="username"> <br> <br>
		<label>Mật khẩu: </label>
		<input type="text" name="pass" id="pass"> <br><br>
		<label>Họ tên: </label>
		<input type="text" name="fullname" id="fullname"> <br> <br>
		<label>Email: </label>
		<input type="text" name="email" id="email"> <br><br>
		<label></label>
		<input type="submit" name="btnDangKy" value="Đăng ký"><br><br>
	</form>
</div>
<?php include 'includes/footer.php'?>