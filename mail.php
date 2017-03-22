<?php
session_start();
print_r($_SESSION);
function __autoload($class) {
    require_once $class . '.php';
}
?>

<!--NOTE FOR THOSE USING mail.php - It doesn't work without composer!-->
<!-- Install PHPMailer and I used composer to set the dependencies.  -->
<!-- I used the command 'composer require phpmailer/phpmailer'       -->
<!-- which should hopefully be enough to send the mail.              -->

<!DOCTYPE html>
<html>
<head>
    <title>ITSupport Mail Message Prompt</title>
</head>
<body>
    <h3>Email Form:</h3>
    <form action = "sendmail.php"
          method = "POST" id = "mailing">
    <input type = "text" id = "receiver" name = "receiver" size = "30" maxlength = "30" placeholder = "Who are you sending to">
    <input type = "text" id = "sender" name = "sender" size = "30" maxlength = "30" value = "">
    <input type = "text" id = "subject" name = "subject" size = "60" maxlength = "60" value = "Test Mail...">
    <br /><br />
    <b>Please type your message below:</b><br />
    <br />
    <textarea id="msg" name="msg" rows="5" cols="60"></textarea>
    <br /><br />
    <input type = "submit" value = "Submit">
    </form>
</body>
</html>