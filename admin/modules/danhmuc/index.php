<?php
$open = "danhmuc";
require_once __DIR__."/../../autoload/autoload.php";
if ( !isset($_SESSION["user"])) {
    header("Location:../sign-in.php");
}

$danhmuc = $db->fetchAll("danhmuc");

?>

<?php require_once __DIR__."/../../layouts/header.php";
?>
    <!---->
    <h1 class="mt-4">Danh sách danh mục
        <a href="add.php" class="btn btn-primary">Thêm mới <i class="fa-solid fa-pen-to-square fa-rotate-270 fa-xs"></i></a>
    </h1>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Danh mục</li>
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
                    <th data-sortable="true" style="width: 8.25254813137033%;"><a href="#" class="datatable-sorter">STT</a></th>
                    <th data-sortable="true" style="width: 15.35107587768969%;"><a href="#" class="datatable-sorter">Tên danh mục</a></th>
                    <th data-sortable="true" style="width: 14.835787089467722%;"><a href="#" class="datatable-sorter">Ngày tạo</a></th>
                    <th data-sortable="true" style="width: 10.720271800679502%;"><a href="#" class="datatable-sorter">Chức Năng</a></th>
                </tr>
            </thead>
            <tbody>
                <?php $stt =1; foreach ($danhmuc as $item): ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['tendanhmuc'] ?></td>
                        <td><?php echo $item['ngaytao'] ?></td>
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
                <li class="datatable-pagination-list-item datatable-active"><a data-page="1" class="datatable-pagination-list-item-link">1</a></li>
                <li class="datatable-pagination-list-item"><a data-page="2" class="datatable-pagination-list-item-link">2</a></li>
                <li class="datatable-pagination-list-item"><a data-page="3" class="datatable-pagination-list-item-link">3</a></li>
                <li class="datatable-pagination-list-item"><a data-page="4" class="datatable-pagination-list-item-link">4</a></li>
                <li class="datatable-pagination-list-item"><a data-page="5" class="datatable-pagination-list-item-link">5</a></li>
                <li class="datatable-pagination-list-item"><a data-page="6" class="datatable-pagination-list-item-link">6</a></li>
                <li class="datatable-pagination-list-item"><a data-page="2" class="datatable-pagination-list-item-link">›</a></li>
            </ul>
        </nav>
        </div>
    </div>

        </div>
    </div>
    <!-- <div style="height: 100vh"></div> -->
   
    <!---->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>