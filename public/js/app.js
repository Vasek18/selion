$(document).ready(function () {
    new WOW().init();

    $('[data-fancybox="gallery"]').fancybox();

    $('.sertificates-slides').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 6,
        dots: true
    });

    $('.gallery-slides').slick({
        infinite: false,
        rows: 3,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true
    });
});