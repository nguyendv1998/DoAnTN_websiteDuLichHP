<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="swiper-container">
    <div class="swiper-wrapper swiper-wrapper-3">
        <?php foreach ($sliders as $index => $slider): ?>
            <div class="swiper-slide slider-bg-<?=$index+1?>" style="background: url(images/sliders/<?=$slider->File?>) no-repeat center center/cover">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 text-left">
                            <h1>Khám phá Hải Phòng theo cách của chính bạn</h1>
                            <p></p>
                            <ul>
                                <li><a class="slider-info-btn" href="#">Tin tức du lịch<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li><a class="slider-info-btn" href="#">Khám phá<i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <div class="swiper-pagination swiper-pagination-3"></div>
</div>



<div class="experience-blog experience-blog-3">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="mb-20 fw-7 fz-36">Lịch sử Hải Phòng</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="blog-img">
                            <a href="#">
                                <img src="frontend/giao_dien/dulich/assets/images/Thời kỳ đầu - thế kỷ XVI.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="blog-layer">
                                <h3 class="fz-22 mtb-5">
                                    <a href="#" class="css-ls">Thời kỳ đầu - thế kỷ XVI</a></h3>
                                <!--                                    <span class="fz-13 fw-3">2017 - 2018</span>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="blog-img">
                            <a href="#">
                                <img src="frontend/giao_dien/dulich/assets/images/Đầu thế kỷ XVI - cuối thế kỷ XVIII.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="blog-layer">
                                <h3 class="fz-22 mtb-5"><a href="#" class="css-ls">Đầu thế kỷ XVI - cuối thế kỷ XVIII</a></h3>
                                <!--                                    <span class="fz-13 fw-3">2017 - 2018</span>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="blog-img">
                            <a href="#">
                                <img src="frontend/giao_dien/dulich/assets/images/Đầu thế kỷ XIX.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="blog-layer">
                                <h3 class="fz-22 mtb-5"><a href="#" class="css-ls">Đầu thế kỷ XIX</a></h3>
                                <!--                                    <span class="fz-13 fw-3">2017 - 2018</span>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="blog-img">
                            <a href="#">
                                <img src="frontend/giao_dien/dulich/assets/images/Từ 1945 đến nay-1.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="blog-layer">
                                <h3 class="fz-22 mtb-5"><a href="#" class="css-ls">Từ 1945 đến nay</a></h3>
                                <!--                                    <span class="fz-13 fw-3">2017 - 2018</span>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery gallery-3">
        <div class="bg-2 gallery-3-title">
            <div class="container weight">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h4 class="fw-7 fz-36">Kí ức Hải Phòng</h4>
                            <?php $ki_uc = \common\models\Cauhinh::find()->andFilterWhere(['ghiChu' =>'ki_uc_hai_phong'])->one() ?>

                            <iframe width="100%" height="500" src="<?=$ki_uc->noiDung?>"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="client-area client-area-3 bg-2 padding-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
                    <div class="section-title text-center">
                        <h4 class="fw-7 fz-36">Nhân vật lịch sử</h4>
                        <p class="fz-15">Hải Phòng - miền đất cổ - nơi sinh ra biết bao những anh hùng, những nhân tài của dân tộc  </p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme gallery-carousel popup-gallery">
                <?php foreach ($baiViets as $bai_viet):?>

                    <div class="item gallery-img">
                        <img src="images/anhdaidien/<?=$bai_viet->AnhDaiDien?>" alt="" class="img-fluid">
                        <div class="popup-view">
                            <a href="images/anhdaidien/<?=$bai_viet->AnhDaiDien?>"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                <?php endforeach;?>

            </div>
        </div>
    </div>


    <div class="advice-section bg-2" style="padding-top: 0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12">
                    <div class="section-title text-center">
                        <h4 class="fw-7 fz-36">Khám phá Hải Phòng</h4>
                        <p class="fz-16 fw-4"> </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="advice-post">
                        <img src="frontend/giao_dien/dulich/assets/images/đình-đền-chùa/chua-cao-linh.jpg" alt="" class="img-fluid">
                        <h2 class="fw-7">Đình - Đền - Chùa</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="advice-post">
                        <img src="frontend/giao_dien/dulich/assets/images/vịnh-đảo-hd/khu-di-tich-bach-dang-giang-nemtv-5.jpg" alt="" class="img-fluid">
                        <h2 class="fw-7">Di tích</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="advice-post">
                        <img src="frontend/giao_dien/dulich/assets/images/vịnh-đảo-hd/cat-ba.jpg" alt="" class="img-fluid">
                        <h2 class="fw-7">Vịnh - Đảo - Hang động</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-slider padding-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12">
                    <div class="section-title text-center">
                        <h4 class="fw-7 fz-36">Làng nghề truyền thống</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="owl-carousel owl-theme video-carousel">
                        <div class="item v-slider">
                            <img alt="lang-nghe" src="frontend/giao_dien/dulich/assets/images/lang-nghe/du-lich-hai-phong-14-9-2017-lang-nghe.jpg" >
                            <div class="slider-video">
                                <a href="#"><i ></i></a>
                                <?php $lang_nghe = \common\models\Cauhinh::find()->andFilterWhere(['ghiChu' =>'lang_nghe_truyen_thong'])->one();?>
                                <a href="<?=$lang_nghe->noiDung?>" class="video-popup"><i
                                        class="fa fa-play-circle"></i></a>
                            </div>
                        </div>
                        <div class="item v-slider">
                            <img src="frontend/giao_dien/dulich/assets/images/slider_2/02.jpg" alt="" class="img-fluid">
                            <div class="slider-video">
                                <a href="https://www.youtube.com/watch?v=xtrNfax2MjA" class="video-popup"><i
                                        class="fa fa-play-circle"></i></a>
                            </div>
                        </div>
                        <div class="item v-slider">
                            <img src="frontend/giao_dien/dulich/assets/images/slider_2/03.jpg" alt="" class="img-fluid">
                            <div class="slider-video">
                                <a href="https://www.youtube.com/watch?v=xtrNfax2MjA" class="video-popup"><i
                                        class="fa fa-play-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="client-area client-area-3 bg-2 padding-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
                    <div class="section-title text-center">
                        <h4 class="fw-7 fz-36">Văn hóa - Nghệ thuật</h4>
                        <p class="fz-15"> </p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme gallery-carousel popup-gallery">
                <?php foreach ($vanHoa as $van_hoa):?>
                    <div class="item gallery-img">
                        <img src="images/anhdaidien/<?=$van_hoa->AnhDaiDien?>" alt="" class="img-fluid">
                        <div class="popup-view">
                            <a href="images/anhdaidien/<?=$van_hoa->AnhDaiDien?>"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                <?php endforeach;?>

            </div>

        </div>
    </div>

    <div class="article-section article-section-3 padding-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
                    <div class="section-title text-center">
                        <h4 class="fw-7 fz-36">Du lịch nhân văn</h4>
                        <p class="fz-15"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if (!is_null($bai_viet_dinh_den_chua)):?>
                <div class="col-lg-4 moreload">
                    <div class="single-article wrap-reverse">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="article-post-img">
                                    <img src="images/anhdaidien/<?=$bai_viet_dinh_den_chua->AnhDaiDien?>" alt="<?=$bai_viet_dinh_den_chua->Alt?>" height="266px">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6" style="padding-top: 10px">
                                <div class="article-post text-left mb-35">
                                    <h3><a href="#"><?=$bai_viet_dinh_den_chua->TenBaiViet?><span><br></span></a></h3>
                                    <p><?=$bai_viet_dinh_den_chua->TomTat?></p>

                                    <a href="#" class="txt-clr-1 read-more">Xem thêm <i
                                                class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <?php if (!is_null($bai_viet_vinh_dao)):?>
                    <div class="col-lg-4 moreload">
                        <div class="single-article wrap-reverse">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="article-post text-left mb-35">
                                        <h3><a href="#"><?=$bai_viet_vinh_dao->TenBaiViet?><span><br></span></a></h3>
                                        <p><?=$bai_viet_vinh_dao->TomTat?></p>

                                        <a href="#" class="txt-clr-1 read-more">Xem thêm <i
                                                    class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="article-post-img">
                                        <img src="images/anhdaidien/<?=$bai_viet_vinh_dao->AnhDaiDien?>" alt="<?=$bai_viet_vinh_dao->Alt?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
                <?php if (!is_null($bai_viet_di_tich)):?>
                    <div class="col-lg-4 moreload">
                        <div class="single-article wrap-reverse">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="article-post-img">
                                        <img src="images/anhdaidien/<?=$bai_viet_di_tich->AnhDaiDien?>"  alt="<?=$bai_viet_di_tich->Alt?>" height="266px">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6" style="padding-top: 10px">
                                    <div class="article-post text-left mb-35">
                                        <h3><a href="#"><?=$bai_viet_di_tich->TenBaiViet?><span><br></span></a></h3>
                                        <p><?=$bai_viet_di_tich->TomTat?></p>

                                        <a href="#" class="txt-clr-1 read-more">Xem thêm <i
                                                    class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>

            </div>
        </div>
    </div>
</div>
