$(document).ready(function() {
    window.onscroll = changePos;

    function changePos() {
        if (window.pageYOffset == 0 || window.pageYOffset > window.innerHeight) {
            $(".header").addClass('fixed');
            if(window.pageYOffset > window.innerHeight) {
                $(".header").addClass('top');
            }
        } else {
            $(".header").removeClass('fixed');
            $(".header").removeClass('top');
        }
    }

    $('.gal').slick({
        dots: true,
        infinite: true,
        speed: 500,
        autoplay: true
    });
});