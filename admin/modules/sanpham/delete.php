<?php
$open = "sanpham";
require_once __DIR__. "/../../autoload/autoload.php";
if ( !isset($_SESSION["user"])) {
   header("Location:../sign-in.php");
}


$id = intval(getInput('id'));

$Editsanpham = $db->fetchID("sanpham", $id);
if(empty($Editsanpham))
 {
     $_SESSION['error'] = "Dữ liệu không tồn tại";
     redirectAdmin("sanpham");

 }
 /**
  * kiểm tra xem danh mục sản phẩm
  */
 $num = $db->delete("sanpham", $id);
 if($num > 0)
 {
    $_SESSION['success'] = "Xóa thành công!";
    redirectAdmin("sanpham");
 }
 else
 {
    $_SESSION['error'] = "Xóa thất bại!";
    redirectAdmin("sanpham");
 }
?>