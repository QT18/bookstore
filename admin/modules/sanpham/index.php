<?php
 $open = "sanpham";
 $open = "danhmuc";
 $open = "nxb";
 $open = "tacgia";
require_once __DIR__."/../../autoload/autoload.php";
if ( !isset($_SESSION["user"])) {
    header("Location:../sign-in.php");
}
// $id = intval(getInput('id'));
// $chitiet = $db->fetchID("sanpham", $id);
$sanpham = $db->fetchAll("sanpham");
$danhmuc = $db->fetchAll("danhmuc");
$nxb = $db->fetchAll("nxb");
$tacgia = $db->fetchAll("tacgia");

if (isset($_GET['page'])) {
    $p = $_GET['page'];
} else {
    $p = 1;
}

$sql = " SELECT * FROM sanpham ";
$total = count($db->fetchsql($sql));
$sanpham_p = $db->fetchJones("sanpham",$sql,$total,$p,10,true);
if (isset($sanpham_p['page'])) {
$sotrang = $sanpham_p['page'];
unset($sanpham_p['page']);
}

?>

<?php require_once __DIR__."/../../layouts/header.php";?>
    <!---->
    <h1 class="mt-4">Danh sách sản phẩm
        <a href="add.php" class="btn btn-primary">Thêm mới <i class="fa-solid fa-pen-to-square fa-rotate-270 fa-xs"></i></a>
    </h1>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Sản phẩm</li>
    </ol>
    <div class="clearfix"></div>
    <!-- Thông báo lỗi -->
    <?php require_once __DIR__."/../../../partials/notification.php";?>
    <div class="row">
        <div class="col-md-12">
        <div class="datatable-container">
        <table id="datatablesSimple" class="datatable-table">
            <thead>
                <tr>
                    <th data-sortable="true" style="width: 5%;"><a href="#" class="datatable-sorter">STT</a></th>
                    <th data-sortable="true" style="width: 5%;"><a href="#" class="datatable-sorter">Danh mục</a></th>
                    <th data-sortable="true" style="width: 15%;"><a href="#" class="datatable-sorter">Tên sản phẩm</a></th>
                    <th data-sortable="true" style="width: 5%;"><a href="#" class="datatable-sorter">Nhà Xuất Bản</a></th>
                    <th data-sortable="true" style="width: 5%;"><a href="#" class="datatable-sorter">Tác giả</a></th>
                    <th data-sortable="true" style="width: 10%;"><a href="#" class="datatable-sorter">Thông tin</a></th>
                    <th data-sortable="true" style="width: 10%;"><a href="#" class="datatable-sorter">Hình ảnh</a></th>
                    <th data-sortable="true" style="width: 20%;"><a href="#" class="datatable-sorter">Mô tả</a></th>
                    <th data-sortable="true" style="width: 10%;"><a href="#" class="datatable-sorter">Ngày tạo</a></th>
                    <th data-sortable="true" style="width: 20%;"><a href="#" class="datatable-sorter">Chức Năng</a></th>
                </tr>
            </thead>
            <tbody>
                <?php $stt =1; foreach ($sanpham as $item): ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['madanhmuc'] ?></td>
                        <td><?php echo $item['tensp'] ?></td>
                        <td><?php echo $item['maNXB'] ?></td>
                        <td><?php echo $item['matacgia'] ?></td>
                        <td>
                            <ul>
                                <li>Giá: <?php echo $item['gia'] ?> </li>
                                <li>Số lượng: <?php echo $item['soluong'] ?> </li>

                            </ul>
                        </td>
                        <td>
                        <img src="<?php echo uploads() ?>sanpham/<?php echo $item['hinhanh'] ?>" width="80px" height="80px">
                        </td>
                        <td><?php echo $item['mota'] ?></td>
                        <td><?php echo $item['created_at'] ?></td>
                        <td>
                            <a class="btn btn-xs btn-primary" href= "edit.php?id=<?php echo $item['id']
                            ?>"><i class="fa fa-edit fa-2xs"></i>Sửa</a>
                            <a class="btn btn-xs btn-danger" href= "delete.php?id=<?php echo $item['id']
                            ?>"><i class="fa-solid fa-eraser fa-2xs"></i> Xóa</a>
                        </td>
                    </tr>
                <?php $stt++ ; endforeach ?>
            </tbody>
        </table>
        <div class="pull-right">
        <nav class="datatable-pagination">
            <ul class="datatable-pagination-list">
                <li class="datatable-pagination-list-item datatable-hidden datatable-disabled"><a data-page="1" class="datatable-pagination-list-item-link">‹</a></li>
                <?php for ($i=1; $i <= $sotrang ; $i++) { ?>
                <li class="datatable-pagination-list-item datatable-active">
                    <a href="index.php?page=<?php echo $i ?>" data-page="1" class="datatable-pagination-list-item-link"><?php echo $i ?></a></li>

             <?php   } ?>
                <li class="datatable-pagination-list-item"><a data-page="2" class="datatable-pagination-list-item-link">›</a></li>
            </ul>
        </nav>
        </div>

        </div>
    </div>

        </div>
    </div>
    <!-- <div style="height: 100vh"></div> -->
   
    <!---->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>