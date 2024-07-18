<?php
$open = "nxb";
require_once __DIR__. "/../../autoload/autoload.php";
if ( !isset($_SESSION["user"])) {
    header("Location:../sign-in.php");
}

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
    $error['tenNXB'] = "Mời bạn nhập đầy đủ tên Nhà Xuất Bản!";
   }

   //error trống có nghĩa không có lỗi
   if(empty($error))
   {

    $isset = $db->fetchOne("nxb"," tenNXB = '".$data['tenNXB']."' ");
    if($isset > 0)
        {
            $_SESSION['error'] = "Tên Nhà Xuất Bản đã tồn tại!";
        }   
        else
        {
            $id_insert = $db->insert("nxb",$data);
            if($id_insert > 0)
            {
                $_SESSION['success'] = "Thêm mới thành công!";
                redirectAdmin("nxb");
            }
            else
            {
                //thêm thất bại
                $_SESSION['error'] = "Thêm mới thất bại!";
            }
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
                        <div class="clearfix"></div>
                        <!-- Thông báo lỗi -->
                       <?php require_once __DIR__."/../../../partials/notification.php";?>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" action="" method="POST">
                            <div class="form-group">
                                <label for="tenNXB" class="col-sm-2 control-label">Tên Nhà Xuất Bản</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tenNXB" placeholder="Tên Nhà Xuất Bản" name="tenNXB">
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