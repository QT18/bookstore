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
    $begin = 0;
        $conn =mysqli_connect("localhost","root","","luanvan") or die();
        $code_donhang = $_GET['code_donhang'];
            $sql_ds_donhang =
            "SELECT * FROM chitietdonhang,sanpham
            WHERE chitietdonhang.masp = sanpham.id 
            AND chitietdonhang.code_donhang = '".$code_donhang."'
            ORDER BY chitietdonhang.madonhang DESC LIMIT $begin,10";
            $query_ds_donhang = mysqli_query($conn, $sql_ds_donhang);


    $donhang = $db->fetchJone("chitietdonhang", $sql_ds_donhang, $page = $p, 20, false);

    if (isset($donhang['page'])) {
        $sotrang = $donhang['page'];
        unset($donhang['page']);
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

        <h1 class="mt-4">Chi tiết đơn hàng</h1>

    <div class="row">
        <div class="col-md-12">
        <div class="datatable-container">
        <table id="datatablesSimple" class="datatable-table">
            <thead>
                <tr>
                    <th data-sortable="true" style=" width: 2%;"><a href="#" class="datatable-sorter">STT</a></th>
                    <th data-sortable="true" style="width: 12%;"><a href="#" class="datatable-sorter">Mã đơn hàng</a></th>
                    <th data-sortable="true" style="width: 10%;"><a href="#" class="datatable-sorter">Tên sản phẩm</a></th>
                    <th data-sortable="true" style="width: 10%;"><a href="#" class="datatable-sorter">Hình ảnh</a></th>
                    <th data-sortable="true" style="width: 12%;"><a href="#" class="datatable-sorter">Số lượng sản phẩm</a></th>
                    <th data-sortable="true" style="width: 15%;"><a href="#" class="datatable-sorter">Đơn giá</a></th>
                    <th data-sortable="true" style="width: 15%;"><a href="#" class="datatable-sorter">Thành tiền</a></th>
                </tr>
            </thead>
            <tbody>
                            <?php 
                             $stt =1;
                            $i = 0; $tongtien = 0;
                            while ($row = mysqli_fetch_array($query_ds_donhang)) {
                                $i++;
                                $thanhtien=$row['gia']*$row['so_luong'];
                                $tongtien += $thanhtien;
    
                            ?>
                                <tr>
                                    <td>
    
                                    <?php echo $stt ?></td>
                                    <td><?php echo $row['code_donhang'] ?></td>
                                    <td><?php echo $row['tensp'] ?></td>
                                    <td>
                                    <img src="<?php echo uploads() ?>sanpham/<?php echo $row['hinhanh'] ?>" width="80px" height="80px">
                                    </td>

                                    <td><?php echo $row['so_luong'] ?></td>
                                    <td><?php echo number_format($row['gia'],0,".",",").'  đ' ?></td>
                                    <td><?php echo number_format($row['gia']*$row['so_luong'],0,".",",").'  đ' ?></td>
                                </tr>
                            <?php
                            $stt++; }
                            ?>
                                            <tr class="text-right">
                    <td colspan="9">
                        <div class="label-thanh-toan">Tổng tiền : <span><?php echo number_format($tongtien,0,".",",").'  đ'  ?> </span></div>
                    </td>
                </tr>

                        </tbody>
        </table>
        <div class="dialog__control">

