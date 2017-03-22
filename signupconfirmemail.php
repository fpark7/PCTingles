<?php
  // Set path for the PHPMailer files.  These must have been previously
  // unzipped and placed into the stated directory.  Be sure to match
  // up the directories in your installation (i.e. you do not have to have
  // your files in the same directory that I have here, as long as you can
  // locate them).  To download / install the necessary files, see:
  // https://github.com/Synchro/PHPMailer
  
  require 'C:/xampp/vendor/autoload.php';

  // PHPMailer is a class -- we will discuss classes and PHP object-oriented
  // programming soon.  However, you should be able to copy / use this
  // technique without fully understanding PHP OOP.
  $mail = new PHPMailer();
 
  //$mail->SMTPDebug = 2; //Enable to get debug output
  //$mail->Debugoutput = 'html'; //Enable to prettify debug output
  $mail->SMTPOptions = array(
    'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
    )
  );  //VERY POOR WAY OF GETTING AROUND SSL CERTIFICATE VERIFICATION


  $mail->isSMTP(); // telling the class to use SMTP
  $mail->SMTPAuth = true; // enable SMTP authentication
  $mail->SMTPSecure = "tls"; // sets tls authentication
  $mail->Host = 'smtp.gmail.com'; // sets GMAIL as the SMTP server; or your email service
  $mail->Port = 587; // set the SMTP port for GMAIL server; or your email server port
  $mail->Username = "pctingles@gmail.com"; // email username
  $mail->Password = "pctingles4753"; // email password

  //$sender = strip_tags($_POST["sender"]);
  //$receiver = strip_tags($_POST["receiver"]);
  //$subj = strip_tags($_POST["subject"]);
  //$msg = strip_tags($_POST["msg"]);

  $subj = "Sign-up Confirmation";
  $msg = "Thank you for signing up!  You have a new account at P.C.Tingles.";

  // Put information into the message
  $mail->addAddress($email);
  $mail->SetFrom('donotreply@virginia.edu', 'P.C.Tingles Mail Bot - DO NOT REPLY');
  $mail->Subject = "$subj";
  $mail->Body = "$msg";

  //echo 'Everything ok so far' . var_dump($mail);
  /*if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
   } 
   else { echo 'Message has been sent'; }*/
?>
