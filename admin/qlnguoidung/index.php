<?php 
if(!isset($_SESSION["nguoidung"]))
    header("location:../index.php");

require("../../model/database.php");
require("../../model/nguoidung.php");

if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="macdinh"; 
}

$nguoidung = new NGUOIDUNG();

switch($action){
    case "macdinh":   
        $nguoidung = $nguoidung->laydanhsachnguoidung();   
		// sắp xếp
		if(isset($_GET["sort"])){
			$sort = $_GET["sort"];
			switch($sort){
				case 'email':
					usort($nguoidung, function($a, $b){ return strcmp($a["email"], $b["email"]); });
					break;
				case 'sodienthoai':
					usort($nguoidung, function($a, $b){ return strcmp($b["sodienthoai"], $a["sodienthoai"]); });
					break;
				case 'hoten':
					usort($nguoidung, function($a, $b){ return strcmp($b["hoten"], $a["hoten"]); });
					break;
				case 'loai':
					usort($nguoidung, function($a, $b){ return $a["loai"] - $b["loai"]; });
					break;
				default:
					ksort($nguoidung);
					break;
			}
		}
        include("main.php");
        break;
    case "khoa":   
        $mand = $_GET["mand"];
        $trangthai = $_GET["trangthai"];
        if(!$nguoidung->doitrangthai($mand, $trangthai)){
            $tb = "Đã đổi trạng thái!";
        }
        $nguoidung = $nguoidung->laydanhsachnguoidung();     
        include("main.php");
        break;
    case "them":        
        include("addform.php");        
        break;

    case "xlthem":
        $email = $_POST["txtemail"];
        $matkhau = $_POST["txtmatkhau"];
        $sodt = $_POST["txtdienthoai"];
        $hoten = $_POST["txthoten"];
        $loaind = $_POST["optloaind"];
        if($nguoidung->laythongtinnguoidung($email)){   // có thể kiểm tra thêm số đt không trùng
            $tb = "Email này đã được cấp tài khoản!";
        }
        else{
            if(!$nguoidung->themnguoidung($email,$matkhau,$sodt,$hoten,$loaind)){
                $tb = "Không thêm được!";
            }
        }
        $nguoidung = $nguoidung->laydanhsachnguoidung();
        include("main.php");        
        break;
    
    default:
        break;
}
?>
