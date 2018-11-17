<?php include 'includes/header.php'?>
<?php include_once 'database/connect.php'; ?>
<?php 
	$sql = "select * from posts where is_public = 1 order by createdate desc";
	$query = mysqli_query($conn, $sql);
 ?>
	<p>Content write here</p>
	<div id="baiviet"">
		<?php
			while ($data = mysqli_fetch_assoc($query))
			{
		 ?>
		 <div class="post">
		 	<h4 class="tieude">
		 		<?php echo $data["title"]; ?>
		 	</h4>
		 	<p class="noidung">
		 		<?php echo $data["content"]."..." ?>
		 	</p>
		 	<a href="xembai.php?id=<?php echo $data["id"]; ?> ">Xem thêm</a>
		 </div>
		 <?php } ?>
	</div>
<?php include 'includes/footer.php'?>