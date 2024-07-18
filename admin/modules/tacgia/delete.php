<?php
$open = "tacgia";
require_once __DIR__. "/../../autoload/autoload.php";

$id = intval(getInput('id'));

$Edittacgia = $db->fetchID("tacgia", $id);
if(empty($Edittacgia))
 {
     $_SESSION['error'] = "Dữ liệu không tồn tại";
     redirectAdmin("tacgia");

 }
 /**
  * kiểm tra xem danh mục sản phẩm
  */
 $num = $db->delete("tacgia", $id);
 if($num > 0)
 {
    $_SESSION['success'] = "Xóa thành công!";
    redirectAdmin("tacgia");
 }
 else
 {
    $_SESSION['error'] = "Xóa thất bại!";
    redirectAdmin("tacgia");
 }
?>