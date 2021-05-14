$(document).ready(function(){
    if ($('#radio-1').prop("checked") == true) {
        $("#radio_1").addClass("active")
        $("#radio_2").removeClass("active")
    }
    $(document).on('change','.radio-custom',function(){
        if ($('#radio-1').prop("checked") == true) {
            $("#radio_1").addClass("active")
            $("#radio_2").removeClass("active")
            $(".new-input input").attr("disabled", true)
            $(".new-input button").attr("disabled", true)
        } else if ($('#radio-2').prop("checked") == true) {
            $("#radio_1").removeClass("active")
            $("#radio_2").addClass("active")
        }
    });
    $(document).on('change', '#radio-2', function () {
        $(".active .inner-save form input").removeAttr("disabled")
        $(".active .inner-save form button").removeAttr("disabled")
    })
});



 var swiper = new Swiper('.swiper-hero', {
        loop: true,
        // direction: 'vertical',
        pagination: {
            el: '.swiper-pagination',
            clickable: false,
        },
        breakpoints: {
            '@0.75': {
            clickable: true,
            // direction: 'vertical',
            },
            '@1.00': {
            clickable: true,
            // direction: 'vertical',
            },
            '@1.50': {
            clickable: true,
            direction: 'vertical',
            },
        },
        autoplay: {
            delay: 3000,
        },
    });
        // swiper.autoplay.stop();



var swiper = new Swiper(".swiper-latest", {
    slidesPerView: 3,
    slidesPerColumn: 2,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});