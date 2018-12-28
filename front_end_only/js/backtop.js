$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 40) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });

        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
        
        $('#back-to-top').tooltip('show');
});