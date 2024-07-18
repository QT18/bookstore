<?php
    $open = "sanpham";  $open = "tacgia";  $open = "nxb";
    require_once __DIR__. "/admin/autoload/autoload.php";
	$id = intval(getInput('id'));
	$sanpham = $db->fetchAll("sanpham");
    $chitiet = $db->fetchID("sanpham", $id);
    $danhmucID = $chitiet['madanhmuc'];
        // lấy sản phẩm cùng chuyên mục
        $suggestsProduct = $db->fetchsql("SELECT * FROM sanpham WHERE madanhmuc = $danhmucID");
        // xử lý đánh giá
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data =
                [
                    "number_vote" => postInput('quality'),
                    "noidung" => postInput('noidung'),
                    "masp" => $id,
                    "ngaythem" => date("Y-m-d"),
                    "makhachhang" => $_SESSION['userid'] // get ID của tk login
                ];
    
            $id_insert = $db->insert("danhgia",$data);
    
    
            if($id_insert > 0)
            {
                $_SESSION['success'] = "Thêm mới thành công!";
            }
            else
            {
                //thêm thất bại
                $_SESSION['error'] = "Thêm mới thất bại!";
            }
        }
    
        // Lấy đánh giá sản phẩm đó
        $sql = "SELECT * FROM danhgia LEFT JOIN users On users.id = danhgia.makhachhang  where masp = $id order by danhgia.id desc";
        $votes = $db->fetchsql($sql);
    
?>

<?php require_once __DIR__. "/layouts/header.php"; ?>
<!-- ============================================== HEADER : END ============================================== -->
<style>
    .btn-grey{
        background-color:#D8D8D8;
        color:#FFF;
    }
    .rating-block{
        background-color:#FAFAFA;
        border:1px solid #EFEFEF;
        padding:15px 15px 20px 15px;
        border-radius:3px;
    }
    .bold{
        font-weight:700;
    }
    .padding-bottom-7{
        padding-bottom:7px;
    }

    .review-block{
        background-color:#FAFAFA;
        border:1px solid #EFEFEF;
        padding:15px;
        border-radius:3px;
        margin-bottom:15px;
    }
    .review-block-name{
        font-size:12px;
        margin:10px 0;
    }
    .review-block-date{
        font-size:12px;
    }
    .review-block-rate{
        font-size:13px;
        margin-bottom:15px;
    }
    .review-block-title{
        font-size:15px;
        font-weight:700;
        margin-bottom:10px;
    }
    .review-block-description{
        font-size:13px;
    }
</style>
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="#">Sách tiếng Việt</a></li>
                <li class='active'href=""><?php echo $chitiet['tensp']?></li>
            </ul>
        </div>
        <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row single-product'>
            <div class='col-md-3 sidebar'>
                <div class="sidebar-module-container">
                    <div class="home-banner outer-top-n"></div>
                </div>
            </div>
            <!-- /.sidebar -->
            <div class='col-md-9' >
                <!-- Sản phẩm -->
                <div class="chitetsp-block"action="chitetsp.php?id=<?php $chitiet['id']?>">
                    <div class="row  wow fadeInUp">
                        <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">
                                <div id="owl-single-product">
                                    <div class="single-product-gallery-item" id="slide1" action="chitetsp.php?id=<?php $chitiet['id']?>" >
                                        <a data-lightbox="image-1" data-title="Gallery" action="chitetsp.php?id=<?php $chitiet['id']?>" href="public/uploads/sanpham\<?php echo $chitiet['hinhanh']?>" >
                                        <img class="img-responsive" alt="" src="assets\images\blank.gif" action="chitetsp.php?id=<?php $chitiet['id']?>" data-echo="public/uploads/sanpham\<?php echo $chitiet['hinhanh'] ?>" >
                                        </a>
                                    </div>
                                    <!-- /.single-product-gallery-item -->
                                </div>
                                <!-- /.single-product-slider -->
                                <div class="single-product-gallery-thumbs gallery-thumbs" >
                                    <div id="owl-single-product-thumbnails">
                                        <div class="item">
                                            <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                            <img class="img-responsive" width="85" alt="" src="assets\images\blank.gif" data-echo="public/uploads/sanpham\<?php echo $chitiet['hinhanh'] ?>">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /#owl-single-product-thumbnails -->
                                </div>
                                <!-- /.gallery-thumbs -->
                            </div>
                            <!-- /.single-product-gallery -->
                        </div>
                        <!-- /.gallery-holder -->        			
                        <div class='col-sm-6 col-md-7 product-info-block'>
                            <div class="product-info">
                                <h1 class="name" >
                                    <a action="chitetsp.php?id=<?php $chitiet['id']?>">
                                        <?php echo $chitiet['tensp'] ?>
                                </h1>
                                <div class="rating-reviews m-t-20">
                                <div class="row">
                                <div class="col-sm-3">
                                <div >
                          
                          <span class="review-star-list d-flex">
                                <?php
                                $query_danhgia_sao = $db->fetchsql( "SELECT * FROM danhgia WHERE masp='".$chitiet['id']."' ");
                                
                                $sao1 = 0;   $sao2 = 0;   $sao3 = 0; $sao4 = 0; $sao5 = 0;
                                
                                foreach ($query_danhgia_sao as $so_sao)  {
                                    $sao = $so_sao['number_vote'];
                                
                                    if ($sao == 1) {
                                        $sao1++;
                                    } elseif ($sao == 2) {
                                        $sao2++;
                                    } elseif ($sao == 3) {
                                        $sao3++;
                                    } elseif ($sao == 4) {
                                        $sao4++;
                                    } elseif ($sao == 5) {
                                        $sao5++;
                                    }
                                }
                                
                                $tong = $sao1 + $sao2 + $sao3 + $sao4 + $sao5;
                                if ($tong != 0) {
                                    $sao_avg =  ($sao1 * 1 + $sao2 * 2 + $sao3 * 3 + $sao4 * 4 + $sao5 * 5) / $tong;
                                    $sao_avg = round($sao_avg, 1);
                                } else {
                                    $sao_avg = 0;
                                }
                                
                                for ($i = 0; $i < 5; $i++) {
                                    if ($i < $sao_avg) {
                                ?>
                                        <div class="rating-star"></div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="rating-star rating-off"></div>
                                <?php
                                    }
                                }
                                ?>
                                
                                
                            </span>
                          </div>
                                </div>
                                <div class="col-sm-8">
                                <div class="reviews">
                                <a href="#" class="lnk"></a>
                                </div>
                                </div>
                                </div><span>(<?php echo $tong ?>) Đánh giá</span>
                                <!-- /.row -->		
                                </div>
                                <!-- /.rating-reviews -->
                                <div class="stock-container info-container m-t-10">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="stock-box">
                                                <span class="label">Có sẵn :</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="stock-box">
                                                <span class="value">Kho</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->	
                                </div>
                                <!-- /.stock-container -->
                                <div class="description-container m-t-20">
                                        
                                    Mô tả:
                                </div>
                                <!-- /.description-container -->
                                <div class="price-container info-container m-t-20">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="price-box">
                                                <span class="price"><?php echo number_format($chitiet['gia'],0,".",",") ?> VNĐ</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="favorite-button m-t-10">
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                                                <i class="fa fa-heart"></i>
                                                </a>
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                                                <i class="fa fa-signal"></i>
                                                </a>
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                                                <i class="fa fa-envelope"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.price-container -->
                                <div class="quantity-container info-container">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <span class="label">Số lượng:</span>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="cart-quantity">
                                                <div class="quant-input">
                                                    <div class="arrows">
                                                        <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                        <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                    </div>
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <?php if (isset($_SESSION["user"])) {?>
                                            <a href="them_giohang.php?id=<?php echo $chitiet['id']?>" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i>Thêm vào giỏ hàng</a>
                                            <?php } else { ?>
                                                <a href="sign-in.php" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i>Thêm vào giỏ hàng</a>
                                            <?php  }?>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.quantity-container -->	
                            </div>
                            <!-- /.product-info -->
                        </div>
                        <!-- /.col-sm-7 -->
                    </div>
                    <!-- /.row -->
                    
                </div>
                <!-- /sản phẩm -->
                <!-- Đánh giá -->
                <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                    <div class="row">
                        <div class="col-sm-3">
                            <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                <li class="active"><a data-toggle="tab" href="#description">Mô tả</a></li>
                                <li><a data-toggle="tab" href="#review">Đánh giá</a></li>
                            </ul>
                            <!-- /.nav-tabs #product-tabs -->
                        </div>
                        <div class="col-sm-9">
                            <div class="tab-content">
                                <div id="description" class="tab-pane in active">
                                    <div class="product-tab">
                                        <p class="text" action="chitetsp.php?id=<?php $chitiet['id']?>">Mô tả sản phẩm</p>
                                        <?php echo $chitiet['mota'] ?>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div id="review" class="tab-pane">
                                    <div class="product-tab">
                                        <div class="product-reviews">
                                            <h4 class="title">Đánh giá</h4>
                                            <div class="reviews">
                                            </div>
                                            <!-- /.reviews -->
                                        </div>
                                        <?php if (isset($_SESSION["user"])) {?>

                                        <form role="form" class="cnt-form" method="POST">
                                            <!-- /.product-reviews -->
                                            <div class="product-add-review">
                                                <h4 class="title"></h4>
                                                <div class="review-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="cell-label">&nbsp;Đánh giá</th>
                                                                    <th>1 sao</th>
                                                                    <th>2 sao</th>
                                                                    <th>3 sao</th>
                                                                    <th>4 sao</th>
                                                                    <th>5 sao</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="cell-label">Chất lượng</td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                        value="1"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                        value="2"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                        value="3"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                        value="4"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                        value="5"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- /.table .table-bordered -->
                                                    </div>
                                                    <!-- /.table-responsive -->
                                                </div>
                                                <!-- /.review-table -->
                                                <div class="review-form">
                                                    <div class="form-container">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputReview">Đánh giá <span
                                                                        class="astk">*</span></label>
                                                                    <textarea class="form-control txt txt-review"
                                                                        id="exampleInputReview" rows="5"
                                                                        placeholder="" name="noidung"></textarea>
                                                                </div>
                                                                <!-- /.form-group -->
                                                            </div>
                                                        </div> 
                                                        <!-- /.row -->
                                                        <div class="action text-right">
                                                            <button class="btn btn-primary btn-upper">Gửi đánh giá
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php }?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <hr/>
                                                <div class="review-block">
                                                    <?php foreach ($votes ?? [] as $item) :?>
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <img src="https://fakeimg.pl/40x40/?text=<:rooThink:596576798351949847>&font=lobster" class="img-rounded">
                                                            <div class="review-block-name"><a href="#"><?= $item['hoten'] ?></a></div>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="review-block-rate">
                                                                <?php for($i = 1 ;$i <= 5 ; $i ++) :?>
                                                                <button class="btn <?= $i <= $item['number_vote'] ? 'rating-star' : 'rating-star rating-off'  ?> btn-xs" aria-label="Left Align">
                                                                </button>
                                                                <?php endfor ;?>
                                                            </div>
                                                            <div class="review-block-description"><?= $item['noidung'] ?></div>
                                                        </div>
                                                    </div>
                                                    <hr/>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.product-tab -->
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /Đánh giá -->
 <!------------------------------------ Gợi ý sản phẩm bằng kỹ thuật lọc cộng tác -------------------------------------------------------->
            <?php require_once __DIR__. "/goi_y.php"; ?>
            <div class="action">
            <?php if (isset($_SESSION["user"])) {
            $ma_khachhang = $_SESSION['userid'];
            $ma_sanpham = $chitiet['id'];
            $sanpham_similar = goi_y_sanpham($ma_khachhang, $ma_sanpham);?>
         
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">Có thể bạn cũng thích</h3>
                    </div>
                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="6">
                                <?php  if (count($sanpham_similar) > 0) 
                                    {
                                        foreach ($sanpham_similar as $sanpham_lienquan)
                                        { ?>
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                        href="chitietsp.php?id=<?php echo $sanpham_lienquan['id'] ?>"><img
                                                        src="public/uploads/sanpham\<?php echo $sanpham_lienquan['hinhanh'] ?>"
                                                        alt=""></a></div>
                                                </div>
                                                <!-- /.product-image -->
                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                        href="chitietsp.php?id=<?php echo $sanpham_lienquan['id'] ?>"><?php echo $sanpham_lienquan['tensp'] ?></a>
                                                    </h3>
                                                    <div >
                                                    <span class="review-star-list d-flex">
                                                            <?php
                                                            $query_danhgia_sao = $db->fetchsql( "SELECT * FROM danhgia WHERE masp='".$sanpham_lienquan['id']."' ");
                                                            
                                                            $sao1 = 0;   $sao2 = 0;   $sao3 = 0;  $sao4 = 0;  $sao5 = 0;
                                                            
                                                            foreach ($query_danhgia_sao as $so_sao)  {
                                                                $sao = $so_sao['number_vote'];
                                                            
                                                                if ($sao == 1) {
                                                                    $sao1++;
                                                                } elseif ($sao == 2) {
                                                                    $sao2++;
                                                                } elseif ($sao == 3) {
                                                                    $sao3++;
                                                                } elseif ($sao == 4) {
                                                                    $sao4++;
                                                                } elseif ($sao == 5) {
                                                                    $sao5++;
                                                                }
                                                            }
                                                            
                                                            $tong = $sao1 + $sao2 + $sao3 + $sao4 + $sao5;
                                                            if ($tong != 0) {
                                                                $sao_avg =  ($sao1 * 1 + $sao2 * 2 + $sao3 * 3 + $sao4 * 4 + $sao5 * 5) / $tong;
                                                                $sao_avg = round($sao_avg, 1);
                                                            } else {
                                                                $sao_avg = 0;
                                                            }
                                                            
                                                            for ($i = 0; $i < 5; $i++) {
                                                                if ($i < $sao_avg) {
                                                            ?>
                                                                    <div class="rating-star"></div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="rating-star rating-off"></div>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                            
                                                    </span>
                                                    </div>
                                                    <div class="description">(<?php echo $tong ?>) Đánh giá</div>
                                                    <div class="product-price"><span
                                                        class="price"> <?php echo $sanpham_lienquan['gia'] ?></span>
                                                    </div>
                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"><i class="fa fa-shopping-cart"></i></button>
                                                                <button class="btn btn-primary cart-btn"
                                                                    type="button">Thêm giỏ hàng
                                                                </button>
                                                            </li>
                                                           
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->
                                        </div>
                                        <!-- /.products -->
                                    </div>
                                        <?php   }
                                    }  ?>
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
        
            <?php } else { ?>
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">Có thể bạn cũng thích</h3>
                    </div>
            </div>
            <?php  }?>
            </div>

<!------------------------------ /Gợi ý sản phẩm bằng kỹ thuật lọc cộng tác -------------------------------------------------->

                <!-------------------------------------------- Gợi ý sản phẩm cùng chuyên mục --------------------------->
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">Sản phẩm cùng chuyên mục</h3>
                    </div>
                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="6">
                                    <?php $stt = 1;
                                        foreach ($suggestsProduct as $item): ?>
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"><a
                                                        href="chitietsp.php?id=<?php echo $item['id'] ?>"><img
                                                        src="public/uploads/sanpham\<?php echo $item['hinhanh'] ?>"
                                                        alt=""></a></div>
                                                </div>
                                                <!-- /.product-image -->
                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                        href="chitietsp.php?id=<?php echo $item['id'] ?>"><?php echo $item['tensp'] ?></a>
                                                    </h3>
                                                    <div >
                                                    <span class="review-star-list d-flex">
                                                            <?php
                                                            $query_danhgia_sao = $db->fetchsql( "SELECT * FROM danhgia WHERE masp='".$item['id']."' ");
                                                            
                                                            $sao1 = 0;
                                                            $sao2 = 0;
                                                            $sao3 = 0;
                                                            $sao4 = 0;
                                                            $sao5 = 0;
                                                            
                                                            foreach ($query_danhgia_sao as $so_sao)  {
                                                                $sao = $so_sao['number_vote'];
                                                            
                                                                if ($sao == 1) {
                                                                    $sao1++;
                                                                } elseif ($sao == 2) {
                                                                    $sao2++;
                                                                } elseif ($sao == 3) {
                                                                    $sao3++;
                                                                } elseif ($sao == 4) {
                                                                    $sao4++;
                                                                } elseif ($sao == 5) {
                                                                    $sao5++;
                                                                }
                                                            }
                                                            
                                                            $tong = $sao1 + $sao2 + $sao3 + $sao4 + $sao5;
                                                            if ($tong != 0) {
                                                                $sao_avg =  ($sao1 * 1 + $sao2 * 2 + $sao3 * 3 + $sao4 * 4 + $sao5 * 5) / $tong;
                                                                $sao_avg = round($sao_avg, 1);
                                                            } else {
                                                                $sao_avg = 0;
                                                            }
                                                            
                                                            for ($i = 0; $i < 5; $i++) {
                                                                if ($i < $sao_avg) {
                                                            ?>
                                                                    <div class="rating-star"></div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="rating-star rating-off"></div>
                                                            <?php
                                                                }
                                                            }
                                                            ?>                                                            
                                                        </span>
                                                    </div>
                                                    <div class="description">(<?php echo $tong ?>) Đánh giá</div>
                                                    <div class="product-price"><span
                                                        class="price"> <?php echo $item['gia'] ?></span>
                                                    </div>
                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                        <div class="col-sm-7">
                                            <?php if (isset($_SESSION["user"])) {?>
                                            <a href="them_giohang.php?id=<?php echo $chitiet['id']?>" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i></a>
                                            <?php } else { ?>
                                                <a href="sign-in.php" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i></a>
                                            <?php  }?>
                                                            
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->
                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <?php $stt++; endforeach ?>
                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
 <!---------------------------------------------- /Gợi ý sản phẩm cùng chuyên mục ----------------------------------------------------->
                <!-- /.product-tabs -->
            </div>
        </div>
        <div id="brands-carousel" class="logo-slider wow fadeInUp">
            <div class="logo-slider-inner">
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                        <img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt="">
                        </a>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__. "/layouts/footer.php"; ?>
