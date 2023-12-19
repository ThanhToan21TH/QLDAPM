<?php include("inc/top.php"); ?>

<h3 class="text-info"><?php echo $tendm; ?></h3>
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
<?php 
if($mathang != null){
    foreach($mathang as $m):
?>
    <div class="col mb-5">
        <div class="card h-100 shadow">
            <!-- Sale badge-->
            <?php if ($m["giaban"] != $m["giagoc"]){ ?>
            <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Giảm giá</div>
            <?php } // end if ?>
            <!-- Product image-->
            <a href="index.php?action=detail&id=<?php echo $m["id"]; ?>">
                <img class="card-img-top" src="../<?php echo $m["hinhanh"]; ?>" alt="<?php echo $m["tenmathang"]; ?>" />
            </a>
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <a class="text-decoration-none" href="index.php?action=detail&id=<?php echo $m["id"]; ?>"><h5 class="fw-bolder text-info"><?php echo $m["tenmathang"]; ?></h5></a>
                    <!-- Product reviews-->
                    <div class="d-flex justify-content-center small text-warning mb-2">
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                    </div>
                    <!-- Product price-->
                    <?php if ($m["giaban"] != $m["giagoc"]){ ?>
                    <span class="text-muted text-decoration-line-through"><?php echo number_format($m["giagoc"]); ?>đ</span><?php } // end if ?>
                    <span class="text-danger fw-bolder"><?php echo number_format($m["giaban"]*0.9); ?>đ</span>
                </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-info mt-auto" href="index.php?action=chovaogio&id=<?php echo $d["id"]; ?>">Chọn mua</a></div>
            </div>
        </div>
    </div>
<?php 
    endforeach; 
    }
    else{
        echo "<p>Danh mục này hiện chưa có mặt hàng. Vui lòng xem danh mục khác...</p>";
    }
?>              
</div>
<ul class="pagination justify-content-center" style="margin:20px 0">
    <li class="page-item"><a class="page-link" href="#"><i class="bi bi-caret-left-fill"></i></a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#"><i class="bi bi-caret-right-fill"></i></a></li>
</ul>

<?php include("inc/bottom.php"); ?>