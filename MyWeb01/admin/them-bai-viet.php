<?php include 'includes/header.php'; ?>
<?php include_once 'database/connect.php'; ?>
<?php 
	if (isset($_POST["btnThemBai"])) {
		$tieude = $_POST["tieude"];
		$noidung = $_POST["noidung"];
		$is_public = 0;
		if (isset($_POST["public"])) {
			$is_public = 1;
		}
		$user_id = 6;

		$sql = "INSERT INTO posts(title, content, user_id, is_public, createdate, updatedate ) VALUES ( '$tieude', '$noidung', '$user_id', '$is_public', now(), now())";
		mysqli_query($conn, $sql);
		echo "<p class='thongbao'>Thêm bài viết thành công.</p>";
	}
 ?>
<div id="thembai">
	<form method="post" action="them-bai-viet.php">
		<h2>Thêm bài viết</h2>
		<label>Tiêu đề: </label>
		<input type="text" name="tieude" id="tieude"><br><br>
		<label>Nội dung: </label>
		<textarea rows="5" cols="50" name="noidung" id="noidung"></textarea><br><br>
		<label>Public bài viết: </label>
		<input type="checkbox" name="public" id="public"><br><br>
		<label></label>
		<input type="submit" name="btnThemBai" id="btnThemBai" value="Thêm bài viết">
	</form>
</div>
<script>
	CKEDITOR.replace( 'noidung' );
</script>
<?php include '../includes/footer.php'; ?>