var num = 0;
$(function() {
    if (navigator.userAgent.indexOf('Android') > 0) {
        $("body").addClass("android");
    }
});

$(".love-button").click(function() {
    $(this).data("click", ++num);
    var click = $(this).data("click");

    $(".suteki-counter").stop(true, true);
    $('.suteki-counter').addClass("speechanimation");
    $('.love-button').addClass("sutekiscalenormal").delay(500).queue(function(next) {
        $('.love-button').removeClass("sutekiscalenormal");
        $('.love-button-area-bg').removeClass("sutekiscalenormal");
        next();
    });


    if (click == 0) {
        $(".mask-color").css('height', '0%');

        $(".suteki-counter").animate({

            "opacity": "0",
        }, 0);



        $(".suteki-counter").fadeIn("100");
        $(".suteki-counter").fadeOut("5000");
    }
    if (click == 1) {
        $(".mask-color").css('height', '25%');

        $(".suteki-counter").animate({

            "opacity": "1",


        }, 0);

        $(".suteki-counter").fadeIn("100");
        $(".suteki-counter").fadeOut("5000");
    }
    if (click == 2) {
        $(".mask-color").css('height', '33%');

        $(".suteki-counter").animate({

            "opacity": "1",


        }, 0);

        $(".suteki-counter").fadeIn("100");
        $(".suteki-counter").fadeOut("5000");
    }
    if (click == 3) {
        $(".mask-color").css('height', '40%');

        $(".suteki-counter").animate({

            "opacity": "1",
        }, 0);

        $(".suteki-counter").fadeIn("100");
        $(".suteki-counter").fadeOut("5000");
    }
    if (click == 4) {
        $(".mask-color").css('height', '48%');

        $(".suteki-counter").animate({

            "opacity": "1",
        }, 0);

        $(".suteki-counter").fadeIn("100");
        $(".suteki-counter").fadeOut("5000");
    }

    if (click == 5) {
        $(".mask-color").css('height', '56%');

        $(".suteki-counter").animate({

            "opacity": "1",
        }, 0);

        $(".suteki-counter").fadeIn("100");
        $(".suteki-counter").fadeOut("5000");
    }
    if (click == 6) {
        $(".mask-color").css('height', '65%');

        $(".suteki-counter").animate({

            "opacity": "1",
        }, 0);

        $(".suteki-counter").fadeIn("100");
        $(".suteki-counter").fadeOut("5000");
    }
    if (click == 7) {
        $(".mask-color").css('height', '74%');

        $(".suteki-counter").animate({

            "opacity": "1",
        }, 0);

        $(".suteki-counter").fadeIn("100");
        $(".suteki-counter").fadeOut("5000");
    }
    if (click == 8) {
        $(".mask-color").css('height', '83%');

        $(".suteki-counter").animate({

            "opacity": "1",
        }, 0);

        $(".suteki-counter").fadeIn("100");
        $(".suteki-counter").fadeOut("5000");
    }
    if (click == 9) {
        $(".mask-color").css('height', '92%');

        $(".suteki-counter").animate({

            "opacity": "1",
        }, 0);

        $(".suteki-counter").fadeIn("4500");
        $(".suteki-counter").fadeOut("8000");
    }



    if (click == 10) {


        $(".mask-color").css({
            'background': "white",
            'height': "100%"
        });



        $("body").addClass("liked");
        $(".love-button").addClass("suteki-scale");

        $(".suteki-counter").fadeIn("5000");
        $(".suteki-counter").fadeOut("8000");
    }
    return false;
});



$(".love-button").click(function() {
    $(".love-button-count-span").html(function(i, val) {
        return val * 1 + 1;
    });
    $(".suteki-counter-number").html(function(i, val) {
        return val * 1 + 1;
    });
});