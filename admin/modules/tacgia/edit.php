<?php
$open = "tacgia";
require_once __DIR__. "/../../autoload/autoload.php";
$id = intval(getInput('id'));
$Edittacgia = $db->fetchID("tacgia", $id);
//  if(empty($Editdanhmuc))
//  {
//      $_SESSION['error'] = "Dữ liệu không tồn tại";
//      redirectAdmin("danhmuc");

//  }


if($_SERVER["REQUEST_METHOD"] == "POST")
{
   $data = 
   [
        "tentacgia" => postInput('tentacgia'),
        "mota" => postInput('mota')
   ];
   $error = [];

   if(postInput('tentacgia') == '')
   {
    $error['tentacgia'] = "Mời bạn nhập đầy đủ tên Tác giả";
   }

   //error trống có nghĩa không có lỗi

   if(empty($error))
   {
   
            $id_update = $db->update("tacgia",$data,array("id"=>postInput('id')));
            if($id_update > 0)
            {
                $_SESSION['success'] = "Cập nhật thành công!";
                redirectAdmin("tacgia");
            }
            else
            {
                //cập nhật thất bại
                $_SESSION['error'] = "Dữ liệu không thay đổi!";
                redirectAdmin("tacgia");
            }
        }
}


?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>
                        <!---->
                        <h1 class="mt-4">Thêm mới Tác giả</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Tác giả</a></li>
                            <li class="breadcrumb-item active">Thêm mới</li>
                        </ol>
                        <!-- Thông báo lỗi -->
                    <?php require_once __DIR__."/../../../partials/notification.php";?>
                        <div class="row">
                            <div class="col-md-12">
                        <form class="form-horizontal" action="edit.php?id=<?php $Edittacgia['id']?>" method="POST">
                            <div class="form-group">
                                <label for="tentacgia" class="col-sm-2 control-label">Tên Tác giả</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tentacgia" placeholder="Tên Tác giả" name="tentacgia"
                                    value="<?php echo $Edittacgia['tentacgia']?>">
                                    <?php if(isset($error['tentacgia'])): ?>
                                    <p class="text-danger"> <?php echo $error['tentacgia'] ?> </p>
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