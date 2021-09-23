$(document).ready(function() {
    var $h2 = $('.top-tabs');
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
                $('.selling .top-tabs').addClass("box-shadow-taps px-2");
            }
        }
    });



    $('.shop-details .product__details__pic .col-lg-8 .parent-tats .nav-link').click(function() {
        $('.shop-details .product__details__pic .col-lg-8 .parent-tats .nav-link').removeClass('active')
        $(this).addClass('active')
    })

    // $('shop-details .owl-stage-outer').hover
    // $(".shop-details .owl-stage-outer, .shop-details .owl-nav").hover(
    //     function() {
    //         $(".shop-details .owl-nav").css('opacity', 1);
    //     },
    //     function() {
    //         $(".shop-details .owl-nav").css('opacity', 0);
    //     }
    // );


    // #selling
    $(".selling .dot").click(function() {
        // $(this).css("display", "none")
        $(this).css("opacity", "0")
    })

    if (innerWidth < 1200) {
        // $(".header-taps").slideUp()
        // $(".header-taps").addClass('d-none')
        $(".header-taps").toggleClass('d-none')
    }
    if (innerWidth > 1200) {
        $(".open-tabs").toggleClass('d-none')
    }



    $(document).on('click', '.inner-imgs-tabs .item', function() {
        $('.inner-imgs-tabs .item').removeClass('active')
        $(this).addClass('active')

        tapImg = $(this).find('img').attr("src");
        console.log(tapImg);

        $(".product__thumb__pic img").attr("src", tapImg);
    })

    $('.inner-imgs-tabs .owl-prev').text('fdljldfkjdf')



})