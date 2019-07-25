$(document).ready(function(){

    $('.h-en').text("09:00");

    $('.h-sal').text("18:00");

    $(function () {
        var header = $("#navbar");
        var navbar = $("#navbarBox")
        //var headerIndex = $("#header-index");
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 20) {
                header.removeClass('container-nav').addClass("container-navFixed");
                navbar.removeClass('navbar-Box').addClass("navbar-Box-full");
                //navbar.attr("style", "width: 100vw;");
            } else {
                header.removeClass("container-navFixed").addClass('container-nav');
                navbar.removeClass("navbar-Box-full").addClass('navbar-Box');
                //navbar.attr("style", "width: 90vw;");
            }

        });
    });

    /* $(function () {
        var width = $(window).width();
        var inf = $("#banner-inf");

        if(width <= 576) {
            inf.removeClass('col-6')
        }
    }); */

});