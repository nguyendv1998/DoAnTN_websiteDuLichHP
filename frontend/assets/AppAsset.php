<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'frontend/giao_dien/dulich/assets/css/bootstrap.min.css',
        'frontend/giao_dien/dulich/assets/css/font-awesome.min.css',
        'frontend/giao_dien/dulich/assets/css/owl.carousel.min.css',
        'frontend/giao_dien/dulich/assets/css/owl.theme.default.min.css',
        'frontend/giao_dien/dulich/assets/css/animate.css',
        'frontend/giao_dien/dulich/assets/vendors/swiper-master/css/swiper.min.css',
        'frontend/giao_dien/dulich/assets/css/magnific-popup.css',
        'frontend/giao_dien/dulich/assets/vendors/slicknav-master/slicknav.min.css',
        'frontend/giao_dien/dulich/assets/style.css',
        'frontend/giao_dien/dulich/assets/css/responsive.css',
    ];
    public $js = [
        'frontend/giao_dien/dulich/assets/vendors/modernizr-js/modernizr.js',
        'frontend/giao_dien/dulich/assets/js/jquery.min.js',
        'frontend/giao_dien/dulich/assets/js/bootstrap.min.js',
        'frontend/giao_dien/dulich/assets/js/owl.carousel.min.js',
        'frontend/giao_dien/dulich/assets/vendors/swiper-master/js/swiper.min.js',
        'frontend/giao_dien/dulich/assets/vendors/slicknav-master/jquery.slicknav.min.js',
        'frontend/giao_dien/dulich/assets/js/magnific-popup.min.js',
        'frontend/giao_dien/dulich/assets/vendors/counterup/waypoints.min.js',
        'frontend/giao_dien/dulich/assets/vendors/counterup/counterup.min.js',
        'frontend/giao_dien/dulich/assets/js/scrollup.js',
        'frontend/giao_dien/dulich/assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
