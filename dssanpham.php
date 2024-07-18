<?php 
require_once __DIR__. "/admin/autoload/autoload.php";
$id = intval(getInput('id'));
$sanpham = $db->fetchAll("sanpham");
$chitiet = $db->fetchID("sanpham", $id);
if (isset($_SESSION['giohang'])) 
{
  // echo "<pre />";
  // var_dump($_SESSION['giohang']);
}
?>

<?php require_once __DIR__. "/layouts/header.php"; ?>
<body>
  <div class="more-info-tab clearfix ">

    <h3 class="new-product-title pull-left">Sản phẩm</h3>

    <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
      <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">Tất cả</a></li>
    </ul>
    <!-- /.nav-tabs --> 
  </div>

  <?php if ( isset($_SESSION['success'])) : ?>
      <p class="text-success"><?php echo $_SESSION['success'] ?></p>
    <?php endif; unset($_SESSION['success']) ?>
      <div class="container">
      <div class='col col-sm-6 col-md-12'> 

            <div class="tab-pane in active" id="myTabContent">
            <div class="category-product">
            <?php $stt =1; foreach ($sanpham as $item): ?>

                  <div class="col col-sm-6 col-md-4">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="chitietsp.php?id=<?php echo $item['id']?>"><img src="<?php echo uploads() ?>sanpham/<?php echo $item['hinhanh'] ?>"  height="400px" alt=""></a> </div> 
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info ">
                        <h3 class="name"><a href="chitietsp.php?id=<?php echo $item['id']?>"><?php echo $item['tensp'] ?></a></h3>
                          <div >
                          
                          <span class="review-star-list d-flex">
                                <?php
                                $query_danhgia_sao = $db->fetchsql( "SELECT * FROM danhgia WHERE masp='".$item['id']."' ");
                                
                                $sao1 = 0;  $sao2 = 0;  $sao3 = 0;  $sao4 = 0; $sao5 = 0;
                                
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
                                
                                <span>(<?php echo $tong ?>) Đánh giá</span>
                            </span>
                          </div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"><?php echo number_format($item['gia'],0,".",",") ?></span>VNĐ </div> 
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <?php if (isset($_SESSION["user"])) {?>
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group" >
                              <a href="them_giohang.php?id=<?php echo $item['id']?>" class="btn btn-primary icon"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                              </li>
                            </ul>
                            <?php } else { ?>
                                <a href="sign-in.php" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i>Thêm vào giỏ hàng</a>
                            <?php  }?>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div> 
                                          
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div> <?php $stt++ ; endforeach ?>


               
                  <!-- /.item --> 
                </div>
            </div> 
  </div>                         
</body>



<?php //require_once __DIR__. "/layouts/footer.php"; ?>