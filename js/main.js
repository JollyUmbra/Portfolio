$(document).ready(function()
{
    // Script for paralax in header image
    var scrollPos = $(this).scrollTop();
    var fadeStart = 0;
    var fadeUntil = $('#content').offset().top + 50;
    console.log(fadeUntil);
    $(this).scroll(function()
    {
        scrollPos = $(this).scrollTop();
        $('#hero').css("transform", "translateY(" + -scrollPos/3 + "px)");
        $('#hero').css("-webkit-transform", "translateY(" + -scrollPos/3 + "px)");
        opacity=0;
        if( scrollPos<=fadeStart )
        {
            opacity=1;
        }
        else if( scrollPos<=fadeUntil )
        {
            opacity=1-scrollPos/fadeUntil;
        }
        $('#hero').css('opacity', opacity);
    });
});
