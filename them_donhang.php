<?php
require_once __DIR__. "/admin/autoload/autoload.php";

if ( !isset($_SESSION["user"])) {
    header("Location:../sign-in.php");
}
    $makhachhang = $_SESSION["userid"];
    $result = "INSERT INTO donhang VALUES(NULL,'$makhachhang','" . date('y/m/d') . "',NULL,'Processing' )";
if ($result) {
    echo '<script type="text/javascript">alert("Đặt hàng thành công!"); history.back();</script>';
    } else {
    echo '<script type="text/javascript">alert("Đặt hàng thất bại!"); history.back();</script>';
    }

?>