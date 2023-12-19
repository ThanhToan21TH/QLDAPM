<?php include("../inc/top.php"); ?>

<h3>Quản lý mặt hàng</h3>
<br>
<a class="btn btn-info" href="addform.php"><i class="align-middle" data-feather="plus-circle"></i>Thêm mặt hàng</a>
<br><br>
<table class="table table-hover">
	<tr><th>Tên mặt hàng</th><th>Giá bán</th><th>Số lượng</th><th>Hình ảnh</th><th>Sửa</th><th>Xóa</th></tr>
	<?php 
	foreach ($mathang as $m) : 
	?>
		<tr>
			<td>
				<a href="index.php?action=chitiet&id=<?php echo $m["id"]; ?>">
				<?php echo $m["tenmathang"]; ?>
			</a>
			</td>
			<td><?php echo $m["giaban"]; ?></td>
			<td><?php echo $m["soluongton"]; ?></td>
			<td>
				<a href="index.php?action=chitiet&id=<?php echo $m["id"]; ?>">
				<img src="../../<?php echo $m["hinhanh"]; ?> " width="80"class="img-thumbnail">
				</a>
			</td>
			<td><a href="index.php?action=sua&id=<?php echo $m["id"]; ?>" class="btn btn-warning"><i class="align-middle" data-feather="edit"></i></a></td>
			<td><a href="index.php?action=xoa&id=<?php echo $m["id"]; ?>" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa?')"><i class="align-middle" data-feather="trash-2"></i></a></td>
		</tr>
	<?php 
		endforeach; 
	?>
</table>

<?php include("../inc/bottom.php"); ?>
