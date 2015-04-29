$(document).ready ->
    scrollPos = $(this).scrollTop()
    fadeStart = 0
    fadeUntil = $('#content').offset().top;
    $(this).scroll ->
        scrollPos = $(this).scrollTop();
        $('#hero').css
            'transform': 'translateY(' + -scrollPos/3 +'px)'
            '-webkit-transform': 'translateY(' + -scrollPos/3 +'px)'
        newOpacity=1;
        if scrollPos<=fadeStart
            newOpacity=1
        else if scrollPos<=fadeUntil
            newOpacity=1-scrollPos/fadeUntil;
        $('#hero').css
            opacity:newOpacity
        return

    c = document.getElementById('headerCanvas')
    ctx = c.getContext("2d")
    c.style.width = "100%";
    c.style.height = "100%";
    c.width = window.innerWidth;
    c.height = window.innerHeight;

    BG = '#6590dc'
    ctx.fillStyle = BG
    ctx.fillRect(0,0,c.width,c.height)
    time = 1
    dt = 0.1
    hue = 0
    speed = 2
    currentColor = 'hsla(' + hue + ', 100%, 50%, 1)'

    lines = []
    i = 0
    while i < c.width
        lines.push 0
        i++
    headerAnim = setInterval(( ->
        ctx.fillStyle='#fff'
        j=0
        while j < c.width
            currentColor = 'hsla(' + hue + ', 100%, 50%, 1)'
            ctx.fillStyle = currentColor
            ctx.fillRect j, 0, 1, lines[j]
            lines[j] += Math.random() * speed
            if lines[0] > c.height + 200
                for num of lines
                    lines[num] = 0;
                    hue += 0.3;
            j++
        time += dt
        return
    ), 1)
