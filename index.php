<?php 
require_once __DIR__. "/admin/autoload/autoload.php";

$sanpham = $db->fetchAll("sanpham");
?>
<?php require_once __DIR__. "/layouts/header.php"; ?>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify"></i> Danh mục</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              <li class="dropdown menu-item"> <a href="danhmuc.php?id=22" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-file-text" aria-hidden="true"></i>Văn học nước ngoài</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="danhmuc.php?id=22">Văn học nước ngoài</a></li>
                        </ul>
                      </div>
                      <!-- /.col --> 
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> 
              </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-pencil-square-o" aria-hidden="true"></i>Văn học Việt Nam</a> 
                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="danhmuc.php?id=1">Khoa học</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="danhmuc.php?id=19">Tiểu thuyết</a></li>
                        </ul>
                      </div>
                      <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="assets\images\banners\banner-side.png"></a> </div>
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> 
                <!-- ================================== MEGAMENU VERTICAL ================================== --> 
              </li>              
            </ul>
            <!-- /.nav --> 
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">Khuyến mãi đặc biệt</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products special-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"  > <a href="#"> <img src="assets\images\products\doraemontap10.jpg"  alt=""> </a> </div>
                            <!-- /.image  -->
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-5">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Doraemon Truyện ngắn - Tập 10</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> 16.000 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget -->      
      </div>
      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <!-- ========================================== SECTION – HERO ========================================= -->


                              <!---                 ----             ------------------->

        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">Sản phẩm</h3>
            <?php if ( isset($_SESSION['success'])) : ?>
              <p class="text-danger"><?php $_SESSION['success'] ?></p>
            <?php endif; unset($_SESSION['success']) ?>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">Tất cả</a></li>
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs">
            
            <div class="tab-pane in active" id="all">
              <div class="product-slider">

                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                   <?php $stt =1; foreach ($sanpham as $item): ?>

                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="chitietsp.php?id=<?php echo $item['id']?>"><img src="public/uploads\sanpham\<?php echo $item['hinhanh'] ?>" alt=""></a> </div> 
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                        <h3 class="name"><a href="chitietsp.php?id=<?php echo $item['id']?>"><?php echo $item['tensp'] ?></a></h3>
                        <div >
                              <span class="review-star-list d-flex">
                                      <?php
                                      $query_danhgia_sao = $db->fetchsql( "SELECT * FROM danhgia WHERE masp='".$item['id']."' ");
                                      
                                      $sao1 = 0; $sao2 = 0; $sao3 = 0; $sao4 = 0; $sao5 = 0;
                                      foreach ($query_danhgia_sao as $so_sao)  {
                                          $sao = $so_sao['number_vote'];
                                          if ($sao == 1) { $sao1++; }
                                          elseif ($sao == 2) { $sao2++; }
                                          elseif ($sao == 3) { $sao3++; }
                                          elseif ($sao == 4) { $sao4++; } 
                                          elseif ($sao == 5) { $sao5++; }
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
                                  <div class="description">( <?php echo $tong ?> ) Đánh giá</div>
                              </span>
                              </div>
                          <div class="product-price"> <span class="price"> <?php echo $item['gia'] ?></span> </div> 
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <?php if (isset($_SESSION["user"])) {?>
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group" >
                              <a href="them_giohang.php?id=<?php echo $item['id']?>" class="btn btn-primary icon"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
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
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane --> 
            
          </div>
          <!-- /.tab-content --> 
        </div>
        <!-- /.scroll-tabs --> 
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-7 col-sm-7">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="assets\images\images (1).jpg" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col -->
            <div class="col-md-5 col-sm-5">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="assets\images\images (2).jpg" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-12">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="assets\images\banner.jpg" alt=""> </div>
                <div class="strip strip-text">
                  <div class="strip-inner">
                    <!-- <h2 class="text-right"><br>
                      <span class="shopping-needs"></span></h2> -->
                  </div>
                </div>
                <div class="new-label">
                  <div class="text">MỚI</div>
                </div>
                <!-- /.new-label --> 
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
            
          </div>
          <!-- /.row --> 
        </div>
      </div>
      <!-- /.homebanner-holder --> 
      <!-- ============================================== CONTENT : END ============================================== --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand3.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand6.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item--> 
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /#top-banner-and-menu --> 

<!-- ============================================================= FOOTER ============================================================= -->
<?php require_once __DIR__. "/layouts/footer.php"; ?>