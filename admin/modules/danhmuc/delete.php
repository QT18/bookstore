<?php
$open = "danhmuc";
require_once __DIR__. "/../../autoload/autoload.php";
if ( !isset($_SESSION["user"])) {
   header("Location:../sign-in.php");
}


$id = intval(getInput('id'));

$Editdanhmuc = $db->fetchID("danhmuc", $id);
if(empty($Editdanhmuc))
 {
     $_SESSION['error'] = "Dữ liệu không tồn tại";
     redirectAdmin("danhmuc");

 }
 /**
  * kiểm tra xem danh mục sản phẩm
  */
 $num = $db->delete("danhmuc", $id);
 if($num > 0)
 {
    $_SESSION['success'] = "Xóa thành công!";
    redirectAdmin("danhmuc");
 }
 else
 {
    $_SESSION['error'] = "Xóa thất bại!";
    redirectAdmin("danhmuc");
 }
?>