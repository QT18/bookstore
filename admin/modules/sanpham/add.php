<?php
$open = "sanpham";
require_once __DIR__. "/../../autoload/autoload.php";
if ( !isset($_SESSION["user"])) {
    header("Location:../sign-in.php");
}


/**
 * danh sách danh mục sản phẩm
 */
$sanpham = $db->fetchAll("sanpham");
$danhmuc = $db->fetchAll("danhmuc");
/**
 * danh sách nxb
 */
$nxb = $db->fetchAll("nxb");
/**
 * danh sách tacgia
 */
$tacgia = $db->fetchAll("tacgia");


if($_SERVER["REQUEST_METHOD"] == "POST")
{
   $data = 
   [
        "madanhmuc" => postInput('madanhmuc'),
        "tensp" => postInput('tensp'),
        "maNXB" => postInput('maNXB'),
         "matacgia" => postInput('matacgia'),
        "gia" => postInput('gia'),
        "soluong" => postInput('soluong'),
        "hinhanh" => postInput('hinhanh'),
        "mota" => postInput('mota'),
        // "created_at" => date('Y-m-d h:i:sa')
   ];
   $error = [];
   if(postInput('madanhmuc') == '')
    {
     $error['madanhmuc'] = "Mời bạn chọn tên danh mục sản phẩm!";
    }
   if(postInput('tensp') == '')
   {
    $error['tensp'] = "Mời bạn nhập đầy đủ tên sản phẩm";
   }
   if(postInput('maNXB') == '')
   {
     $error['maNXB'] = "Mời bạn nhập đầy đủ tên Nhà Xuất Bản!";
    }
    if(postInput('matacgia') == '')
    {
     $error['matacgia'] = "Mời bạn nhập đầy đủ tên Tác giả!";
    }
     if(postInput('gia') == '')
   {
    $error['gia'] = "Mời bạn nhập giá sản phẩm!";
   }
   if(postInput('soluong') == '')
   {
    $error['soluong'] = "Mời bạn nhập số lượng sản phẩm!";
   }
   if(postInput('mota') == '')
   {
    $error['mota'] = "Mời bạn nhập mô tả sản phẩm!";
   }
   if( ! isset($_FILES['hinhanh']))
      {
       $error['hinhanh'] = "Mời bạn thêm hình ảnh!";
      }
   
   
      //error trống có nghĩa không có lỗi
     if(empty($error))
      {
           if( isset($error))
           {
               if ( isset($_FILES['hinhanh']))
               {
                  $file_name = $_FILES['hinhanh']['name'];
                  $file_tmp = $_FILES['hinhanh']['tmp_name'];
                  $file_type = $_FILES['hinhanh']['type'];
                  $file_erro = $_FILES['hinhanh']['error'];
               }
               if ($file_erro == 0) 
               {
                  $part = ROOT ."sanpham/";
                  $data['hinhanh'] = $file_name; 
               }
           }
       }
   //error trống có nghĩa không có lỗi
   if(empty($error))
   {

    $isset = $db->fetchOne("sanpham"," tensp = '".$data['tensp']."' ");
    if($isset > 0)
        {
            $_SESSION['error'] = "Tên sản phẩm đã tồn tại!";
        }   
        else
        {
            
            move_uploaded_file($file_tmp,$part.$file_name);
            $id_insert = $db->insert("sanpham",$data);
            if($id_insert > 0)
            {
                $_SESSION['success'] = "Thêm mới thành công!";
                redirectAdmin("sanpham");
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
                        <h1 class="mt-4">Thêm mới sản phẩm</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Sản phẩm</a></li>
                            <li class="breadcrumb-item active">Thêm mới</li>
                        </ol>
                        <div class="clearfix"></div>
                        <!-- Thông báo lỗi -->
                       <?php require_once __DIR__."/../../../partials/notification.php";?>
                        <div class="row">
                            <div class="col-md-12">
                        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                <label for="madanhmuc" class="col-sm-2 control-label">Danh mục sản phẩm</label>
                                <div class="col-sm-8">
                                    <select class="form-control col-md-8" name="madanhmuc">
                                        <option value=""> - Mời bạn chọn danh mục sản phẩm - </option>
                                        <?php foreach ($danhmuc as $item): ?>
                                            <option value="<?php echo $item['id']?>"><?php echo $item['tendanhmuc'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <?php if(isset($error['danhmuc'])): ?>
                                    <p class="text-danger"> <?php echo $error['danhmuc'] ?> </p>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tensp" class="col-sm-2 control-label">Tên sản phẩm</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tensp" placeholder="Tên sản phẩm" name="tensp">
                                    <?php if(isset($error['tensp'])): ?>
                                    <p class="text-danger"> <?php echo $error['tensp'] ?> </p>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="maNXB" class="col-sm-2 control-label">Nhà Xuất Bản</label>
                                <div class="col-sm-8">
                                    <select class="form-control col-md-8" name="maNXB">
                                        <option value=""> - Mời bạn chọn Nhà Xuất Bản - </option>
                                        <?php foreach ($nxb as $item): ?>
                                            <option value="<?php echo $item['id']?>"><?php echo $item['tenNXB'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <?php if(isset($error['nxb'])): ?>
                                    <p class="text-danger"> <?php echo $error['nxb'] ?> </p>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="matacgia" class="col-sm-2 control-label">Tác giả</label>
                                <div class="col-sm-8">
                                    <select class="form-control col-md-8" name="matacgia">
                                        <option value=""> - Mời bạn chọn Tác giả - </option>
                                        <?php foreach ($tacgia as $item): ?>
                                            <option value="<?php echo $item['id']?>"><?php echo $item['tentacgia'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <?php if(isset($error['tacgia'])): ?>
                                    <p class="text-danger"> <?php echo $error['tacgia'] ?> </p>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gia" class="col-sm-2 control-label">Giá</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="gia" placeholder="10.000.000" name="gia"min="1.000">
                                    <?php if(isset($error['gia'])): ?>
                                    <p class="text-danger"> <?php echo $error['gia'] ?> </p>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="soluong" class="col-sm-2 control-label">Số lượng</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="soluong" placeholder="10" name="soluong" min="1">
                                    <?php if(isset($error['soluong'])): ?>
                                    <p class="text-danger"> <?php echo $error['soluong'] ?> </p>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="hinhanh" class="col-sm-2 control-label">Hình ảnh</label>
                                <div class="col-sm-3">
                                    <input type="file" class="form-control" id="hinhanh" placeholder="10 %" name="hinhanh" value="0">
                                    <?php if(isset($error['hinhanh'])): ?>
                                    <p class="text-danger"> <?php echo $error['hinhanh'] ?> </p>
                                    <?php endif ?>
                                    
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
                        
                    <!---->
<?php require_once __DIR__. "/../../layouts/footer.php"; ?>