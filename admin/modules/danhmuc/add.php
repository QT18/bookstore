<?php
$open = "danhmuc";
require_once __DIR__. "/../../autoload/autoload.php";
if ( !isset($_SESSION["user"])) {
    header("Location:../sign-in.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
   $data = 
   [
        "tendanhmuc" => postInput('tendanhmuc')
   ];
   $error = [];
   if(postInput('tendanhmuc') == '')
   {
    $error['tendanhmuc'] = "Mời bạn nhập đầy đủ tên danh mục";
   }

   //error trống có nghĩa không có lỗi
   if(empty($error))
   {

    $isset = $db->fetchOne("danhmuc"," tendanhmuc = '".$data['tendanhmuc']."' ");
    if($isset > 0)
        {
            $_SESSION['error'] = "Tên danh mục đã tồn tại!";
        }   
        else
        {
            $id_insert = $db->insert("danhmuc",$data);
            if($id_insert > 0)
            {
                $_SESSION['success'] = "Thêm mới thành công!";
                redirectAdmin("danhmuc");
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
                        <h1 class="mt-4">Thêm mới danh mục</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Danh mục</a></li>
                            <li class="breadcrumb-item active">Thêm mới</li>
                        </ol>
                        <div class="clearfix"></div>
                        <!-- Thông báo lỗi -->
                       <?php require_once __DIR__."/../../../partials/notification.php";?>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" action="" method="POST">
                            <div class="form-group">
                                <label for="tendanhmuc" class="col-sm-2 control-label">Tên danh mục</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tendanhmuc" placeholder="Tên danh mục" name="tendanhmuc">
                                    <?php if(isset($error['tendanhmuc'])): ?>
                                    <p class="text-danger"> <?php echo $error['tendanhmuc'] ?> </p>
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
                        
                    <!---->
<?php require_once __DIR__. "/../../layouts/footer.php"; ?>