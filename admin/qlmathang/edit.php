<?php 
    include("../inc/top.php");
?>

<form method="post" enctype="multipart/form-data" action="index.php">
    <input type="hidden" name="action" value="xulysua">
    <input type="text" name="id" value="<?php echo $mathang["id"] ?>" hidden>
    <input type="text" name="hinhanh" value="<?php echo $mathang["hinhanh"] ?>" hidden>
    <div class="mb-3 mt-3">
        <label for="danhmuc_id" class="form-lable">Danh mục</label>
        <select class="form-select" name="danhmuc_id">
        <?php foreach ($danhmuc as $d): ?>
            <option value="<?php echo $d["id"]; ?>" <?php if($d["id"] == $mathang["danhmuc_id"]) { echo 'selected'; } ?>><?php echo $d["tendanhmuc"]; ?></option>
        <?php endforeach; ?>     
        </select>
    </div>
    <div class="mb-3 mt-3">
        <label for="tenmathang" class="form-lable">Tên mặt hàng</label>
        <input class="form-control" type="text" name="tenmathang" value="<?php echo $mathang['tenmathang'] ?>" placeholder="Nhập tên" required> 
    </div>
    <div class="mb-3 mt-3">
        <label for="giagoc" class="form-lable">Giá nhập</label>
        <input class="form-control" type="number" name="giagoc" value="<?php echo $mathang['giagoc'] ?>"> 
    </div>
    <div class="mb-3 mt-3">
        <label for="giaban" class="form-lable">Giá bán</label>
        <input class="form-control" type="number" name="giaban" value="<?php echo $mathang['giaban'] ?>"> 
    </div>
    <div class="mb-3 mt-3">
        <label for="soluongton" class="form-lable">Số lượng</label>
        <input class="form-control" type="number" name="soluongton" value="<?php echo $mathang['soluongton'] ?>"> 
    </div>
    <div class="mb-3 mt-3">
        <label for="mota" class="form-lable">Mô tả</label>
        <textarea id="editor"rows="5" class="form-control" name="mota" placeholder="Nhập mô tả" required><?php echo $mathang['mota'] ?></textarea>
    </div>
    <div class="mb-3 mt-3">
        <label>Hình ảnh</label>
        <input class="form-control" type="file" name="filehinhanh"> 
    </div>
    <div class="mb-3 mt-3">
        <input type="submit" value="Lưu" class="btn btn-success"> 
        <input type="reset" value="Hủy" class="btn btn-warning"> 
    </div>
</form>