<?php
require_once __DIR__. "/autoload/autoload.php";
if ( !isset($_SESSION["user"])) {
    header("Location: ../sign-in.php");
}
?>

<?php require_once __DIR__. "/layouts/header.php"; ?>
                        <!---->
                        <h1 class="mt-4">Xin chào bạn đến với trang quản trị!</h1>
                        <ol class="breadcrumb mb-4">
                            <!-- <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Static Navigation</li> -->
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2>XIN CHÀO ADMIN !</h2>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4">
                            <div class="card-body"></div>
                        </div>
                    <!---->
<?php require_once __DIR__. "/layouts/footer.php"; ?>