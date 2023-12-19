<?php include("../inc/top.php"); ?>
<div>
  <h3>Quản lý người dùng</h3>
  <!-- Thông báo lỗi nếu có -->
  <?php
  if(isset($tb)){
  ?>
  <div class="alert alert-danger alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Lỗi!</strong> <?php echo $tb; ?>
  </div>
  <?php
  }
  ?>
  <!-- Nút mở hộp modal chứa form thêm mới -->
  <div><a class="btn btn-primary" href="index.php?action=them"><span class="glyphicon glyphicon-plus"></span> Thêm người dùng</a></div>

  <br>

  <!-- Danh sách người dùng -->
  <table class="table table-hover">
        <tr>
		<th><a href="index.php?sort=email">Email</a></th>
		<th><a href="index.php?sort=sodienthoai">Số điện thoại</a></th>
		<th><a href="index.php?sort=hoten">Họ tên</a></th>
		<th><a href="index.php?sort=loai">Loại quyền</a></th>
		<th>Trạng thái</th>
		<th>Khóa</th></tr>
      <?php foreach ($nguoidung as $nd): ?>
        <tr><td><?php echo $nd["email"]; ?></td>
        	<td><?php echo $nd["sodienthoai"]; ?></td>
			<td><?php echo $nd["hoten"]; ?></td>
        	<td><?php if($nd["loai"]==1) echo "Quản trị";elseif($nd["loai"]==2) echo "Nhân viên"; else echo "Khách hàng" ; ?></td>
          <td><?php if($nd["loai"]!=1) {if($nd["trangthai"]==1) echo "Kích hoạt"; else echo "Khóa" ; }?></td>
          <td>
          <?php 
          if($nd["loai"]!=1) {
            if($nd["trangthai"]==1){ ?>
              <a href="?action=khoa&trangthai=0&mand=<?php echo $nd["id"]; ?>">Khóa</a></td></tr>
            <?php 
            }
            else { ?>
              <a href="?action=khoa&trangthai=1&mand=<?php echo $nd["id"]; ?>">Kích hoạt</a></td></tr>
          <?php 
            }
          }
      endforeach; ?>
  </table>

</div>
<?php include("../inc/bottom.php"); ?>
