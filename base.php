
<?php
ob_start();
require 'vendor/autoload.php';

$failedFlag = false;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

//https://bootstrapbay.com/blog/working-bootstrap-contact-form/
$mail = new PHPMailer(TRUE);

try {

  $result = '';
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $message = $_POST['message'];
  $message .= "<br /><br /> Country: " . $country . " <br /><br /> (This message was sent from www.escapegameover.com)";

  // $headers = "From: ".$name ." ". $subject." <".$email.">\r\n"."Content-type: text/html; charset=UTF-8\r\n";
  $to = 'info@escapegameover.com';


  //server settings
  $mail->isSMTP();
  $mail->IsHTML(true);
  $mail->Host = 'mail.escapegameover.cloud'; //define host
  $mail->SMTPAuth = TRUE;
  $mail->SMTPSecure = 'ssl';
  $mail->CharSet = 'UTF-8';
  $mail->Username = 'mailer@escapegameover.cloud';
  $mail->Password = 'pd.FwmA%P^}?';
  $mail->Port = 465; //define port

  //Recipients
  $mail->setFrom($email, $name);
  $mail->addAddress($to, $subject);

  //email content
  $mail->Subject = $subject;
  $mail->Header = "From: " . $name . "  <" . $email . ">\r\n" . "Content-type: text/html; charset=UTF-8\r\n";
  $mail->Body = "Message: " . $message . "  ";

  /* Enable SMTP debug output. */
  $mail->SMTPDebug = 0;
  $mail->send();
  http_response_code(200);
  $result = true;
} catch (Exception $e) {
  //echo $e->errorMessage();
  http_response_code(500);
  $failedFlag = true;
  $result = false;
}
echo $result;
ob_end_flush();

// if has failed, DON'T autoreply <3 
if ($failedFlag) return;



$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
  //Server settings

  $name = $_POST['name'];
  $from = "mailer@escapegameover.cloud";
  $subject = "Auto-Reply";
  $message =  "Thank you for your message. You will soon be contacted by one of our representatives.\n\n GAME OVER Escape Rooms";

  $mail->SMTPDebug = 0;
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'mail.escapegameover.cloud';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'mailer@escapegameover.cloud';                 // SMTP username
  $mail->Password = 'pd.FwmA%P^}?';                           // SMTP password
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465;
  $mail->CharSet = 'UTF-8';
  //Recipients
  $mail->setFrom($from, 'GAME OVER Escape Rooms');
  $mail->addAddress($_POST['email'], 'Client GAME OVER');
  //Recipients

  // Add a recipient
  //$mail->addAddress($from);               // Name is optional

  //  $mail->AddCC("info@escapegameover.com");

  $mail->Subject = $subject;
  $mail->Body = '<div style="width:100%;height:auto;background-color:black;display:flex;flex-direction:column;align-items:center;overflow:hidden;">

  <div style="padding:100px 0;text-align:center;margin:0 auto;font-size:17px;">
  <p style="color:white;text-align:center;margin: 30px auto;display:block;">Thank you for your message.</p>
  <p style="color:white;text-align:center;margin: 30px auto;display:block;"> You will soon be contacted <br> by one of our representatives.</p>
  <img  style="text-align:center;display:inline;width:60px;margin-top:50px;" src="https://escapegameover.com/img/logo1.png">

  <div style="margin: 50px auto 100px auto;display:block;">
   <img  style="text-align:center;display:inline;width:190px;height:auto;" src="https://escapegameover.com/img/email_bottom.png">

   </div>
  </div>
  </div>';


  $mail->IsHTML(true);


  $mail->send();
  echo '<script type="text/javascript">window.location.href = "/";</script>';
  // echo '<script type="text/javascript">window.location.href = "http://www.escapegameover.com/index.php";</script>';
} catch (Exception $e) {
}

ob_end_flush();
?>