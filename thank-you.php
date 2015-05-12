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
  </head>
  <body class='contact-results'>
    <?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = filter_var($message, FILTER_SANITIZE_STRING);
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($name) && !empty($message))
    {
    $headers = array("From: " . $email, "Reply-To: " . $email, "X-Mailer: PHP/");
    $headers = implode("\r\n", $headers);
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
