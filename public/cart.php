<?php
include("inc/top.php");
?>
<?php if(demhangtronggio()==0){ ?>
<h3 class="text-dark">Giỏ hàng rỗng!</h3>
<p>Vui lòng chọn sản phẩm...</p>    
<?php 
} 
else{ 
?>
<h3 class="text-dark">Giỏ hàng của bạn:</h3>
<form action="index.php">
<table class="table table-hover">
    <tr><th>Hình ảnh</th><th>Tên hàng</th><th>Đơn giá</th><th>Số lượng</th><th>Thành tiền</th></tr>
<?php foreach($giohang as $id => $mh):   ?>
    <tr>
        <td><img width="50" src="../<?php echo $mh["hinhanh"]; ?>"></td>
        <td><?php echo $mh["tenmathang"]; ?></td>
        <td><?php echo number_format($mh["giaban"]); ?>đ</td>
        <td><input type="number" name="mh[<?php echo $id; ?>]" value="<?php echo $mh["soluong"]; ?>"></td>
        <td><?php echo number_format($mh["thanhtien"]); ?>đ</td>
    </tr>
<?php endforeach; ?>
    <tr><td colspan="3"></td><td class="fw-bold">Tổng tiền</td><td class="text-danger fw-bold"><?php echo number_format(tinhtiengiohang()); ?>đ</td></tr>

</table>
<div class="row">
    <div class="col"><a href="index.php?action=xoagiohang">Xóa tất cả</a> (Xóa một mặt hàng nhập số lượng = 0)</div>
    <div class="col text-end">    
    <input type="hidden" name="action" value="capnhatgio">
    <input type="submit" class="btn btn-warning" value="Cập nhật">
    <a href="index.php?action=thanhtoan" class="btn btn-success">Thanh toán</a>
    </div>
</div>
</form>
<?php } // end if ?>
<?php
include("inc/bottom.php");
?>