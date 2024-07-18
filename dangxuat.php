<?php
session_start();
unset($_SESSION["user"]);
echo '<script type="text/javascript">alert("Đăng xuất thành công!"); window.location.href = "sign-in.php";</script>';
?>
