<!DOCTYPE html>
<html>
  <head>
    <title>Contact Results  |  Michael Wood  |  Front-end Developer</title>
    <link href='stylesheets/styles.css' media='none' onload="if(media!='all')media='all'" rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald|Roboto' media='none' onload="if(media!='all')media='all'" rel='stylesheet' type='text/css'>
    <link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <noscript>
      <link href='stylesheets/styles.css' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Oswald|Roboto' rel='stylesheet' type='text/css'>
      <link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    </noscript>
    <link href='/apple-touch-icon-57x57.png' rel='apple-touch-icon' sizes='57x57'>
    <link href='/apple-touch-icon-60x60.png' rel='apple-touch-icon' sizes='60x60'>
    <link href='/apple-touch-icon-72x72.png' rel='apple-touch-icon' sizes='72x72'>
    <link href='/apple-touch-icon-76x76.png' rel='apple-touch-icon' sizes='76x76'>
    <link href='/apple-touch-icon-114x114.png' rel='apple-touch-icon' sizes='114x114'>
    <link href='/apple-touch-icon-120x120.png' rel='apple-touch-icon' sizes='120x120'>
    <link href='/apple-touch-icon-144x144.png' rel='apple-touch-icon' sizes='144x144'>
    <link href='/apple-touch-icon-152x152.png' rel='apple-touch-icon' sizes='152x152'>
    <link href='/apple-touch-icon-180x180.png' rel='apple-touch-icon' sizes='180x180'>
    <link href='/favicon-32x32.png' rel='icon' sizes='32x32' type='image/png'>
    <link href='/android-chrome-192x192.png' rel='icon' sizes='192x192' type='image/png'>
    <link href='/favicon-96x96.png' rel='icon' sizes='96x96' type='image/png'>
    <link href='/favicon-16x16.png' rel='icon' sizes='16x16' type='image/png'>
    <link href='/manifest.json' rel='manifest'>
    <link color='#5bbad5' href='/safari-pinned-tab.svg' rel='mask-icon'>
    <meta content='#da532c' name='msapplication-TileColor'>
    <meta content='/mstile-144x144.png' name='msapplication-TileImage'>
    <meta content='#ffffff' name='theme-color'>
  </head>
  <body class='contact-results'>
    <?php
    error_reporting(-1);
    ini_set('display_errors', 'Off');
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = filter_var($message, FILTER_SANITIZE_STRING);
    $from_add = "contact@mwooddesigns.com";
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($name) && !empty($message))
    {
    $headers = "From: $from_add \r\n";
    $headers .= "Reply-To: $from_add \r\n";
    $headers .= "Return-Path: $from_add\r\n";
    $headers .= "X-Mailer: PHP \r\n";
    $message ="From: " . $name . "\r\n" . $message . "\r\n Reply-To: " . $email;
    $sent = mail("mwooddesigns@gmail.com", "Message from portfolio contact form", $message, $headers);
    }
    function test_input($data)
    {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>
    <div id='thank-you'>
      <?php
      if (empty($name) || empty($email) || empty($message))
      {
      echo "<h1>It looks like you forgot something?<br>Or maybe some invalid data?";
      }
      else
      {
      echo "<h1>Thanks for the message, " . $name . ".<br>I will contact you as quickly as possible!</h1>";
      }
      ?>
      <br>
      <a class='fa fa-coffee fa-2x' href='index.php'></a>
      <h2>
        <a href='index.php'>Portfolio</a>
      </h2>
    </div>
  </body>
</html>
