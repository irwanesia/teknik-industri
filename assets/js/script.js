$(document).ready(function () {
    var scroll_start = 0;
    var starchange = $('.content-dummy');
    var offset = starchange.offset();
    if (starchange.length) {

        $(document).scroll(function () {
            scroll_start = $(this).scrollTop();
            if (scroll_start > offset.top) {
                $(".navbar-default").css('background', 'rgba(0,0,0,0.5)');
            } else {
                $(".navbar-default").css('background', 'transparent');
            }

        });
    }



});
