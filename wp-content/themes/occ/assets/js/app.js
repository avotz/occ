
require('./config');
const $ = require('jquery');
require('./vendor/jquery.magnific-popup.min.js');
require('slick-carousel');
let hoverintent = require('hoverintent');


let $btnMenu = $('#btn-menu'),
    $menu = document.querySelector('.nav-container .menu-item-has-children');
    $homeMenu = document.querySelector('.home-menu .menu-item-has-children');
    $body = $('body');

$btnMenu.on('click', function (e) {

    $body.toggleClass('nav-is-open');

});

var opts = {
    timeout: 200,
    interval: 50
};

hoverintent($menu,
    function () {
        $(this).find(">.sub-menu").slideDown(200);
    }, function () {
        $(this).find(">.sub-menu").slideUp(200);
    }).options(opts);

hoverintent($homeMenu,
    function () {
        $(this).find(">.sub-menu").slideDown(200);
    }, function () {
        $(this).find(">.sub-menu").slideUp(200);
    }).options(opts);



$('.banner-slider').slick({
    dots: false,
    autoplay:true,
    speed: 500,
    arrows: false,
    cssEase: 'linear',
    fade: true,
});

$('.property-slider .slider').slick({
    infinite: true,
    speed: 500,
    fade: true,
    autoplay: true,
    arrows: true,
    prevArrow: '<span class="arrow-left"><i class="fas fa-angle-left"></i></span>',
    nextArrow: '<span class="arrow-right"><i class="fas fa-angle-right"></i></span>',
    dots: false,
    cssEase: 'linear'
});
$('.page-slider .slider').slick({
    infinite: true,
    speed: 500,
    fade: true,
    autoplay: true,
    arrows: true,
    prevArrow: '<span class="arrow-left"><i class="fas fa-angle-left"></i></span>',
    nextArrow: '<span class="arrow-right"><i class="fas fa-angle-right"></i></span>',
    dots: false,
    cssEase: 'linear'
});
$('.testimonials-slider').slick({
    infinite: true,
    speed: 500,
    fade: true,
    autoplay: true,
    arrows: false,
    prevArrow: '<span class="arrow-left"><i class="fas fa-angle-left"></i></span>',
    nextArrow: '<span class="arrow-right"><i class="fas fa-angle-right"></i></span>',
    dots: false,
    cssEase: 'linear'
});


$('.contact-popup-link').magnificPopup({
    type: 'inline',
    midClick: true,
    removalDelay: 500, //delay removal by X to allow out-animation
    callbacks: {
        beforeOpen: function () {

            this.st.mainClass = 'mfp-zoom-out';
            $('body').addClass('mfp-open');
        },
        beforeClose: function () {


            $('body').removeClass('mfp-open');
        }

    }


});

$('.contact-popup-link').on('click', function (e) {

    $('#contact-popup').find('input[name="your-subject"]').val($(this).attr('data-title'));

});


console.log('cargado');

