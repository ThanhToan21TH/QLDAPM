<?php 
    require("../../model/database.php");
    require("../../model/danhmuc.php");
    require("../../model/mathang.php");

    // Xét xem có thao tác nào được chọn
    if(isset($_REQUEST["action"])){
        $action = $_REQUEST["action"];
    }
    else{   // mặc định là xem danh sách
        $action="xem";
    }

    $dm = new DANHMUC();
    $mh = new MATHANG();

    switch($action){
        case "xem":
            //$danhmuc = $dm->laydanhmuc();    
            $mathang = $mh->laymathang();   
            include("main.php");
            break;

        case "chitiet":
            if(isset($_GET["id"])){
                $m = $mh->laymathangtheoid($_GET["id"]);
                include("detail.php");
            }
            else{
                $mathang = $mh ->laymathang();
                include("main.php");
            }
            break;

        case "them":
            $danhmuc = $dm ->laydanhmuc();
            include("addform.php");
            break;

        case"xulythem":
            //Xử lý file upload
            $hinhanh = "images/products/" .basename($_FILES["filehinhanh"]["name"]); //đường dẫn ảnh lưu trong db
            $duongdan = "../../" . $hinhanh; //nơi lưu file upload (đường dẫn tính theo vị trí hiện hành)
            move_uploaded_file($_FILES["filehinhanh"]["tmp_name"], $duongdan);

            //Xử lý thêm mặt hàng
            $new_mathang = new MATHANG();
            $new_mathang->settenmathang($_POST['tenmathang']);
            $new_mathang->setmota($_POST['mota']);
            $new_mathang->setgiagoc($_POST['giagoc']);
            $new_mathang->setgiaban($_POST['giaban']);
            $new_mathang->setsoluongton($_POST['soluongton']);
            $new_mathang->sethinhanh($hinhanh);
            $new_mathang->setdanhmuc_id($_POST['danhmuc_id']);
            $new_mathang->setluotxem(0);
            $new_mathang->setluotmua(0);
            $mh->themmathang($new_mathang);
            header('location:./');
            break;

        case "xoa":
            $mh->xoamathang($_GET['id']);
            header('location:./');
            include("main.php");
            break;  

        case "sua":
            $mathang = $mh ->laymathangtheoid($_GET['id']);
            $danhmuc = $dm->laydanhmuc();
            include("edit.php");
            break;

        case "xulysua":
            $file_hinh = $_FILES['filehinhanh'];
            $hinhanh = $_POST['hinhanh'];
            $duongdan = "";

            if($file_hinh['name'] != null){
                $hinhanh = "images/products/" .basename($_FILES["filehinhanh"]["name"]); //đường dẫn ảnh lưu trong db
                $duongdan = "../../" . $hinhanh; //nơi lưu file upload (đường dẫn tính theo vị trí hiện hành)
                move_uploaded_file($_FILES["filehinhanh"]["tmp_name"], $duongdan);
            }

            //Xử lý thêm mặt hàng
            $new_mathang = new MATHANG();
            $new_mathang->setid($_POST['id']);
            $new_mathang->settenmathang($_POST['tenmathang']);
            $new_mathang->setmota($_POST['mota']);
            $new_mathang->setgiagoc($_POST['giagoc']);
            $new_mathang->setgiaban($_POST['giaban']);
            $new_mathang->setsoluongton($_POST['soluongton']);
            $new_mathang->sethinhanh($hinhanh);
            $new_mathang->setdanhmuc_id($_POST['danhmuc_id']);
            $mh->suamathang($new_mathang);
            header('location:./');

            break;

        default:
            break;
    }
?>
