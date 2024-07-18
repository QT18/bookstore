<?php
$open = "nxb";
require_once __DIR__. "/../../autoload/autoload.php";
$id = intval(getInput('id'));
$Editnxb = $db->fetchID("nxb", $id);
//  if(empty($Editdanhmuc))
//  {
//      $_SESSION['error'] = "Dữ liệu không tồn tại";
//      redirectAdmin("danhmuc");

//  }


if($_SERVER["REQUEST_METHOD"] == "POST")
{
   $data = 
   [
        "tenNXB" => postInput('tenNXB'),
        "mota" => postInput('mota')
   ];
   $error = [];

   if(postInput('tenNXB') == '')
   {
    $error['tenNXB'] = "Mời bạn nhập đầy đủ tên Nhà Xuất Bản";
   }

   //error trống có nghĩa không có lỗi

   if(empty($error))
   {
   
            $id_update = $db->update("nxb",$data,array("id"=>postInput('id')));
            if($id_update > 0)
            {
                $_SESSION['success'] = "Cập nhật thành công!";
                redirectAdmin("nxb");
            }
            else
            {
                //cập nhật thất bại
                $_SESSION['error'] = "Dữ liệu không thay đổi!";
                redirectAdmin("nxb");
            }
        }
}


?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>
                        <!---->
                        <h1 class="mt-4">Thêm mới Nhà Xuất Bản</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Nhà Xuất Bản</a></li>
                            <li class="breadcrumb-item active">Thêm mới</li>
                        </ol>
                        <!-- Thông báo lỗi -->
                    <?php require_once __DIR__."/../../../partials/notification.php";?>
                        <div class="row">
                            <div class="col-md-12">
                        <form class="form-horizontal" action="edit.php?id=<?php $Editnxb['id']?>" method="POST">
                            <div class="form-group">
                                <label for="tenNXB" class="col-sm-2 control-label">Tên Nhà Xuất Bản</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tenNXB" placeholder="Tên Nhà Xuất Bản" name="tenNXB"
                                    value="<?php echo $Editnxb['tenNXB']?>">
                                    <?php if(isset($error['tenNXB'])): ?>
                                    <p class="text-danger"> <?php echo $error['tenNXB'] ?> </p>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mota" class="col-sm-2 control-label">Mô tả</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name = "mota" rows="5"></textarea>
                                    <?php if(isset($error['mota'])): ?>
                                    <p class="text-danger"> <?php echo $error['mota'] ?> </p>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Lưu</button>
                                </div>
                                <input type= "hidden" id="id" name="id" value="<?php echo $id;?>"/>
                            </div>
                        </form>
                            </div>
                        </div>
                        
                        <div style="height: 100vh"></div>
                        <!-- <div class="card mb-4">
                            <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div>
                        </div> -->
                        
                    <!---->
<?php require_once __DIR__. "/../../layouts/footer.php"; ?>