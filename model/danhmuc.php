<?php
class DANHMUC{
    private $id;
    private $tendanhmuc;

    public function getid(){
        return $this->id;
    }

    public function setid($value){
        $this->id = $value;
    }

    public function gettendanhmuc(){
        return $this->tendanhmuc;
    }

    public function settendanhmuc($value){
        $this->tendanhmuc = $value;
    }

    // Lấy danh sách
    public function laydanhmuc(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM danhmuc";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $result = $cmd->fetchAll();
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }


    // Lấy danh mục theo id
    public function laydanhmuctheoid($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM danhmuc WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->execute();
            $result = $cmd->fetch();             
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Thêm mới
    public function themdanhmuc($danhmuc){
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO danhmuc(tendanhmuc) VALUES(:tendanhmuc)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tendanhmuc", $danhmuc->tendanhmuc);
            $result = $cmd->execute();
            return $result;
        }
            catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Xóa 
    public function xoadanhmuc($danhmuc){
    $dbcon = DATABASE::connect();
    try{
    $sql = "DELETE FROM danhmuc WHERE id=:id";
    $cmd = $dbcon->prepare($sql);
    $cmd->bindValue(":id", $danhmuc->id);
    $result = $cmd->execute();
    return $result;
    }
    catch(PDOException $e){
    $error_message = $e->getMessage();
    echo "<p>Lỗi truy vấn: $error_message</p>";
    exit();
    }
    }
    // Cập nhật 
    public function suadanhmuc($danhmuc){
    $dbcon = DATABASE::connect();
    try{
    $sql = "UPDATE danhmuc SET tendanhmuc=:tendanhmuc WHERE id=:id";
    $cmd = $dbcon->prepare($sql);
    $cmd->bindValue(":tendanhmuc", $danhmuc->tendanhmuc);
    $cmd->bindValue(":id", $danhmuc->id);
    $result = $cmd->execute();
    return $result;
    }
    catch(PDOException $e){
    $error_message = $e->getMessage();
    echo "<p>Lỗi truy vấn: $error_message</p>";
    exit();
    }
    }

}
?>
