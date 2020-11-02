<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
<!--    <script src="../../assets/vendors/modernizr-js/modernizr.js" type="text/javascript"></script>-->

</head>
<body>
<?php $this->beginBody() ?>
<header class="header">

    <div class="sitemenu sitemenu-2 sitemenu-3 sticky-menu" id="sticky-header1">
        <div class="container weight">
            <div class="row">
                <div class="col-lg-2 col-12">
                    <div class="barnd-logo-2">
                        <a href="index.html" class="logo">
                            <img src="frontend/giao_dien/dulich/assets/images/logo2.png" class="img-fluid logo-1" alt="">
                            <img src="frontend/giao_dien/dulich/assets/images/logo2.png" class="img-fluid logo-2" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-9 col-6">
                    <nav class="navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul id="menubar" class="navbar-nav menubar-2">
                                <li>
                                    <a href="javascript:void(0)" class="css-menu">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="#" class="css-menu">Tổng quan</a>
                                    <ul>
                                        <li>
                                            <a href="#" class="css-menu-con" style="">Lịch sử phát triển</a>

                                        </li>
                                        <li><a href="#" class="css-menu-con">Danh nhân</a></li>
                                        <li><a href="#" class="css-menu-con">Văn hoá - Nghệ thuật</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="css-menu">Điểm đến</a>
                                    <ul>
                                        <li>
                                            <a href="#" class="css-menu-con">Đình - đền - chùa</a>
                                            <ul>
                                                <li><a href="#" class="css-menu-con">Đình</a></li>
                                                <li><a href="#" class="css-menu-con">Đền</a></li>
                                                <li><a href="#" class="css-menu-con">Chùa</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="css-menu-con">Di tích lịch sử</a>
                                        </li>
                                        <li>
                                            <a href="#" class="css-menu-con">Vịnh - đảo - hang động</a>
                                            <ul>
                                                <li><a href="#" class="css-menu-con">Vịnh</a></li>
                                                <li><a href="#"class="css-menu-con">Đảo</a></li>
                                                <li><a href="#" class="css-menu-con">Hang động</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);" class="css-menu">Bản đồ du lịch</a></li>
                                <li><a href="javascript:void(0);" class="css-menu">Hỏi đáp</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-3 col-6 trvel-user">
                    <ul class="d-flex justify-content-end">
                        <li class="blog-src-btn">
                            <a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                            <ul class="blog-secrch">
                                <li>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search your article...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">SEARCH</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="user-option">
                            <i class="fa fa-user"></i>
                            <ul>
                                <li><a href="login.html"><i class="fa fa-sign-in"></i> Login</a></li>
                                <li><a href="register.html"><i class="fa fa-pencil-square-o"></i> Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <?= $content ?>
</main>

<footer class="footer footer-3 txt-clr-2">
    <div class="container weight">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <a href="index-3.html" class="logo">
                    <img src="frontend/giao_dien/dulich/assets/images/logo2.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 ftr-link">
                <div class="ftr-title pt-15 mb-35">
                    <h3>Danh Mục</h3>
                </div>
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Lịch sử phát triển</a></li>
                    <li><a href="#">Văn hóa nghệ thuật</a></li>

                    <li><a href="#">Bản đồ du lịch</a></li>
                    <li><a href="#">Hỏi đáp nhanh</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6  ftr-link">
                <div class="ftr-title pt-15 mb-35">
                    <h3>Điểm đến</h3>
                </div>

                <ul class="twitter-link">
                    <li><a href="#">Văn hóa nghệ thuật</a></li>
                    <li><a href="#">Đình - Đền - Chùa</a></li>
                    <li><a href="#">Di tích</a></li>
                    <li><a href="#">Vịnh - Đảo - Hang động</a></li>

                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ftr-title pt-15 mb-35">
                    <h3>Thông tin liên hệ</h3>
                </div>
                <ul class="ftr-contact">
                    <li><span>Địa chỉ:</span> Số 72 Trần Phú, Ngô Quyền, Hải Phòng</li>
                    <li><span>Email:</span> dulichhapphong@gmail.com</li>
                    <li><span>Phone:</span> 0225.2299799</li>
                </ul>
                <div class="ftr-social">
                    <div class="ftr-title pt-15 mb-15">
                    </div>
                    <ul class="d-flex">
                        <li><a href="#" class="icon-fb"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icon-twit"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icon-glg"><i class="fa fa-google"></i></a></li>
                        <li><a href="#" class="icon-ldn"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="icon-utb"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
    <div class="text-center">
        <div class="col-12">
            <hr class="light-1000">
            <p>&copy; COPYRIGHT BY SO DU LICH THANH PHO HAI PHONG. DESIGNED & DEVELOP BY QUYNH-NGUYEN-QUYET</p>
        </div>
    </div>
</footer>
<!--<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>-->
<!--<script src="../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="|49" defer=""></script>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
