<?php
$open = "danhmuc";
require_once __DIR__. "/../../autoload/autoload.php";
if ( !isset($_SESSION["user"])) {
    header("Location:../sign-in.php");
}

$id = intval(getInput('id'));
$Editdanhmuc = $db->fetchID("danhmuc", $id);


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
   
            $id_update = $db->update("danhmuc",$data,array("id"=>postInput('id')));
            if($id_update > 0)
            {
                $_SESSION['success'] = "Cập nhật thành công!";
                redirectAdmin("danhmuc");
            }
            else
            {
                //cập nhật thất bại
                $_SESSION['error'] = "Dữ liệu không thay đổi!";
                redirectAdmin("danhmuc");
            }
        }
}


?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>
                        <!---->
                        <h1 class="mt-4">Cập nhật danh mục</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Danh mục</a></li>
                            <li class="breadcrumb-item active">Cập nhật</li>
                        </ol>
                        <!-- Thông báo lỗi -->
                    <?php require_once __DIR__."/../../../partials/notification.php";?>
                        <div class="row">
                            <div class="col-md-12">
                        <form class="form-horizontal" action="edit.php?id=<?php $Editdanhmuc['id']?>" method="POST">
                            <div class="form-group">
                                <label for="tendanhmuc" class="col-sm-2 control-label">Tên danh mục</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tendanhmuc" placeholder="Tên danh mục" name="tendanhmuc"
                                    value="<?php echo $Editdanhmuc['tendanhmuc']?>">
                                    <?php if(isset($error['tendanhmuc'])): ?>
                                    <p class="text-danger"> <?php echo $error['tendanhmuc'] ?> </p>
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
                        
                    <!---->
<?php require_once __DIR__. "/../../layouts/footer.php"; ?>