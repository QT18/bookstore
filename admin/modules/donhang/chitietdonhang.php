<?php
require_once __DIR__."/../../autoload/autoload.php";
if ( !isset($_SESSION["user"])) {
    header("Location:../sign-in.php");
}
// $open = "donhang";
// $id = intval(getInput('id'));
// $donhang = $db->fetchID("donhang", $id);

$begin = 0;
$mysqli =mysqli_connect("localhost","root","","luanvan") or die();
$code_donhang = $_GET['code_donhang'];
    $sql_order_list =
     "SELECT * FROM chitietdonhang,sanpham
     WHERE chitietdonhang.masp = sanpham.id 
     AND chitietdonhang.code_donhang = '".$code_donhang."'
    ORDER BY chitietdonhang.madonhang DESC LIMIT $begin,10";
    $query_order_list = mysqli_query($mysqli, $sql_order_list);

?>
<?php require_once __DIR__."/../../layouts/header.php";?>

<h1 class="mt-4">Chi tiết đơn hàng</h1>

    <ol class="breadcrumb mt-4">
        <li class="breadcrumb-item"><a href="index.php">Đơn hàng</a></li>
        <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
        <div class="dropdown dropdown__item">
    </div>
    </ol>
    <div class="row">
        <div class="col-md-12">
        <div class="datatable-container">
        <table id="datatablesSimple" class="datatable-table">
            <thead class="text-center">
                <tr class="text-center">
                    <th data-sortable="true" style=" width: 2%;"><a href="#" class="datatable-sorter">STT</a></th>
                    <th data-sortable="true" style="width: 12%;"><a href="#" class="datatable-sorter">Mã đơn hàng</a></th>
                    <th data-sortable="true" style="width: 10%;"><a href="#" class="datatable-sorter">Tên sản phẩm</a></th>
                    <th data-sortable="true" style="width: 12%;"><a href="#" class="datatable-sorter">Số lượng sản phẩm</a></th>
                    <th data-sortable="true" style="width: 15%;"><a href="#" class="datatable-sorter">Đơn giá</a></th>
                    <th data-sortable="true" style="width: 15%;"><a href="#" class="datatable-sorter">Thành tiền</a></th>
                </tr>
            </thead>
            <tbody>
                            <?php 
                             $stt =1;
                            $i = 0; $tongtien = 0;
                            while ($row = mysqli_fetch_array($query_order_list)) {
                                $i++;
                                $thanhtien=$row['gia']*$row['so_luong'];
                                $tongtien += $thanhtien;
    
                            ?>
                                <tr class="text-center">
                                    <td>
                                    <input type="checkbox" class="checkbox" onclick="testChecked(); getCheckedCheckboxes();" id="<?php echo $row['id'] ?>">
    
                                    <?php echo $stt ?></td>
                                    <td><?php echo $row['code_donhang'] ?></td>
                                    <td><?php echo $row['tensp'] ?></td>
                                    <td><?php echo $row['so_luong'] ?></td>
                                    <td><?php echo number_format($row['gia'],0,".",",").'  đ' ?></td>
                                    <td><?php echo number_format($row['gia']*$row['so_luong'],0,".",",").'  đ' ?></td>
                                </tr>
                            <?php
                            $stt++; }
                            ?>
                            <tr class="text-center">
                                <td colspan="9">
                                    <div class="label-thanh-toan">Tổng tiền : <span><?php echo number_format($tongtien,0,".",",").'  đ'  ?> </span></div>
                                </td>
                            </tr>
                        </tbody>
        </table>
        <div class="dialog__control">
    <!-- <div class="control__box">
        <a href="trangthai.php?confirm=1" class="btn btn-xs btn-success" id="btnConfirm">Duyệt đơn hàng</a> -->
        <!-- <a href="trangthai.php" class="btn btn-xs btn-danger" id="btnCancel">Hủy đơn hàng</a> -->
    <!-- </div> -->
</div>

        <!-- <div class="pull-right">
        <nav class="datatable-pagination">
            <ul class="datatable-pagination-list">
                <li class="datatable-pagination-list-item datatable-hidden datatable-disabled"><a data-page="1" class="datatable-pagination-list-item-link">‹</a></li>
                <li class="datatable-pagination-list-item datatable-active"><a data-page="1" class="datatable-pagination-list-item-link">1</a></li>
                <li class="datatable-pagination-list-item"><a data-page="2" class="datatable-pagination-list-item-link">2</a></li>
                <li class="datatable-pagination-list-item"><a data-page="3" class="datatable-pagination-list-item-link">3</a></li>
                <li class="datatable-pagination-list-item"><a data-page="4" class="datatable-pagination-list-item-link">4</a></li>
                <li class="datatable-pagination-list-item"><a data-page="5" class="datatable-pagination-list-item-link">5</a></li>
                <li class="datatable-pagination-list-item"><a data-page="6" class="datatable-pagination-list-item-link">6</a></li>
                <li class="datatable-pagination-list-item"><a data-page="2" class="datatable-pagination-list-item-link">›</a></li>
            </ul>
        </nav>
        </div> -->
    </div>

        </div>
    </div>


<?php require_once __DIR__."/../../layouts/footer.php"; ?>
<script>
    var btnConfirm = document.getElementById("btnConfirm");
    var btnCancel = document.getElementById("btnCancel");
    var checkAll = document.getElementById("checkAll");
    var checkboxes = document.getElementsByClassName("checkbox");
    var dialogControl = document.querySelector('.dialog__control');
    // Thêm sự kiện click cho checkbox checkAll
    checkAll.addEventListener("click", function() {
        // Nếu checkbox checkAll được chọn
        if (checkAll.checked) {
            // Đặt thuộc tính "checked" cho tất cả các checkbox còn lại
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = true;
            }
        } else {
            // Bỏ thuộc tính "checked" cho tất cả các checkbox còn lại
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = false;
            }
        }
        testChecked();
        getCheckedCheckboxes();
    });

    function testChecked() {
        var count = 0;
        for (let i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                count++;
                console.log(count);
            }
        }
        if (count > 0) {
            dialogControl.classList.add('active');
        } else {
            dialogControl.classList.remove('active');
            checkAll.checked = false;
        }
    }

    function getCheckedCheckboxes() {
        var checkeds = document.querySelectorAll('.checkbox:checked');
        var checkedIds = [];
        for (var i = 0; i < checkeds.length; i++) {
            checkedIds.push(checkeds[i].id);
        }
        btnConfirm.href = "modules/donhang/trangthai.php" + JSON.stringify(checkedIds);
        btnCancel.href = "modules/donhang/trangthai.php" + JSON.stringify(checkedIds);
    }
</script>

<script>
    function showSuccessToast() {
        toast({
            title: "Success",
            message: "Cập nhật thành công",
            type: "success",
            duration: 0,
        });
    }
</script>

<?php
    if (isset($_GET['message']) && $_GET['message'] == 'success') {
        $message = $_GET['message'];
        echo '<script>';
        echo '   showSuccessToast();';
        echo '</script>';
    }
?>

<script>
    window.history.pushState(null, "", "index.php"+"<?php echo $url_status ?><?php echo $url_page ?>");
</script>
