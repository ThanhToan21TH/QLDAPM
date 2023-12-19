<?php include("../inc/top.php"); ?>

<a href="index.php">Trở về danh sách</a>
<h3><?php echo $m["tenmathang"]; ?></h3>
<img src="../../<?php echo $m["hinhanh"]; ?>" width="400" class="img-thumbnail">
<p><strong>Mô tả: </strong><br><?php echo $m["mota"]; ?></p>
<p><strong>Giá gốc: </strong><br><?php echo number_format ($m["giagoc"]); ?>đ</p>
<p><strong>Giá bán: </strong><br><?php echo number_format ($m["giaban"]); ?>đ</p>
<p><strong>Lượt xem: </strong><br><?php echo $m["luotxem"]; ?></p>
<p><strong>Lượt mua: </strong><br><?php echo $m["luotmua"]; ?></p>
<p><strong>Số lượng tồn: </strong><br><?php echo $m["soluongton"]; ?></p>
<p><a href="index.php?action=sua&id=<?php echo $m["id"]; ?>" class="btn btn-warning"><i class="align-middle" data-feather="edit"></i>Sửa</a>
<a href="index.php?action=xoa&id=<?php echo $m["id"]; ?>" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i>Xóa</a></p>
<a href="index.php">Trở về danh sách</a>

<?php include("../inc/bottom.php"); ?>


