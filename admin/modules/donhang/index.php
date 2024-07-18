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
if (isset($_GET['trangthai'])) {
    $trangthai = $_GET['trangthai'];
    $url_status = 'trangthai'.$trangthai;
    $sql_order_list = "SELECT * FROM donhang JOIN users ON donhang.makhachhang = users.id WHERE donhang.trangthai = $trangthai ORDER BY donhang.id DESC LIMIT $begin,10";
    $query_order_list = mysqli_query($mysqli, $sql_order_list);
    
} else {
    $url_status = '';
    $sql_order_list = "SELECT * FROM donhang JOIN users ON donhang.makhachhang = users.id WHERE donhang.trangthai >= 0 AND donhang.trangthai < 3 ORDER BY donhang.id DESC LIMIT $begin,10";
    $query_order_list = mysqli_query($mysqli, $sql_order_list);
}
?>
<?php require_once __DIR__."/../../layouts/header.php";?>

<h1 class="mt-4">Danh sách đơn hàng</h1>

    <ol class="breadcrumb mt-4">
        <li class="breadcrumb-item active">Đơn hàng</li>
        <div class="dropdown dropdown__item">
            <button class="btn btn-sm btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuSizeButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                <?php 
                    if (isset($_GET['trangthai']) && $_GET['trangthai'] == 0) {
                        echo "Đơn đang xử lý";
                    } elseif(isset($_GET['trangthai']) && $_GET['trangthai'] == 1) {
                        echo "Đang chuẩn bị hàng";
                    } elseif(isset($_GET['trangthai']) && $_GET['trangthai'] ==2) {
                        echo "Đang giao hàng";
                    } elseif(isset($_GET['trangthai']) && $_GET['trangthai'] ==3) {
                        echo "Đã hoàn thành";
                    } elseif(isset($_GET['trangthai']) && $_GET['trangthai'] == -1) {
                        echo "Đơn đã hủy";
                    } else {
                        echo "Đang thực hiện";
                    }
                ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton2">
                <a class="dropdown-item" href="index.php">Đơn đang thực hiện</a>
                <a class="dropdown-item" href="index.php?trangthai=0">Đang xử lý</a>
                <a class="dropdown-item" href="index.php?trangthai=1">Đang chuẩn bị hàng</a>
                <a class="dropdown-item" href="index.php?trangthai=2">Đang giao hàng</a>
                <a class="dropdown-item" href="index.php?trangthai=3">Đã hoàn thành</a>
                <a class="dropdown-item" href="index.php?trangthai=-1">Đã hủy</a>
            </div>
        </div>

    </ol>
    <div class="row">
        <div class="col-md-12">
        <div class="datatable-container">
        <table id="datatablesSimple" class="datatable-table">
            <thead>
                <tr>
                    <th data-sortable="true" style=" width: 2%;"><a href="#" class="datatable-sorter">STT</a></th>
                    <th data-sortable="true" style="width: 12%;"><a href="#" class="datatable-sorter">Mã đơn hàng</a></th>
                    <th data-sortable="true" style="width: 10%;"><a href="#" class="datatable-sorter">Ngày đặt</a></th>
                    <th data-sortable="true" style="width: 12%;"><a href="#" class="datatable-sorter">Tên người đặt</a></th>
                    <th data-sortable="true" style="width: 15%;"><a href="#" class="datatable-sorter">Địa chỉ</a></th>
                    <th data-sortable="true" style="width: 15%;"><a href="#" class="datatable-sorter">Email</a></th>
                    <th data-sortable="true" style="width: 12%;"><a href="#" class="datatable-sorter">Số điện thoại</a></th>
                    <th data-sortable="true" style="width: 10%;"><a href="#" class="datatable-sorter">Tình trạng đơn hàng</a></th>
                    <th data-sortable="true" style=" width: 8%;"><a href="#" class="datatable-sorter">Chi tiết</a></th>
                </tr>
            </thead>
            <tbody>
                            <?php 
                             $stt =1;
                            $i = 0;
                            while ($row = mysqli_fetch_array($query_order_list)) {
                                $i++;
                            ?>
                                <tr>
                                    <td>
                                    <input type="checkbox" class="checkbox" onclick="testChecked(); getCheckedCheckboxes();" id="<?php echo $row['code_donhang'] ?>">
    
                                    <?php echo $stt ?></td>
                                    <td><?php echo $row['code_donhang'] ?></td>
                                    <td><?php echo $row['ngaydathang'] ?></td>
                                    <td><?php echo $row['hoten'] ?></td>
                                    <td><?php echo $row['diachi'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['sdt'] ?></td>
                                    <td class="text-center"><span class="col-span <?php echo format_status_style($row['trangthai']) ?>"><?php echo format_order_status($row['trangthai']); ?></span></td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-primary " href= "chitietdonhang.php?code_donhang=<?php echo $row['code_donhang']
                                        ?>"><i class="fa fa-edit fa-2xs"></i>Chi tiết</a>
                                    </td>
                                </tr>
                            <?php
                            $stt++; }
                            ?>
                        </tbody>
        </table>
        <div class="dialog__control">
    <div class="control__box">
        <a href="trangthai.php?xacnhan=1" class="btn btn-xs btn-success" id="btnConfirm">Duyệt đơn hàng</a>
        <!-- <a href="trangthai.php" class="btn btn-xs btn-danger" id="btnCancel">Hủy đơn hàng</a> -->
    </div>
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
        btnConfirm.href = "trangthai.php?xacnhan=1&data=" + JSON.stringify(checkedIds);
        btnCancel.href = "trangthai.php?cancel=1&data=" + JSON.stringify(checkedIds);
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
