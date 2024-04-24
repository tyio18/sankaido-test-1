(() => {
    'use strict';

    jQuery('.slider').slick({
        dots: false,
        centerMode: true,
        centerPadding: '350px',
        slidesToShow: 1,
        autoplay: true,
        arrows: true,
        responsive: [
        
            {
                breakpoint: 1023,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '150px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '80px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '50px',
                    slidesToShow: 1
                }
            }
        ]
    });

    jQuery('.slider-2').slick({
        dots: true,
        arrows: false,
        centerMode: true,
        centerPadding: '120px',
        slidesToShow: 1,
        autoplay: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '80px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '30px',
                    slidesToShow: 1
                }
            }
        ]
    });

    jQuery('.slider-3').slick({
        arrows: false,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1800,
        speed: 1000,
        fade: true,
        cssEase: 'linear'
    });
})();

jQuery(function () {
    var btn = $('.fix-btn');

    jQuery(window).on('load scroll', function () {
        if ($(this).scrollTop() > 1000) {
            btn.addClass('active');
        } else {
            btn.removeClass('active');
        }
    });
});
