$(document).ready(function()
{
    // Script for paralax in header image
    var scrollPos = $(this).scrollTop();
    var fadeStart = 0;
    var fadeUntil = $('#content').offset().top;
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

    // Begin scripts for headerCanvas
    var c = document.getElementById("headerCanvas");
    var ctx = c.getContext("2d");
    c.style.width = "100%";
    c.style.height = "100%";
    c.width = window.innerWidth;
    c.height = window.innerHeight;

    var BG = '#6590dc';
    ctx.fillStyle = BG;
    ctx.fillRect(0,0,c.width,c.height);

    var time = 1;
    var dt = 0.1;
    var hue = 0;
    var speed = 7;
    var currentColor = 'hsla(' + hue + ', 100%, 50%, 1)';

    var lines = [];
    for(i = 0; i < c.width; i++)
    	{
    		lines.push(0);
    	}
    var headerAnim = setInterval(function(){
    	ctx.fillStyle = '#fff';
    	for(j = 0; j < c.width; j++)
    		{
    			currentColor = 'hsla(' + hue + ', 100%, 50%, 1)';
    			ctx.fillStyle = currentColor;
    			ctx.fillRect(j,0, 2, lines[j]);
    			lines[j] += Math.random() * speed;
    			if(lines[0] > c.height + 200)
    				{
    					for(num in lines)
    						{
    							lines[num] = 0;
    							hue+=0.3;
    						}
    				}
    		}
    	time += dt;
    }, 1);
    // End scripts for headerCanvas
});
