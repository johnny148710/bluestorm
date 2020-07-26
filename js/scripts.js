jQuery(document).ready(function($){

    // Header Scroll
    var mywindow = $(window);
    var mypos = mywindow.scrollTop();
    var up = false;
    var newscroll;

    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 500;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 150);

    function hasScrolled() {
        var st = $(this).scrollTop();

        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('.header-container').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('.header-container').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }

    $('.toggle-btn').click (function(){
        $(this).toggleClass('open');
    });

    $(".menu-btn-js").click(function() {
          $(this).parent().parent().parent().parent().toggleClass('mobile-menu-open');
     });

    // Scroll down 

    $('.js-mouse-icon').click(function() {
        $('html, body').animate({
            scrollTop: $("#page-wrapper").offset().top
        }, 1000);
    });
    
    // Slick slider

    $('.slider-container').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow: $('.intro-prev'),
        nextArrow: $('.intro-next'),
    });

    $('.testimonial__inner-container').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 5000,
        arrows: true,
        dots: true,
        prevArrow: $('.intro-prev'),
        nextArrow: $('.intro-next'),
    });

    $('.mobile-slider-js').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow: $('.what-we-do-prev'),
        nextArrow: $('.what-we-do-next'),
    });

    $('.what-we-do__single-container').hover(function(){
        $(this).find('.what-we-do__text-container').toggleClass('show');
        
    });
});