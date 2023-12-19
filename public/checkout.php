<?php include("inc/top.php"); ?>

<div class="container">    
  <div class="row"> 
    <h3>Vui lòng nhập đầy đủ thông tin</h3>
	<div class="col-sm-6">
	<h4 class="text-black-50">Thông tin khách hàng</h4>
	<?php 
	if(isset($_SESSION["khachhang"])){
	?>
	<form method="post" action="index.php">
		<input type="hidden" name="txtid" value="<?php echo $_SESSION["khachhang"]["id"]; ?>">
		<input type="hidden" name="action" value="luudonhang">
		<div class="my-3">
			<label>Email</label>
			<input type="email" class="form-control" name="txtemail" value="<?php echo $_SESSION["khachhang"]["email"]; ?>" disabled>
		</div>
		<div class="my-3">
			<label>Họ tên</label>
			<input type="text" class="form-control" name="txthoten" value="<?php echo $_SESSION["khachhang"]["hoten"]; ?>" disabled>
		</div>
		<div class="my-3">
			<label>Số điện thoại</label>
			<input type="number" class="form-control" name="txtsodienthoai" value="<?php echo $_SESSION["khachhang"]["sodienthoai"] ?>" disabled>
		</div>
		<div class="my-3">
			<label>Địa chỉ giao hàng</label>
			<textarea class="form-control" name="txtdiachi" required></textarea>
		</div>
		<div class="my-3">
			<input type="submit" value="Hoàn tất đơn hàng" class="btn btn-primary">
		</div>
	</form>
	<?php
	}
	else{	
	?>
	<form method="post"  action="index.php">
		<input type="hidden" name="action" value="luudonhang">
		<div class="my-3">
			<label>Email</label>
			<input type="email" class="form-control" name="txtemail" required>
		</div>
		<div class="my-3">
			<label>Họ tên</label>
			<input type="text" class="form-control" name="txthoten" required>
		</div>
		<div class="my-3">
			<label>Số điện thoại</label>
			<input type="number" class="form-control" name="txtsodienthoai" required>
		</div>
		<div class="my-3">
			<label>Địa chỉ</label>
			<textarea class="form-control" name="txtdiachi" required></textarea>
		</div>
		<div class="my-3">
			<input type="submit" value="Hoàn tất đơn hàng" class="btn btn-primary">
		</div>
	</form>
	<?php	
	}
	?>
	</div>
	<div class="col-sm-6">
	<h4 class="text-dark">Thông tin đơn hàng</h4>
		<table class="table table-bordered">
		<tr class="table-secondary">
		<th>Sản phẩm</th> 
		<th>Đơn giá</th>
		<th>Số lượng</th>
		<th>Thành tiền</th>
		</tr>
		<?php foreach($giohang as $id => $mh): ?>
		<tr>
		<td><img width="50" src="../<?php echo $mh["hinhanh"]; ?>"><?php echo $mh["tenmathang"]; ?></td>
		<td><?php echo number_format($mh["giaban"]) . "đ"; ?></td>
		<td><?php echo $mh["soluong"]; ?></td>
		<td><?php echo number_format($mh["thanhtien"]) . "đ"; ?></td>
		</tr>
		<?php endforeach; ?>
		<tr class="table-secondary">
		<td colspan="3" class="text-end"><b>Tổng tiền</b></td>
		<td><b><?php echo number_format(tinhtiengiohang()); ?>đ</b></td>
		</tr>
		</table>
	</div>
    


  </div>
 
</div>

<?php include("inc/bottom.php"); ?>