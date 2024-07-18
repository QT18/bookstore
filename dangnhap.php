<?php
// require_once __DIR__. "/libraries/session.php";
$conn = mysqli_connect("localhost","root","","luanvan");
mysqli_set_charset($conn,"utf8");
require_once __DIR__. "/admin/autoload/autoload.php";
if (isset($_POST["submit"]) && $_POST["email"] != ''  && $_POST["matkhau"] != '') 
    // xử lý đăng nhập tài khoản
{
    $email = $_POST["email"];
    $password = $_POST["matkhau"];
    $password = md5($password);
    $sql = "SELECT * FROM users WHERE email='$email' AND  matkhau='$password'";
    $query = mysqli_query($conn,$sql) or die("Lỗi truy vấn chèn dữ liệu ----" .mysqli_error($conn));
    $user = mysqli_fetch_assoc($query);
    
    if (mysqli_num_rows($query) > 0 )    
    {
        $role = $user['idvaitro'];
        if ($role== 1) {
            $_SESSION["user"]=$role;
            echo '<script type="text/javascript">alert("Đăng nhập tài khoản thành công!"); window.location.href = "admin/index.php";</script>';
        }else {
            $_SESSION["user"]=$role;
            $_SESSION["userid"]=$user['id'];
            $_SESSION["username"]=$user['hoten'];
            $_SESSION["diachi"]=$user['diachi'];
            echo '<script type="text/javascript">alert("Đăng nhập tài khoản thành công!"); window.location.href = "index.php";</script>';
        }
    }
    else
    {
        echo '<script type="text/javascript">alert("Bạn nhập sai Email hoặc mật khẩu!"); window.location.href = "sign-in.php";</script>';
    }
}
else
{
    header("location:sign-in.php");
}
//
?>