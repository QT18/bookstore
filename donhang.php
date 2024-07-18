<?php
    require_once __DIR__. "/admin/autoload/autoload.php";
    if (isset($_GET['page'])) {
        $p = $_GET['page'];
    } else {
        $p = 1;
    }
    $user_id = isset($_SESSION['userid']) ? $_SESSION['userid'] : 0;
    /**
     *  lấy danh sách sản phẩm
     */
    $sql = " SELECT donhang.* FROM donhang 
              WHERE makhachhang  = $user_id  ORDER BY donhang.id DESC";

    $donhang = $db->fetchJone("donhang", $sql, $page = $p, 20, false);

    if (isset($donhang['page'])) {
        $sotrang = $donhang['page'];
        unset($donhang['page']);
    }
    if (isset($_GET['vnp_Amount'])) {
            $data = [
                'vnp_Amount' => $_GET['vnp_Amount'],
                'vnp_BankCode' => $_GET['vnp_BankCode'],
                'vnp_BankTranNo' => $_GET['vnp_BankTranNo'],
                'vnp_CardType' => $_GET['vnp_CardType'],
                'vnp_OrderInfo' => $_GET['vnp_OrderInfo'],
                'vnp_PayDate' => $_GET['vnp_PayDate'],
                'vnp_TmnCode' => $_GET['vnp_TmnCode'],
                'vnp_TransactionNo' => $_GET['vnp_TransactionNo'],
                'code_donhang' => $_SESSION['code_donhang']
                // 'madonhang' => $chiietdohang
            ];
            $insertvnp = $db->insert("vnpay", $data);
        }
?>


<?php require_once __DIR__. "/layouts/header.php"; ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Mitr');
    .productName a{
        color: #6b00a8;
    }

    .container .card .content .price{
        text-align: center;
        color: darkred;
        margin-right: 10px;
        text-align: right;
        font-size: 18px;
    }

    .container .card .content .original-price{
        text-align: center;
        margin-right: 10px;
        text-align: right;
        font-size: 15px;
    }

    .rating{
        color: gold;
        text-align: right;
        margin-right: 5px;
    }

    .action{
        display: flex;
        height: 40px;
        line-height: 40px;
        text-transform: uppercase;
        margin-top: 5px;
    }

    .action .add-cart{
        width: 50%;
        background: #01aa39;
        color: white;
        border-bottom-left-radius: 10px;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    .action .add-cart:hover{
        transition: 0.3s;
        background: goldenrod;
    }

    .action .detail{
        width: 50%;
        background: rgb(1, 82, 85);
        color: white;
        border-bottom-right-radius: 10px;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    .action .detail:hover{
        transition: 0.3s;
        background: greenyellow;
        color: #172330;
    }

    footer {
        padding: 30px 0;
        background-color:white;
    }

    footer .social{
        text-align: center;
        padding-bottom: 25px;
        color: white;
    }

    footer .social a{
        color: inherit;
        font-size: 24px;
        border: 1px solid steelblue;
        width: 40px;
        height: 40px;
        display: inline-block;
        text-align: center;
        border-radius: 50%;
        margin: 0 8px;
        transition: 0.5s;
        background-color: white;
        color: #2c3e50;
        opacity: 0.8;
    }

    footer .social a:hover{
        opacity: 1;
    }

    footer ul{
        margin-top: 0;
        padding: 0;
        list-style: none;
        font-size: 18px;
        margin-bottom: 0;
        text-align: center;
    }

    footer ul a{
        color: inherit;
        text-decoration: none;
        opacity: 0.8;
    }

    footer ul li{
        display: inline;
        padding: 0 15px;
    }

    footer ul li a:hover{
        opacity: 1;
        color: #070808;
    }

    footer .copyright{
        margin-top: 15px;
        text-align: center;
        font-size: 12px;
        color: gray;
    }

    .container-single{
        display: flex;
        margin: 30px 100px;
    }

    .info{
        padding-left: 20px;
    }

    .image-product img{
        height: 450px;
        width: 500px;
    }

    .name{
        font-size: 25px;
        color: #172330;
    }

    .price-single{
        font-size: 20px;
        color: brown;
    }

    .add-cart-single{
        width: 150px;
        height: 40px;
        line-height: 40px;
        background-color: yellowgreen;
        font-size: 20px;
        text-align: center;
        border-radius: 5px;
        margin-top: 20px;
        transition: 0.5s;
    }

    .add-cart-single a{
        color: white;
    }

    .add-cart-single a:hover{
        transition: 0.5s;
        background-color: goldenrod;
        cursor: pointer;
    }

    .add-cart-single:hover{
        transition: 0.5s;
        background-color: goldenrod;
        cursor: pointer;
    }

    .image-cart{
        height: 200px;
        width: 200px;
    }

    .list{
        background-color: ghostwhite;
    }

    th{
        background-color:  gainsboro;
        border: 1px solid cadetblue;
    }

    td{
        border: 1px solid cadetblue;
        text-align: center;
    }

    .orderinfo{
        margin-left: 20px;
        background-color: ghostwhite;
        padding: 10px;
    }

    .buy-btn{
        float: right;
        margin-top: 50px;
        height: 40px;
        width: 200px;
        text-align: center;
        line-height: 40px;
        background-color: green;
        border-radius: 5px;
        color: #fff;
    }

    .buy-btn a{
        color: #fff;
        text-decoration: none;
    }

    .buy-btn a:hover{
        color: #fff;
        background-color: green;
    }

    .order{
        width: 100%;
        background-color: ghostwhite;
        padding: 10px;
        border-collapse: collapse;
    }

    .login{
        margin: 10px auto;
        width: 40%;
    }

    input[type=text], input[type=password], input[type=email], input[type=number], textarea, select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type=submit] {
        width: 100%;
        background-color: #0082e6;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    } */

    .success{
        color: green;
    }

    .error{
        color: red;
    }

    del {
        text-decoration: line-through;
    }

    input[type=number]{
        font-size: 18px;
        width: 100px;
    }

    .category{
        margin-left: 100px;
        width: 200px;
    }

    .pagination{
        text-align: center;
    }

    .pagination a.active {
        background-color: dodgerblue;
        color: white;
    }
    .comment{
        color: #070808;
    }
</style>
<div class="container">
    <div class="row">
        <h3>    <?php if ( isset($_SESSION['success'])) : ?>
      <p class="text-success"><?php echo $_SESSION['success'] ?></p>
    <?php endif; unset($_SESSION['success']) ?>
</h3>


        <h1>Đơn hàng</h1>
    </div>
</div>
<div class="container">
    <table class="order">
        <tr>
            <th>STT</th>
            <th>Mã đơn hàng</th>
            <th>Ngày đặt</th>
            <th>Ngày giao</th>
            <th>Tổng tiền</th>
            <th>Tình trạng</th>
           <th>Thao tác</th>
        </tr>
        <?php $count = 1;
        foreach ($donhang as $key => $value) { ?>
            <tr>
                <td><?= $count++ ?></td>
                <td><?= $value['code_donhang'] ?></td>
                <td><?= $value['ngaydathang'] ?></td>
                
                <td><?= ($value['trangthai'] != "Đang xử lý") ? $value['ngaynhan']  : "Dự kiến 3 ngày sau khi đơn hàng đã được xử lý" ?>
                    <?=  ($value['trangthai'] != "Hoàn thành" && $value['trangthai'] != "Đang xử lý") ? "(Dự kiến)" : "" ?>
                </td>
                <td><?= formatprice($value['tongtien']) ?></td>

                <?php
                if ($value['trangthai'] == 0) { ?>
                    <td>
                        Đơn đang xử lý
                    </td>
                   <td>
                       <a href="chitietdonhang.php?code_donhang=<?php echo $value['code_donhang'] ?>">Chi tiết</a>
                   </td>
                <?php } 
                elseif ($value['trangthai'] == 1) 
                {?>
                    <td>
                        Đang chuẩn bị hàng
                    </td>
                   <td>
                       <a href="chitietdonhang.php?code_donhang=<?php echo $value['code_donhang'] ?>">Chi tiết</a>
                   </td>
          <?php } elseif ($value['trangthai'] == 2) { ?>
                    <td>
                        Đang giao hàng
                    </td>
                   <td>
                       <a href="chitietdonhang.php?code_donhang=<?php echo $value['code_donhang'] ?>">Chi tiết</a>
                   </td>
                   <?php } elseif ($value['trangthai'] == 3) { ?>
                    <td>
                        Đã hoàn thành
                    </td>
                   <td>
                       <a href="chitietdonhang.php?code_donhang=<?php echo $value['code_donhang'] ?>">Chi tiết</a>
                   </td>
            </tr>
        <?php }
    } ?>
    </table>
</div>

