<?php include 'includes/header.php'; ?>
<?php include_once 'database/connect.php'; ?>
<?php 
	$id = -1;
	if (isset($_GET["id"])) {
		$id = intval($_GET['id']);
	}
	$sql = "select * from posts where id = $id";
	$query = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($query);
 ?>
<div id="docbai">
	<h3><?php echo $data["title"]; ?></h3>
	<i>Ngày tạo: <?php echo $data["createdate"]; ?></i>
	<p class="noidung"><?php echo $data["content"]; ?></p>
</div>
<?php include 'includes/footer.php'; ?>