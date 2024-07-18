<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trang Admin</title>
        <link href="/bookstore/public/admin/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="<?php echo base_url()?>/bookstore/public/admin/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url()?>/bookstore/public/admin/css/sb-admin.css" rel="stylesheet"/>
        <link href="<?php echo base_url()?>/bookstore/public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../../index.php">Xin chào Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> -->
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      
                        <li>
                            <?php
                            if (isset($_SESSION["user"]) && $_SESSION["user"]) { ?>
                                <li><a class="dropdown-item" href="<?php echo thoat("../dangxuat.php")?>" id="signin">Đăng xuất</a></li>
                            <?php } else { ?>
                                <li><a href="sign-in.php" id="signin">Đăng nhập</a></li>
                            <?php } ?>    
                        
                        <!-- <a class="dropdown-item" href="../../dangxuat.php">Đăng xuất</a></li> -->
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Quản lý</div>
                            
                            <li class="<?php echo isset($open) && $open == 'danhmuc' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo modules("danhmuc/index.php")?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-rectangle-list fa-beat fa-xl"></i></div> Danh mục sản phẩm
                            </a>
                            <li class="<?php echo isset($open) && $open == 'sanpham' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo modules("sanpham/index.php")?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-layer-group fa-flip fa-xl"></i></div> Sản phẩm
                            </a>
                            <li class="<?php echo isset($open) && $open == 'nxb' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo modules("nxb/index.php")?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house-laptop fa-bounce fa-xl"></i></div> Nhà Xuất Bản
                            </a>
                            <li class="<?php echo isset($open) && $open == 'tacgia' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo modules("tacgia/index.php")?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-secret fa-beat fa-xl"></i></div> Tác giả
                            </a>
                            <li class="<?php echo isset($open) && $open == 'donhang' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo modules("donhang/index.php")?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-file-invoice-dollar fa-shake fa-xl"></i></div>Đơn hàng
                            </a>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
