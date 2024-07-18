<?php
require_once __DIR__ . "/admin/autoload/autoload.php";
// require_once __DIR__ . '/class/cart.php';
$id = intval(getInput('id'));
$makhachhang = $db->fetchID("users", $id);


if (!isset($_SESSION['cart'])) {
    echo " <script>alert('  Chưa có sản phẩm trong giỏ hàng!'); location.href='http://localhost/bookstore/';</script>";
}

$sum = 0;

//if (isset($_GET['transactionID']) && $_GET['transactionID']) {
//    $sqlUpdate = "UPDATE donhang SET loai = 2 WHERE id =  " . $_GET['transactionID'];
//    $db->fetchsql($sqlUpdate);
//    unset($_SESSION["cart"]);
//    header("location: http://localhost:8000/index.php?page_layout=notify");
//}


$user_id = isset($_SESSION['userid']) ? $_SESSION['userid'] : 0;
if ($user_id) {
    $auth_us = $db->fetchID('users', $user_id);
}

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
        'tongtien'    => $_SESSION['sums'],
        'makhachhang' => isset($_SESSION['userid']) ? $_SESSION['userid'] : 0,
    ];

    // tiến hành insert
    $id_instart = $db->insert("donhang", $data);
    if ((isset($_SESSION['cart'])) && count($_SESSION['cart']) > 0) {
        foreach ($_SESSION['cart'] as $m => $l) {
            $data2 = [
                'masp' => $m,
                'madonhang' => $id_instart,
                'soluong'    => $l['qty'],
                'tensp'    => $l['tensanpham'],
                'gia'        => $l['gia'],
                'hinhanh'    => $l['hinhanh']
            ];
            $id_instart2 = $db->insert("chitietdonhang", $data2);
        }

        unset($_SESSION['cart']);
        unset($_SESSION['tongtien']);
        unset($_SESSION['sums']);
        $_SESSION['success'] = ' Xác nhận thành công ! bạn hãy đợi bộ phận thanh toán xác nhận nhé ';
        // payOnline([
        //     "order_id" => $id_instart,
        //     "url_return"   => 'http://localhost/bookstore/giohang.php',
        //     "amount"       => $data['tongtien'] ?? $id_instart['tongtien'],
        //     "service_code" => "bookstore"
        // ]);
    }
}

?>

<?php require_once __DIR__ . "/layouts/header.php";
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
}
//    unset($_SESSION["cart"]);
//    echo "<pre />";
//  var_dump($_SESSION['cart']);

?>

<section class="banner"></section>
<div class="featuredProducts">

</div>
<div id="dataroww">
<?php if ( isset($_SESSION['success'])) : ?>
      <p class="text-success"><?php echo $_SESSION['success'] ?></p>
    <?php endif; unset($_SESSION['success']) ?>

    <h1>Giỏ hàng</h1>
    <div  class="tab-content outer-top-xs">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered table table-striped">
                <thead>
                <tr>
                    <th>STT</th>
                    <!-- <th>Id</th> -->
                    <th>Tên</th>
                    <th>Hình ảnh</th>
                    <th>Số Lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                    <th style="min-width: 150px; text-align: center"> Thao tác</th>
                </tr>
                </thead>
                <tbody>

                <?php $stt = 1;
                foreach ($_SESSION['cart'] as $key => $val): ?>
                    <tr>
                        <td><?php echo $stt; ?></td>
                        <!-- <td><?php echo $key; ?></td> -->
                        <td><?php echo $val['tensanpham'] ?></td>
                        <td>
                            <img src="<?php echo uploads() ?>sanpham/<?php echo $val['hinhanh'] ?>"
                                 class="" with="50px" height="50px">
                        </td>
                        <td>
                            <input type="number" name="quantity" min="1" max="10" class="form-control" id="qtyup"
                                   value="<?php echo $val['qty']; ?>"></b>

                        </td>
                        <td><?php echo number_format($val['gia'], 0, ',', '.'); ?></td>
                        <td>
                            <?php echo number_format($val['gia'] * $val['qty'], 0, ',', '.'); ?>
                        </td>
                        <td style="min-width: 100px; text-align: center">
                            <a href="javascript:;" class="btn  btn-xs btn-info updatecart my-button"
                               data-key=<?php echo $key ?>>Cập nhật</a>
                            <a href="xoagiohang.php?id=<?php echo $key ?>" class="btn btn-xs btn-danger my-button"
                               onclick="return confirm('Bạn có muốn xóa không ? ')" ;> 
                               <i class="fa fa-times" style="color: white"></i></a>
                        </td>

                    </tr>
                    <?php $sum += $val['gia'] * $val['qty'] ?>
                    <?php $stt++; endforeach;
                $_SESSION['tongtien'] = $sum; ?>
                <tr class="text-right">
                    <td colspan="9">
                        <div class="label-thanh-toan">Thành tiền : <span><?php echo formatprice($sum) ?> đ</span></div>

                        <!-- <div class="label-thanh-toan" style="margin-top: 15px;margin-bottom: 15px;"> Giảm giá :
                            <span><?php //echo checksumcart($sum) ?>
                                    % </span></div>
                        <?php //$_SESSION['sums'] = $sum * (100 - checksumcart($sum)) / 100 ?>
                        <div class="label-thanh-toan">Tổng tiền :
                            <span><?php //echo formatprice($sum * (100 - checksumcart($sum)) / 100) ?>
                                    đ</span></div> -->
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-3">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Thông tin thanh toán</h4>
                </div>
                <div class="card-body">
                    <form action="thanhtoan.php" method="POST">
                        <div class="input-group" style="margin-bottom: 10px">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input id="email" type="email"
                                   class="form-control" <?php echo isset($auth_us) ? 'readonly="readonly"' : '' ?>
                                   name="email" placeholder="Email" required="required"
                                   value="<?php echo isset($auth_us) ? $auth_us['email'] : '' ?>">
                        </div>
                        <div class="input-group" style="margin-bottom: 10px">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="name" type="text" class="form-control" name="name" placeholder="Họ và tên"
                                   required="" value="<?php echo isset($auth_us) ? $auth_us['hoten'] : '' ?>">
                        </div>
                        <div class="input-group" style="margin-bottom: 10px">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input id="name" type="number" class="form-control" name="phone"
                                   placeholder="Số điện thoại" required=""
                                   value="<?php echo isset($auth_us) ? $auth_us['sdt'] : '' ?>">
                        </div>
                        <div class="input-group" style="margin-bottom: 10px">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                            <input id="name" type="text" class="form-control" name="address"
                                   placeholder="Địa chỉ" required=""
                                   value="<?php echo isset($auth_us) ? $auth_us['diachi'] : '' ?>">
                        </div>
                        <div class="input-group" style="margin-bottom: 10px">
                        <textarea class="form-control" name="comment" placeholder="Ghi chú" rows="2"
                                  cols="100"></textarea>
                        </div>
                        <!-- <div class="" style="display: flex;justify-content: center">
                            <input type="submit" name="" value="Thanh toán online" class="my-button"
                                   style="flex: 0 0 40%; margin-top: 10px">      
                        </div> -->
                        <div class="payment__item d-flex align-center">
                            <input  type="radio" name="thanhtoan" id="vnp" value="VNPay" />
                            <label for="payment_vnp">
                                <span class="d-block">Thanh toán chuyển khoản VNPAY</span>
                            </label>
                        </div>
                        <div>
                        <input  type="radio" name="thanhtoan" id="cod" value="Tien mat" checked />
                            <label for="payment_default">
                                <span class="d-block">Thanh toán khi nhận hàng</span>
                            </label>
                        </div>
                        <div class="w-120 pd-top text-left">
                            <button type="submit" name="redirect" >Đặt hàng</button>
                            <a href="index.php" class="btn anchor">Trở về trang chủ</a>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="public\frontend\js\jquery-1.11.1.min.js"></script>
<script type="text/javascript">

    /**
     *  url  golbal
     */

    $url = "http://localhost/bookstore/";


    $(function () {
        $hidenitem = $(".hidenitem");
        $itemproduct = $(".item-product");
        $itemproduct.hover(function () {
            $(this).children(".hidenitem").show(100);
        }, function () {
            $hidenitem.hide(500);
        })
    })


    /**
     * update giỏ hàng
     */


    $updatecart = $(".updatecart");
    $updatecart.click(function () {

        $key = $(this).attr("data-key");
        $qty = $(this).parents("tr").find("#qtyup").val();

        $size = $(this).parents('tr').find(".selected-size option:selected").val();

        if ($qty <= 0) {
            alert("Số lượng phải lớn hơn 0");
            location.href = 'giohang.php';
        }

        $.ajax({
            url: $url + "capnhat_giohang.php",
            type: 'POST',
            data: {'key': $key, 'qtyupdate': $qty, 'size': $size},
            async: true,
            success: function (data) {
                if (data == 1) {
                    alert('  Cập nhật thành công!');
                } else {
                    alert(" Cập  nhật thất bại, vượt quá số lượng cho phép! ");
                }

                location.href = 'giohang.php';

            }
        })
    })
</script>