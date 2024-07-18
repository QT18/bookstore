<?php
$open = "donhang";
require_once __DIR__."/../../autoload/autoload.php";
$conn = mysqli_connect("localhost","root","","luanvan");
mysqli_set_charset($conn,"utf8");

if ( !isset($_SESSION["user"])) {
    header("Location:../sign-in.php");
}
if (isset($_GET['data'])) {
    $data = $_GET['data'];
    $code_donhang = json_decode($data);
}
// $query = $db->fetchsql("SELECT * FROM donhang WHERE code_donhang = $code LIMIT 1");
// $query = $db->fetchsql("SELECT * FROM chitietdonhang WHERE code_donhang = $code");
// $query = $db->fetchsql("UPDATE donhang SET trangthai = $order_status WHERE code_donhang = $code");
if (isset($_GET['xacnhan']) && $_GET['xacnhan'] == 1) {
    if ($code_donhang) {
        foreach ($code_donhang as $code) {
            // Lay thong tin don hang
            $sql_order_get = "SELECT * FROM donhang WHERE code_donhang = $code LIMIT 1";
            $query_order_get = mysqli_query($conn, $sql_order_get);
            $order = mysqli_fetch_array($query_order_get);
            // $order = $db->fetchsql("SELECT * FROM donhang WHERE code_donhang = $code  LIMIT 1");
            $order_status = $order['trangthai'];
            echo "<pre />";
            var_dump($order_status);
            if ($order_status < 3) {
                $order_status++;
            }
            // var_dump($order_status);
            //Chuyen trang thai don hang
            $sql_order_confirm = "UPDATE donhang SET trangthai = $order_status WHERE code_donhang = $code";
            mysqli_query($conn, $sql_order_confirm);
            if ($order['trangthai'] == 0) {
                $sql_order_detail = "SELECT * FROM donhang WHERE code_donhang = $code";
                $query_order_detail = mysqli_query($conn, $sql_order_detail);
            }
        }
        header('Location:index.php');
    } elseif ($_GET['code_donhang']) {
        $code = $_GET['code_donhang'];
        // Lay thong tin don hang
        $sql_order_get = "SELECT * FROM donhang WHERE code_donhang = $code LIMIT 1";
        $query_order_get = mysqli_query($mysqli, $sql_order_get);
        $order = mysqli_fetch_array($query_order_get);
        $order_status = $order['trangthai'];
        if ($order_status < 3) {
            $order_status++;
        }
        //Chuyen trang thai don hang
        $sql_order_confirm = "UPDATE donhang SET trangthai = $order_status WHERE code_donhang = $code";
        mysqli_query($mysqli, $sql_order_confirm);

        if ($order['trangthai'] == 0) {
            $sql_order_detail = "SELECT * FROM chitietdonhang WHERE code_donhang = $code";
            $query_order_detail = mysqli_query($mysqli, $sql_order_detail);


        }
        
        header('Location: ../../modules/donhang/chitietdonhang.php&code_donhang=' . $_GET['code_donhang'] . '&message=success');
    }
}

// if (isset($_GET['rollback']) && $_GET['rollback'] == 1) {
//     header('Location: ../../index.php?action=order&query=order_detail_online&order_code=' . $_GET['order_code'] . '&message=info');
// }

// if (isset($_GET['cancel']) && $_GET['cancel'] == 1) {
//     foreach ($code_donhang as $code) {
//         $sql_get_order = "SELECT * FROM donhang WHERE order_code = $code LIMIT 1";
//         $query_get_order = mysqli_query($mysqli, $sql_get_order);

//         $sql_get_order_detail = "SELECT * FROM order_detail WHERE order_code = $code";
//         $query_order_detail = mysqli_query($mysqli, $sql_get_order_detail);

//         while ($item = mysqli_fetch_array($query_order_detail)) {
//             $product_id = $item['product_id'];
//             $query_get_product = mysqli_query($mysqli, "SELECT * FROM product WHERE product_id = $product_id");
//             $product = mysqli_fetch_array($query_get_product);
//             $quantity = $product['product_quantity'] + $item['product_quantity'];
//             $quantity_sales = $product['quantity_sales'] - $item['product_quantity'];

//             mysqli_query($mysqli, "UPDATE product SET product_quantity = $quantity, quantity_sales = $quantity_sales WHERE product_id = $product_id");
//         }

//         $sql_order_cancel = "UPDATE donhang SET order_status = -1 WHERE order_code = $code";
//         mysqli_query($mysqli, $sql_order_cancel);
//     }
//     header('Location: ../../index.php?action=order&query=order_list&message=success');
// }

// // Xoa san pham khoi don hang
// if (isset($_SESSION['order']) && isset($_GET['delete'])) {
//     $product_id = $_GET['delete'];
//     foreach ($_SESSION['order'] as $order_item) {
//         if ($order_item['product_id'] != $product_id) {
//             $product[] = array('product_id' => $order_item['product_id'], 'product_name' => $order_item['product_name'], 'product_quantity' => $order_item['product_quantity'], 'product_price' => $order_item['product_price'], 'product_sale' => $order_item['product_sale'], 'product_image' => $order_item['product_image']);
//         }
//         $_SESSION['order'] = $product;
//         header('Location:../../index.php?action=order&query=order_add&message=success');
//     }
// }
// // xoa tat ca
// if (isset($_GET['deleteall']) && $_GET['deleteall'] == 1) {
//     unset($_SESSION['order']);
//     header('Location:../../index.php?action=order&query=order_add&message=success');
// }
// them sanpham vao don hang

