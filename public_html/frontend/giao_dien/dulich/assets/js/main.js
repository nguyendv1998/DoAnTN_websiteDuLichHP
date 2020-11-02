(function ($) {
    "use strict";
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
            clickable: true
        },
        navigation: {nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev',},
        autoplay: {delay: 3000},
        loop: true,
        speed: 600,
    });
    $('.counter').counterUp({delay: 10, time: 1000});
    $('.video-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: false,
        autoplaySpeed: true,
        animateOut: 'fadeOut',
        autoplayHoverPause: true,
        responsive: {0: {items: 1}, 600: {items: 1}, 1000: {items: 1}}
    });
    $('.gallery-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        smartSpeed: 900,
        autoplayHoverPause: true,
        responsive: {0: {items: 1}, 600: {items: 2}, 1000: {items: 4}}
    });
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop(), mainHeader = $('#sticky-header'),
            mainHeaderHeight = mainHeader.innerHeight();
        if (scroll > 280) {
            $("#sticky-header").addClass("sticky-menu");
        } else {
            $("#sticky-header").removeClass("sticky-menu");
        }
    });
    var scrollTop = $(".scrollup");
    $(scrollTop).on('click', function () {
        $('html, body').animate({scrollTop: 0}, 900);
        return true;
    });
    $('.video-popup').magnificPopup({type: 'iframe', gallery: {enabled: true}});
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {enabled: true, navigateByImgClick: true, preload: [0, 1]},
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.', titleSrc: function (item) {
                return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            }
        }
    });
    var list1 = $(".moreload");
    var numToShow1 = 3;
    var button1 = $(".loadmore");
    var numInList1 = list1.length;
    list1.hide();
    if (numInList1 > numToShow1) {
        button1.show();
    }
    list1.slice(0, numToShow1).show();
    button1.on('click', function () {
        var showing1 = list1.filter(':visible').length;
        list1.slice(showing1 - 1, showing1 + numToShow1).fadeIn();
        var nowShowing1 = list1.filter(':visible').length;
        if (nowShowing1 >= numInList1) {
            button1.hide();
        }
    });
})(jQuery);