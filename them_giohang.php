<?php
    require_once __DIR__. "/admin/autoload/autoload.php";
    /**
     *  xử lý giỏ hàng
     */
    $path = $_SERVER["HTTP_REFERER"];

    if(isset($_GET['id']) && $_GET['id'] != '')
    {
        $id = $_GET['id'];
        $id = intval($id);
    }

    if (!isset($_SESSION['user'] ))
    {
        echo " <script>alert(' Đăng nhập để thực hiện tính năng này   !'); location.href='login.php';</script>";
    }

    
    $sanpham = $db->fetchID('sanpham',$id);
//    var_dump($sanpham);die;
    if (!$sanpham)
    {
         echo " <script>alert('Không tồn tại sản phẩm trong  kho hàng !'); location.href='index.php';</script>";
    }

    // session_destroy();
    if(isset($_SESSION['cart'][$id]))
    {
        $qty        = $_SESSION['cart'][$id]['qty'] + 1;
        $tensanpham = $sanpham['tensp'];
        $gia        = $sanpham['gia'];
        $hinhanh    = $sanpham['hinhanh'];
    }
    else
    {
        $qty        = 1;
        $tensanpham = $sanpham['tensp'];
        $gia        = $sanpham['gia'];
        $hinhanh    = $sanpham['hinhanh'];
    }
    $_SESSION['cart'][$id]['qty']           = $qty;
    $_SESSION['cart'][$id]['tensanpham']    = $tensanpham;
    $_SESSION['cart'][$id]['gia']           = $gia; 
    $_SESSION['cart'][$id]['hinhanh']       = $hinhanh;
    $_SESSION['success'] = ' Thêm giỏ hàng thành công !';
    header("location: ".$path);
?>