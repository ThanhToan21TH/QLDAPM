<?php 
require("../../model/database.php");
require("../../model/nguoidung.php");

// Biến $isLogin cho biết người dùng đăng nhập chưa
$isLogin = isset($_SESSION["nguoidung"]);


// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
elseif($isLogin == FALSE){  // chưa đăng nhập
    $action="dangnhap";
}
else{   // mặc định
    $action="macdinh";
}

$nd = new NGUOIDUNG();


switch($action){
    case "macdinh":               
        include("main.php");
        break;
    case "dangnhap":
        include("login.php");
        break;
    case "xldangnhap":
        $email = $_REQUEST["txtemail"];
        $matkhau = $_REQUEST["txtmatkhau"];
        if($nd->kiemtranguoidunghople($email,$matkhau)==TRUE){
            $_SESSION["nguoidung"] = $nd->laythongtinnguoidung($email); // đặt biến session
            include("main.php");
        }
        else{
            include("login.php");
        }
        break;
    case "dangxuat":
        unset($_SESSION["nguoidung"]);  // hủy biến session
        //include("login.php");         // hiển thị trang login
        header("location:../../index.php");     // hoặc chuyển hướng ra bên ngoài (trang dành cho khách)
        break;  
    case "hoso":               
        include("profile.php");
        break; 
    case "xlhoso":
        $mand = $_POST["txtid"];
        $email = $_POST["txtemail"];        
        $sodt = $_POST["txtdienthoai"];
        $hoten = $_POST["txthoten"];
        $hinhanh = $_POST["txthinhanh"];

        if($_FILES["fhinh"]["name"] != null){
            $hinhanh = basename($_FILES["fhinh"]["name"]);
            $duongdan = "../../images/users/" . $hinhanh;
            move_uploaded_file($_FILES["fhinh"]["tmp_name"], $duongdan);
        }
        
        $nd->capnhatnguoidung($mand,$email,$sodt,$hoten,$hinhanh);

        $_SESSION["nguoidung"] = $nd->laythongtinnguoidung($email);
        include("main.php");        
        break;

       
    case "matkhau":               
        include("changepass.php");
        break; 
    case "doimatkhau":
         if (isset($_POST["txtemail"]) && isset($_POST["txtmatkhaumoi"]) )
            $nd->doimatkhau($_POST["txtemail"],$_POST["txtmatkhaumoi"]);
        include("main.php");
        break; 
    default:
        break;
}
?>
