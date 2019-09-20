
require('./config');
const $ = require('jquery');
require('./vendor/jquery.magnific-popup.min.js');
require('slick-carousel');
//require('flip');
const flatpickr = require("flatpickr");
let hoverintent = require('hoverintent');


flatpickr(".date",{
        
});

let $btnMenu = $('#btn-menu'),
    $menu = document.querySelector('.nav-container .menu-item-has-children');
    $homeMenu = document.querySelector('.home-menu .menu-item-has-children');
    $body = $('body');
    $main = $('.main');
    navContainer = document.querySelector('.nav-container');

$btnMenu.on('click', function (e) {

    $body.toggleClass('nav-is-open');

});
$main.on('click', function (e) {

    $body.removeClass('nav-is-open');

});

hoverintent(navContainer,
    function () {
    
    }, function () {
        $body.toggleClass('nav-is-open');
       
    }).options({
        timeout: 10,
        interval: 50
    });

$concierge = document.querySelectorAll('.concierge-container .container-card');

$concierge.forEach(element => {
    hoverintent(element,
        function () {
            $(this).find('.card').addClass('flipped');
        }, function () {
            $(this).find('.card').removeClass('flipped');
        }).options({
            timeout: 200,
            interval: 50
        });
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
    autoplaySpeed: 3500,
    arrows: false,
    cssEase: 'linear',
    fade: true,
    pauseOnHover: false
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
    autoplaySpeed:8000,
    arrows: false,
    prevArrow: '<span class="arrow-left"><i class="fas fa-angle-left"></i></span>',
    nextArrow: '<span class="arrow-right"><i class="fas fa-angle-right"></i></span>',
    dots: false,
    cssEase: 'linear'
});


$('.contact-popup-link, .team-popup-link, .inquiry-popup-link').magnificPopup({
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

    //$('#contact-popup').find('input[name="your-subject"]').val($(this).attr('data-title'));
    if ($(this).attr('data-title')){

        $('#contact-popup').find('h2.contact-title').text($(this).attr('data-title'));
    }
    
});

$('.inquiry-popup-link').on('click', function (e) {

    //$('#contact-popup').find('input[name="your-subject"]').val($(this).attr('data-title'));
    if ($(this).attr('data-title')){

        //$('#inquiry-popup').find('h2.contact-title').text($(this).attr('data-title'));
        $('#inquiry-popup').find('input[name="property"]').val($(this).attr('data-title'));
    }
    
});


$('body').on('click', '.popup-video', function (e) {
    e.preventDefault();
  
    $(this).magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
  
                    id: 'v=', // String that splits URL in a two parts, second part should be %id%
                    // Or null - full URL will be returned
                    // Or a function that should return %id%, for example:
                    // id: function(url) { return 'parsed id'; }
  
                    src: '//www.youtube.com/embed/%id%?autoplay=1&rel=0&showinfo=0' // URL that will be set as a source for iframe.
                },
  
  
            },
  
  
        },
        fixedContentPos: false
    }).magnificPopup('open');
  
  });

  $('.banner-video-icon').on('click', function (e) {

    $('.banner-video').addClass('show');
    $(".banner-video .video iframe")[0].src += "&autoplay=1&rel=0";
    e.preventDefault();
    
});



console.log('cargado');

