<?php 
    include("../inc/top.php"); 
    require("../../model/database.php");
    require("../../model/danhmuc.php"); 
    $dm = new DANHMUC();
    $danhmuc = $dm->laydanhmuc();
?>

<form method="post" enctype="multipart/form-data" action="index.php">
    <input type="hidden" name="action" value="xulythem">
    <div class="mb-3 mt-3">
        <label for="danhmuc_id" class="form-lable">Danh mục</label>
        <select class="form-select" name="danhmuc_id">
        <?php foreach ($danhmuc as $d): ?>
            <option value="<?php echo $d["id"]; ?>"><?php echo $d["tendanhmuc"]; ?></option>
        <?php endforeach; ?>     
        </select>
    </div>
    <div class="mb-3 mt-3">
        <label for="tenmathang" class="form-lable">Tên mặt hàng</label>
        <input class="form-control" type="text" name="tenmathang" placeholder="Nhập tên" required> 
    </div>
    <div class="mb-3 mt-3">
        <label for="giagoc" class="form-lable">Giá nhập</label>
        <input class="form-control" type="number" name="giagoc" value="0"> 
    </div>
    <div class="mb-3 mt-3">
        <label for="giaban" class="form-lable">Giá bán</label>
        <input class="form-control" type="number" name="giaban" value="0"> 
    </div>
    <div class="mb-3 mt-3">
        <label for="soluongton" class="form-lable">Số lượng</label>
        <input class="form-control" type="number" name="soluongton"  value="0"> 
    </div>
    <div class="mb-3 mt-3">
        <label for="mota" class="form-lable">Mô tả</label>
        <textarea id="editor"rows="5" class="form-control" name="mota" placeholder="Nhập mô tả" required></textarea>
    </div>
    <div class="mb-3 mt-3">
        <label>Hình ảnh</label>
        <input class="form-control" type="file" name="filehinhanh" required> 
    </div>
    <div class="mb-3 mt-3">
        <input type="submit" value="Lưu" class="btn btn-success"> 
        <input type="reset" value="Hủy" class="btn btn-warning"> 
    </div>
</form>