<?php
$open = "nxb";
require_once __DIR__. "/../../autoload/autoload.php";
if ( !isset($_SESSION["user"])) {
   header("Location:../sign-in.php");
}


$id = intval(getInput('id'));

$Editnxb = $db->fetchID("nxb", $id);
if(empty($Editnxb))
 {
     $_SESSION['error'] = "Dữ liệu không tồn tại";
     redirectAdmin("nxb");

 }
 /**
  * kiểm tra xem danh mục sản phẩm
  */
 $num = $db->delete("nxb", $id);
 if($num > 0)
 {
    $_SESSION['success'] = "Xóa thành công!";
    redirectAdmin("nxb");
 }
 else
 {
    $_SESSION['error'] = "Xóa thất bại!";
    redirectAdmin("nxb");
 }
?>