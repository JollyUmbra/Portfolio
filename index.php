<!DOCTYPE html>
<html>
  <head>
    <title>Michael Wood  |  Front-end Web Developer  |  Digital Artist</title>
    <meta content='Portfolio of Michael Wood' name='description'>
    <meta content='Michael Wood' name='author'>
    <meta content='digital art, art, portfolio, web design, web development, design, development, programming, Michael Wood' name='keywords'>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <link href='stylesheets/styles.css' media='none' onload="if(media!='all')media='all'" rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald|Roboto' media='none' onload="if(media!='all')media='all'" rel='stylesheet' type='text/css'>
    <noscript>
      <link href='stylesheets/styles.css' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Oswald|Roboto' rel='stylesheet' type='text/css'>
    </noscript>
    <script src='js/jquery-1.11.2.min.js'></script>
    <script src='js/main.js'></script>
  </head>
  <body>
    <header>
      <canvas id='headerCanvas'></canvas>
      <div id='hero'>
        <img alt='Michael Wood Front End Web Developer' id='portrait' src='img/Michael-Wood.jpg'>
        <h1>Michael Wood</h1>
        <h2>Front-End Web Developer</h2>
        <h3>Digital Artist</h3>
        <div class='social'>
          <div class='icons'>
            <a href='https://www.linkedin.com/in/michaelwood7' target='_blank'>
              <div id='linkedIn'>Linkedin</div>
            </a>
            <a href='http://codepen.io/mwooddesigns' target='_blank'>
              <div id='codepen'>Codepen</div>
            </a>
            <a href='https://github.com/JollyUmbra' target='_blank'>
              <div id='github'>Github</div>
            </a>
            <a href='mailto:mwooddesigns@gmail.com' target='_blank'>
              <div id='email'>Email</div>
            </a>
          </div>
        </div>
      </div>
    </header>
    <div id='content'>
      <div class='container'>
        <h1 id='about'>About Me</h1>
        <div class='sideBySide'>
          <div class='left'>
            <h2>Who am I?</h2>
            <p>I am a Front-end Developer located in the central Florida area after just completing my Bachelor of Arts degree in Digital Arts from Stetson University. I have a passion for improving my skills in both design and development, and love finding unique and creative ways to use code to create a beautiful user experience.  In my spare time, I enjoy reading a good book, playing video games, playing my bass guitar, and learning as much as I can about web development.</p>
          </div>
          <div class='right'>
            <h2>What do I do?</h2>
            <p>My primary interest is in Front-end development. I am well-verses in HTML5(HAML), CSS(SCSS), Javascript(Coffeescript), jQuery, and php. I have also dabbled in writing svg. I am constantly looking for inspiration for good websites and  user experiences. I spend most of my idle time on CodePen playing with code or looking for new ideas to improve my own design skills. As well as web design, I also enjoy using programming for the creation of art to creative generative or interactive works that can be different every time they're viewed.</p>
          </div>
        </div>
        <h1 class='clear' id='portfolio'>My Work</h1>
        <h2>Web Design and Development</h2>
        <h3 class='clear'>Water Scarcity Awareness Website</h3>
        <a href='http://galatea.stetson.edu/~mwood/ScarceSupply/' target='_blank'>
          <img alt='A website promoting water scarcity awareness' src='img/water-scarcity.jpg'>
        </a>
        <p>This project was my first attempt at a complete website with advanced features without the use of any external frameworks. Also, served as a way to put new web design techniques, such as flexbox layout, to the test. This site was made to interact with a physical installation that served to illustrate the problem.</p>
        <h3>Canvas Experiments</h3>
        <a href='http://codepen.io/mwooddesigns/full/dobLeO/' target='_blank'>
          <img alt='Canvas Trig experimentation' src='img/CanvasTrig.png'>
        </a>
        <p>A codepen pen exploring the use of trigonometry for the use of cyclical drawing and animation using the javascript canvas library. This was developed as practice with the javascript canvas library.</p>
        <a href='http://codepen.io/mwooddesigns/full/dobmQb/' target='_blank'>
          <img alt='Canvas particle experimentation' src='img/ParticleDecay.png'>
        </a>
        <p>A codepen pen I developed to explore the use of basic physics for animation using the javscript canvas library. This was developed as practice with the javascript canvas library.</p>
        <a href='http://codepen.io/mwooddesigns/full/WbORjM/' target='_blank'>
          <img alt='Animated pi graph created with javascript canvas' src='img/CanvasGraph.png'>
        </a>
        <p>A codepen pen I developed as a way to practice with the javascript canvas library and to explore the use of canvas to create clean animated graphs.</p>
        <h2>Generative Art/Creative Coding Projects</h2>
        <h3>Life's a Glitch series</h3>
        <a href='img/LifesAGlitch.jpg' target='_blank'>
          <img alt="Life's a Glitch series by Michael Wood" src='img/LifesAGlitch.jpg'>
        </a>
        <p>Life's a Glitch is a series that seeks to reveal the beauty of every day life even in the most mundane tasks. I wrote a program in the Processing programming environment that receives motion tracking data from Max/MSP. It uses this data to draw generate an image based on the motion of the user. I then took the generated images and did a technique called databending using an audio editing program call Audacity. The first image was generated with a video of driving. The second is an image of me folding laundry. And the last image is an image of me eating dinner.</p>
        <h3>RGBCubism</h3>
        <a href='img/RGBCubism.jpg' target='_blank'>
          <img alt='RGBCubism series by Michael Wood' src='img/RGBCubism.jpg'>
        </a>
        <p>RGBCubism is a response to Cubist landscape compositions made for my Advanced Open Studio course. I was tasked with combining both a classic and modern technique. I wrote a Proccessing sketch that uses OpenGL to render 3D cubes to create the different compositions and choose a color scheme for each image.</p>
        <h3>Processing Visual Experiments</h3>
        <div class='videos'>
          <iframe allowfullscreen='' frameborder='0' height='281' mozallowfullscreen='' src='https://player.vimeo.com/video/126075587' webkitallowfullscreen='' width='500'></iframe>
          <iframe allowfullscreen='' frameborder='0' height='281' mozallowfullscreen='' src='https://player.vimeo.com/video/126076417' webkitallowfullscreen='' width='500'></iframe>
        </div>
        <p>Visual experiments using Processing to learn the math associated in basic animation to be later implemented in Javascript. This was a response to a prompt given in my Advanced Open Studio class.</p>
      </div>
    </div>
    <div class='spacer'></div>
    <div id='contact'>
      <div class='container'>
        <h1 id='contact'>Let's Work Together</h1>
        <h3 id='contact-msg'>Or just say hello!</h3>
        <div id='contact-area'>
          <form action='thank-you.php' method='post'>
            <label for='Name'>Name:</label>
            <input id='Name' name='name' type='text'>
            <label for='Email'>Email:</label>
            <input id='Email' name='email' type='text'>
            <label for='Message'>Message:</label>
            <textarea cols='20' id='Message' name='message' row='20'></textarea>
            <input class='submit-button' name='submit' type='submit' value='Submit'>
          </form>
        </div>
      </div>
    </div>
    <div class='spacer' id='last'></div>
  </body>
</html>
