<?php
require_once __DIR__. "/admin/autoload/autoload.php";
require_once __DIR__. "/layouts/header.php"; ?>


<?php
?>
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-inner">
                    <ul class="list-inline list-unstyled">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li class='active'>Đăng nhập</li>
                    </ul>
                </div>
                <!-- /.breadcrumb-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.breadcrumb -->
        <div class="body-content">
            <div class="container">
                <div class="sign-in-page">
                    <div class="row">
                        <!-- Sign-in -->			
                        <div class="col-md-6 col-sm-6 sign-in">
                            <h4 class="">Đăng nhập</h4>
                            <div class="social-sign-in outer-top-xs">
                                <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Đăng nhập với Facebook</a>
                                <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Đăng nhập với Twitter</a>
                            </div>
                            <form class="register-form outer-top-xs" role="form" action="dangnhap.php" method="POST">
                                <div class="form-group" >
                                    <label class="info-title">Email <span>*</span></label>
                                    <input type="email" name="email" class="form-control unicase-form-control text-input" >
                                </div>
                                <div class="form-group">
                                    <label class="info-title">Mật khẩu <span>*</span></label>
                                    <input type="password" name="matkhau" class="form-control unicase-form-control text-input"  >
                                </div>
                                <button class="btn-upper btn btn-primary checkout-page-button" type="submit" name="submit">Đăng nhập</button>
                                <button class="btn-upper btn btn-primary checkout-page-button" type="reset" >Làm mới</button>

                            </form>
                        </div>
                        <!-- Sign-in -->
                        <!-- create a new account -->
                        <div class="col-md-6 col-sm-6 create-new-account">
                            <h4 class="checkout-subtitle">Đăng ký tài khoản</h4>
                            <form class="register-form outer-top-xs" role="form" action="dangky.php" method="POST">
                                
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Họ và tên <span>*</span></label>
                                    <input type="text" name="hoten" class="form-control unicase-form-control text-input" id="hoten">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Địa chỉ <span>*</span></label>
                                    <input type="text" name="diachi" class="form-control unicase-form-control text-input" id="diachi">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Số điện thoại <span>*</span></label>
                                    <input type="text" name="sdt" class="form-control unicase-form-control text-input" id="sdt">
                                </div>
                                <div class="form-group"  >
                                    <label class="info-title" for="exampleInputEmail2">Email <span>*</span></label>
                                    <input type="email" name="email"  class="form-control unicase-form-control text-input" >
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Mật khẩu <span>*</span></label>
                                    <input type="password" name="matkhau" class="form-control unicase-form-control text-input" >
                                </div>
                                <button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button" >Đăng ký</button>
                            </form>
                        </div>
                        <!-- create a new account -->			
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.container -->
        </div>
<?php require_once __DIR__. "/layouts/footer.php"; ?>