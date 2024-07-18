<?php
$conn = mysqli_connect("localhost","root","","luanvan");
mysqli_set_charset($conn,"utf8");
// require_once __DIR__. "/admin/autoload/autoload.php";
if (isset($_POST['submit']) && $_POST["email"] != ''  
    && $_POST["hoten"] != '' && $_POST["diachi"] != '' && $_POST["sdt"] != '' && $_POST["matkhau"] != '') 
    // xử lý đăng ký tài khoản
{
    $hoten = $_POST["hoten"];
    $diachi = $_POST["diachi"];
    $sdt = $_POST["sdt"];
    $email = $_POST["email"];
    $password = $_POST["matkhau"];
    $idvaitro = 2;
    $sql = "SELECT * FROM users WHERE email='$email' ";
    $old = mysqli_query($conn,$sql);
    $password = md5($password);

    if (mysqli_num_rows($old) > 0 ) 
    {
        header("location:sign-in.php");
    }
    $sql = "INSERT INTO users (hoten,diachi,sdt,email,matkhau,idvaitro) VALUES ('$hoten','$diachi','$sdt','$email','$password','$idvaitro')";
    mysqli_query($conn,$sql) or die("Lỗi truy vấn chèn dữ liệu ----" .mysqli_error($conn));
    echo '<script type="text/javascript">alert("Đăng ký tài khoản thành công!"); window.location.href = "sign-in.php";</script>';


}else
{
    header("location:sign-in.php");
    
}
?>