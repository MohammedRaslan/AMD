$(document).ready(function() {
    var $h2 = $('.top-tabs h2');
    var sticky = $h2.offsetTop;
    $('body').scroll(function() {
        if (window.pageYOffset > sticky) {
            // $('.selling .header-taps').addClass("c-position-static");
            if ((window.innerWidth > 1200)) {
                // $('.top-tabs h2').removeClass("py-2");
                $('.selling .header-taps').removeClass("position-fixed");

            }
        } else {
            // $('.selling .header-taps').addClass("c-position-static");
            if ((window.innerWidth < 1200)) {
                // $('.top-tabs h2').addClass('py-2')
                $('.selling .header-taps').addClass("position-fixed");
                $('.selling .top-tabs').addClass("box-shadow-taps");
            }
        }
    });



    $('.shop-details .product__details__pic .col-lg-8 .parent-tats .nav-link').click(function() {
        $('.shop-details .product__details__pic .col-lg-8 .parent-tats .nav-link').removeClass('active')
        $(this).addClass('active')
    })

    // $('shop-details .owl-stage-outer').hover
    $(".shop-details .owl-stage-outer, .shop-details .owl-nav").hover(
        function() {
            $(".shop-details .owl-nav").css('opacity', 1);
        },
        function() {
            $(".shop-details .owl-nav").css('opacity', 0);
        }
    );


      $(".selling .open-tabs, .over-lay-selling").click(function() {
        $(".header-taps").slideToggle()
        $('.selling .over-lay-selling').toggleClass("d-none");
    })
    if (window.innerWidth < 1200) {
        $(".header-taps .nav .nav-link").click(function() {
            $(".header-taps").slideToggle()
            $('.selling .over-lay-selling').toggleClass("d-none");
        })
    }




    // $(".shop-details .owl-stage-outer").hover(function() {
    //     $(this).fadeOut(100);
    //     $(this).fadeIn(500);
    // });


    // function headerTabs() {
    //     console.log('lkdf');
    //     // if (window.pageYOffset > sticky) {
    //     //     $h2.classList.add("py-4");
    //     // } else {
    //     //     $h2.classList.remove("py-4");
    //     // }
    // }
})