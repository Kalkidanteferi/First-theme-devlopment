jQuery(document).ready(function ($){
    // daynamic scroll to top link
    $link = '<a href="#top" class="top" >&uarr;</a>';
    $('body').append($link);
    $('.top').hide();
    $(window).scroll(function (){
        if ($(this).scrollTop() > 100) {
            $('.top').fadeIn();

        } else {
            $('.top').fadOut;
        }
    });
    $('.top').click(function (e){
        e.preventDefault();
        $('html, body').animate({screllTop: 0}, 400);
    });
});