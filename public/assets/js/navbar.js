(function($) {
    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 48) {
                $('#menu').fadeIn(1);
            } else {
                $('#menu').fadeOut(1);
            }
        });
    });
})(jQuery);