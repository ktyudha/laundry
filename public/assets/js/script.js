
// OWLCAROUSEL
var owl = $('.owl-informasi');
owl.owlCarousel({
    loop: true,
    // center:true,
    lazyload: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 3,
            margin:0
        },
        600: {
            items: 3,
            margin:0,
        },
        1000: {
            items: 5,
        }
    }
});
var owl = $('.owl-servis');
owl.owlCarousel({
    loop: true,
    // center:true,
    lazyload: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 3,
            margin:0,
            loop: false,
        },
        600: {
            items: 3,
            margin:0,
            loop: false,
        },
        1000: {
            items: 4,
            loop: false
        }
    }
});
// OWLCAROUSEL
var owl = $('.owl-carousel');
owl.owlCarousel({
    loop: true,
    // center:true,
    lazyload: true,
    margin: 5,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            loop: false,
            margin:0
        },
        600: {
            items: 3,
            loop: false,
            margin:0
        },
        1000: {
            items: 3,
            nav: true,
            loop: false
        }
    }
});
