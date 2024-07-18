<?php
require_once __DIR__. "/../admin/autoload/autoload.php";
$danhmuc = $db->fetchAll("danhmuc");
$user = $db->fetchAll("users");
$id=intval(getInput('id'));
$user = $db->fetchID("users",$id);

?>
<style>
    .review-star-list {
      margin-bottom: 5px;
    }
    .d-flex {
      display: flex;
  }
  .rating-star {
      width: 18px;
      min-width: 18px;
      height: 18px;
      display: block;
      margin-right: 3px;
      background-color: #ffbc59;
      -webkit-mask-image: url(https://asset.vuahanghieu.com/assets/images/rating-star.svg);
      mask-image: url(https://asset.vuahanghieu.com/assets/images/rating-star.svg);
      -webkit-mask-size: contain;
      mask-size: contain;
  }
  .rating-star.rating-off {
      background-color: #d6dadf;
  }

</style>

  <!DOCTYPE html>
  <html lang="en">
  <head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="MediaCenter, Template, eCommerce">
  <meta name="robots" content="all">
  <title>BOOKSTORE</title>

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="public\frontend\css\bootstrap.min.css">

  <!-- Customizable CSS -->
  <link rel="stylesheet" href="public\frontend\css\main.css">
  <link rel="stylesheet" href="public\frontend\css\blue.css">
  <link rel="stylesheet" href="public\frontend\css\owl.carousel.css">
  <link rel="stylesheet" href="public\frontend\css\owl.transitions.css">
  <link rel="stylesheet" href="public\frontend\css\animate.min.css">
  <link rel="stylesheet" href="public\frontend\css\rateit.css">
  <link rel="stylesheet" href="public\frontend\css\bootstrap-select.min.css">

  <!-- Icons/Glyphs -->
  <link rel="stylesheet" href="public\frontend\css\font-awesome.css">

  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  </head>
  <style>
      .header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li > a {
      background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
      color: #000;
      font-family: 'Open Sans', sans-serif;
      font-size: 13px;
      line-height: 20px;
      padding: 11px 15px;
      text-transform: uppercase;
      -webkit-transitio: all 0.2s linear 0s;
      -moz-transition: all 0.2s linear 0s;
      -o-transition: all 0.2s linear 0s;
      transition: all 0.2s linear 0s;
      font-weight: normal;
      letter-spacing: 0.5px;
      border-right: 1px solid rgba(255,255,255,0.1);
      }
      .sidebar .side-menu .head {
          -webkit-border-radius: 0px;
          -moz-border-radius: 0px;
          border-radius: 0px;
          color: #333;
          font-size: 14px;
          font-family: 'Open Sans', sans-serif;
          padding: 12px 17px;
          text-transform: uppercase;
          background-color: #acabab66;
          border: 1px solid #fff;
          font-weight: 700;
          letter-spacing: 0.5px;
          border-bottom: 1px #fff solid;
      }
      header {
          background: #ffafbfc2;
      }
      .btn-primary {
          -webkit-transition: all linear 0.2s;
          -moz-transition: all linear 0.2s;
          -ms-transition: all linear 0.2s;
          -o-transition: all linear 0.2s;
          transition: all linear 0.2s;
          background: #bcbbbb6e;
          color: #000;
          border: none;
          font-size: 13px;
          line-height: 22px;
          border-radius: 0;
          padding: 6px 14px;
          font-family: 'Montserrat', sans-serif;
          border-radius: 2px;
      }
      .top-cart-row .dropdown-cart .lnk-cart {
          padding: 0px;
          background: #f3efc3;
          border: 1px solid #fcfcfc;
          border-radius: 3px;
          display: inline-block;
          color: #000;
      }
      .top-bar .cnt-account ul > li a {
          color: #000;
          padding: 0px;
          font-weight: 400;
          -webkit-transition: all 0.2s linear 0s;
          -moz-transition: all 0.2s linear 0s;
          -o-transition: all 0.2s linear 0s;
          transition: all 0.2s linear 0s;
      }
      .main-header .top-search-holder .search-area .search-button {
          border-radius: 0px 3px 3px 0px;
          display: inline-block;
          float: right;
          margin: 0px;
          padding: 12px 19px 12px;
          text-align: center;
          background-color: #f3efc3;
          border: 1px solid #fcfcfc;
      }
      .header-style-1 .header-nav {
          background: #b8b7b7;
      }
      .cnt-home .header-style-1 .header-nav .navbar .navbar-nav > li.active {
          background: #5555557a;
      }
      .footer .footer-bottom {
          background: #777;
          padding-top: 30px;
          padding-bottom: 30px;
      }
      .single-product .product-tabs .nav.nav-tabs.nav-tab-cell li.active a {
          background: #ffafbfc2;
      }
      .single-product .product-tabs .nav.nav-tabs.nav-tab-cell li.active a:after {
          border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #000;
      }
      .single-product .product-tabs .nav.nav-tabs.nav-tab-cell li a:hover, .single-product .product-tabs .nav.nav-tabs.nav-tab-cell li a:focus {
          background: #ffafbfc2;
      }
      a {
          color: #000;
      }
      .breadcrumb ul li.active {
          color: #000;
      }
  </style>
  <body class="cnt-home">
  <!-- ============================================== HEADER ============================================== -->
  <header class="header-style-1"> 
    
    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
      <div class="container">
        <div class="header-top-inner">
          <div class="cnt-account">
            <ul class="list-unstyled">
              <!-- <li><a href="#"><i class="icon fa fa-user"></i>Tài khoản</a></li> -->
              <li><a href="#"><i class="icon fa fa-heart"></i>Yêu thích</a></li>
              <li><a href="giohang.php"><i class="icon fa fa-shopping-cart"></i>Giỏ hàng</a></li>
              <li><a href="donhang.php"><i class="icon fa fa-shopping-bag"></i>Đơn hàng</a></li>
              <!-- <li><a href="thanhtoan.php"><i class="icon fa fa-check"></i>Thanh toán</a></li> -->
              <?php
              if (isset($_SESSION["user"])) { ?>
                <li><label for="username"><?php echo $_SESSION['username']?></label></li>
                  <li><a href="dangxuat.php" id="signin">Đăng xuất</a></li>
              <?php } else { ?>
                  <li><a href="sign-in.php" id="signin">Đăng nhập</a></li>
              <?php } ?>
              <!-- <li><a href="sign-in.php"><i class="icon fa fa-lock"></i>Đăng nhập</a></li> -->
            </ul>
          </div>
          <!-- /.cnt-cart -->
          <div class="clearfix"></div>
        </div>
        <!-- /.header-top-inner --> 
      </div>
      <!-- /.container --> 
    </div>
    <!-- /.header-top --> 
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
            <!-- ============================================================= LOGO ============================================================= -->
            <div class="logo" > <a href="index.php"> <img width='75%' src="assets\images\bookstore.jpg" alt="logo"> </a> </div>
            <!-- /.logo --> 
            <!-- ============================================================= LOGO : END ============================================================= --> </div>
          <!-- /.logo-holder -->
         
          <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
            <!-- /.contact-row --> 
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class="search-area">
              <form  action="timkiem.php?quanly=timkiem" method="POST">
                <div class="control-group">
                  <input class="search-field" type="text" placeholder="Tìm kiếm..." name="tukhoa">
                  <input class="search-button" type="submit" name="timkiem" value="Tìm kiếm">
                </div>
              </form>
              <!-- <div id="suggesstion"></div> -->
            </div>
            <!-- /.search-area --> 
            <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
          <!-- /.top-search-holder -->
          
          <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 
            <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
            
            <div class="dropdown dropdown-cart">
            <a href="giohang.php" class="dropdown-toggle lnk-cart" >
              <div class="items-cart-inner">
                <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                <!-- <div class="basket-item-count">
                    <span class="count"></span>
                </div> -->
                <div class="total-price-basket"> <span class="lbl">Giỏ hàng -</span> <span class="total-price"> <span class="sign"></span><span class="value"></span> </span>
                </div>
              </div>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="cart-item product-summary">
                    <div class="row">
                      <div class="col-xs-4">
                        <!-- <div class="image"> <a href="detail.html"><img src="assets\images\cart.jpg" alt=""></a> </div> -->
                      </div>
                      <div class="col-xs-7">
                        <h3 class="name"><a href="index.php?page-detail"></a></h3>
                        <div class="price"></div>
                      </div>
                      <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a> </div>
                    </div>
                  </div>
                  <!-- /.cart-item -->
                  <div class="clearfix"></div>
                  <hr>
                  <div class="clearfix cart-total">
                    <div class="pull-right"> <span class="text">Tổng cộng :</span><span class='price'></span> </div>
                    <div class="clearfix"></div>
                    <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Thanh toán</a> </div>
                  <!-- /.cart-total--> 
                  
                </li>
              </ul>
              <!-- /.dropdown-menu--> 
            </div>
            <!-- /.dropdown-cart --> 
            
            <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
          <!-- /.top-cart-row --> 
        </div>
        <!-- /.row --> 
        
      </div>
      <!-- /.container --> 
      
    </div>
    <!-- /.main-header --> 
    
    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
      <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
          <div class="navbar-header">
        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="nav-bg-class">
            <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
              <div class="nav-outer">
                <ul class="nav navbar-nav">
                  <li class="active dropdown yamm-fw"> <a href="index.php">Trang chủ <span class="btn btn-xs"></span></a> 
                  </li>
                  <li class="dropdown"> 
                    <a href="#" class=" secondary dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Danh mục sản phẩm</a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="dropdown">
                                <?php foreach ($danhmuc as $item): ?>                              
                                <ul class="links">
                                  <li>
                                      <a href="danhmuc.php?id=<?php echo $item['id']?>" class="btn-group dropright"  ><?php echo $item['tendanhmuc'] ?>
                                        <div class="dropdown-menu" class="btn-group dropright"  data-hover="dropdown" data-toggle="dropdown"></div>
                                      </a>
                                  </li>
                                </ul>
                                <?php  endforeach ?>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-4 col-menu custom-banner"> <a href="#"></a>
                            <!-- /.row --> 
                          </div>
                      </li>
                    </ul>
                    
                  </li>
                  <li class="dropdown yamm mega-menu"> <a href="dssanpham.php" >danh sách sản phẩm <span class="btn btn-xs"></a>
                    <ul class="dropdown-menu container">
                      <li>
                        <div class="yamm-content ">
                          <div class="row">
                            
                            <!-- /.col -->
                            
                            <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="assets\images\banners\top-menu-banner1.jpg" alt=""> </div>
                            <!-- /.yamm-content --> 
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
                    <ul class="dropdown-menu pages">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-menu">
                              <ul class="links">
                                <li><a href="index.php">Trang chủ</a></li>
                                <li><a href="giohang.php">Giỏ hàng</a></li>
                                <li><a href="donhang.php">Đơn hàng</a></li>
                                <!-- <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Detail</a></li>
                                <li><a href="contact.html">Liên hệ</a></li> -->
                                <li><a href="sign-in.php">Đăng nhập</a></li>
                                <!-- <li><a href="my-wishlist.html">Yêu thích</a></li>
                                <li><a href="terms-conditions.html">Điều khoản và điều kiện</a></li> -->
                                <li><a href="donhang.php">Theo dõi đơn hàng</a></li>
                                <!-- <li><a href="faq.html">FAQ</a></li>
                                <li><a href="404.html">404</a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
                <!-- /.navbar-nav -->
                <div class="clearfix"></div>
              </div>
              <!-- /.nav-outer --> 
            </div>
            <!-- /.navbar-collapse --> 
          </div>
          <!-- /.nav-bg-class --> 
        </div>
        <!-- /.navbar-default --> 
      </div>
      <!-- /.container-class --> 
      
    </div>
    <!-- /.header-nav -->  
  </header>
