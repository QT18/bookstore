<?php
require_once __DIR__ . "/admin/autoload/autoload.php";
// require_once __DIR__ . "/config_vnpay.php";
$code_donhang = rand(0, 9999);
$hinhthucthanhtoan = $_POST['thanhtoan'];
 $sum = 0;

if (isset($_POST['redirect'])) {
    $_SESSION['code_donhang'] =  $code_donhang;
    if ($hinhthucthanhtoan == "Tien mat") {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = postInput("name");
            $email = postInput("email");
            $phone = postInput("phone");
            $address = postInput("address");
            // $code_donhang = getInput("code_donhang");
        
            $data = [
                'ten'         => $name,
                'sodienthoai' => $phone,
                'diachi'      => $address,
                'ngaydathang' => date('Y-m-d'),
                'tongtien'    =>  $_SESSION['tongtien'],
                'code_donhang'=>  $code_donhang,
                'hinhthucthanhtoan'=> $hinhthucthanhtoan,
                'trangthai'   => 0,
                'makhachhang' => isset($_SESSION['userid']) ? $_SESSION['userid'] : 0,
            ];
        
            // tiến hành insert
            $id_instart = $db->insert("donhang", $data);
            
            if ((isset($_SESSION['cart'])) && count($_SESSION['cart']) > 0) {
                foreach ($_SESSION['cart'] as $m => $l) {
                    $data2 = [
                        'masp' => $m,
                        'madonhang' => $id_instart,
                        'code_donhang'=>  $code_donhang,
                        'so_luong'    => $l['qty'],
                        'tensp'    => $l['tensanpham'],
                        'gia'        => $l['gia'],
                        'hinhanh'    => $l['hinhanh']
                    ];
            $id_instart2 = $db->insert("chitietdonhang", $data2);
                }
                unset($_SESSION['cart']);
                unset($_SESSION['tongtien']);
                unset($_SESSION['sums']);
                $_SESSION['success'] = ' Đặt hàng thành công ! Đơn hàng sẽ được giao đến bạn trong vài ngày! ';
                echo '<script type="text/javascript">alert("Đặt hàng thành công!"); window.location.href = "donhang.php";</script>';

            }

        }
    }elseif ($hinhthucthanhtoan == "VNPay") {
        //thanh toán vnpay
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = postInput("name");
            $email = postInput("email");
            $phone = postInput("phone");
            $address = postInput("address");
            $data = [
                'ten'         => $name,
                'sodienthoai' => $phone,
                'diachi'      => $address,
                'ngaydathang' => date('Y-m-d'),
                'tongtien'    => $_SESSION['tongtien'],
                'code_donhang'=>  $code_donhang,
                'hinhthucthanhtoan'=> $hinhthucthanhtoan,
                'trangthai'   => 0,
                'makhachhang' => isset($_SESSION['userid']) ? $_SESSION['userid'] : 0,
            ];
            // tiến hành insert
            $id_instart = $db->insert("donhang", $data);

            if ((isset($_SESSION['cart'])) && count($_SESSION['cart']) > 0) {
                foreach ($_SESSION['cart'] as $m => $l) {
                    $data2 = [
                        'masp' => $m,
                        'madonhang' => $id_instart,
                        'code_donhang'=>  $code_donhang,
                        'so_luong'    => $l['qty'],
                        'tensp'    => $l['tensanpham'],
                        'gia'        => $l['gia'],
                        'hinhanh'    => $l['hinhanh']
                    ];
                    $id_instart2 = $db->insert("chitietdonhang", $data2);
                }
                $tongtien = $_SESSION['tongtien'];
                unset($_SESSION['cart']);
                unset($_SESSION['tongtien']);
                unset($_SESSION['sums']);

                $_SESSION['success'] = ' Đặt hàng thành công ! Đơn hàng sẽ được giao đến bạn trong vài ngày! ';

                $vnp_TxnRef =  $code_donhang; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                $vnp_OrderInfo = 'Thanh toán đơn hàng mua sách';
                $vnp_OrderType = 'billpayment';
                $vnp_Amount = $tongtien * 100;
                $vnp_Locale = 'vn';
                $vnp_BankCode = 'NCB';
                $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
                //Add Params of 2.0.1 Version
                $vnp_ExpireDate = $expire;

                $inputData = array(
                    "vnp_Version" => "2.1.0",
                    "vnp_TmnCode" => $vnp_TmnCode,
                    "vnp_Amount" => $vnp_Amount,
                    "vnp_Command" => "pay",
                    "vnp_CreateDate" => date('YmdHis'),
                    "vnp_CurrCode" => "VND",
                    "vnp_IpAddr" => $vnp_IpAddr,
                    "vnp_Locale" => $vnp_Locale,
                    "vnp_OrderInfo" => $vnp_OrderInfo,
                    "vnp_OrderType" => $vnp_OrderType,
                    "vnp_ReturnUrl" => $vnp_Returnurl,
                    "vnp_TxnRef" => $vnp_TxnRef,
                    "vnp_ExpireDate"=>$vnp_ExpireDate
                );
                if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                    $inputData['vnp_BankCode'] = $vnp_BankCode;
                }
                //var_dump($inputData);
                ksort($inputData);
                $query = "";
                $i = 0;
                $hashdata = "";
                foreach ($inputData as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                    } else {
                        $hashdata .= urlencode($key) . "=" . urlencode($value);
                        $i = 1;
                    }
                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                }
                
                $vnp_Url = $vnp_Url . "?" . $query;
                if (isset($vnp_HashSecret)) {
                    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
                    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                }
                $returnData = array('code' => '00'
                    , 'message' => 'success'
                    , 'data' => $vnp_Url);
                    if (isset($_POST['redirect'])) {
                        $_SESSION['code_donhang']=$code_donhang;
                        header('Location: ' . $vnp_Url);
                        die();
                    } else {
                        echo json_encode($returnData);
                    }
            }
        }
    }
}
?>