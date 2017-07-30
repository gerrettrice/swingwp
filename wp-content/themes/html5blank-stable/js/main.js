jQuery(function($) { // DOM is now ready and jQuery's $ alias sandboxed

    $('.fade').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 350,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 5000,
    });

});

// $('.fade').slick({
//     dots: true,
//     arrows: false,
//     infinite: true,
//     speed: 350,
//     fade: true,
//     cssEase: 'linear',
//     autoplay: true,
//     autoplaySpeed: 5000,
// });
