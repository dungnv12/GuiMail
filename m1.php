<?php	
// Khai báo thư viên phpmailer
require "PHPMailer-master/class.phpmailer.php";
 require "PHPMailer-master/class.smtp.php";
 require "PHPMailer-master/class.pop3.php";
// Khai báo tạo PHPMailer 
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->Host = "smtp.gmail.com"; // specify main and backup server
$mail->Port = 465; // set the port to use
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = 'ssl';
$mail->Username = "nguyenvandungk53a2ttud@gmail.com"; // your SMTP username or your gmail username
$mail->Password = "eyeforgettable"; // your SMTP password or your gmail password
$from = "nguyenvandungk53a2ttud@gmail.com"; // Reply to this email
$to="leeyongsan27121989@gmail.com"; // Recipients email ID
$name="Ky Thuat PA"; // Recipient's name

$mail->From = $from;
$mail->FromName = "Your From Name"; // Name to indicate where the email came from when the recepient received
$mail->AddAddress($to,$name);
$mail->AddReplyTo($from,"Ky Thuat PA");
$mail->WordWrap = 50; // set word wrap
$mail->IsHTML(true); // send as HTML
$mail->Subject = "Gui mail PHPMailer";
$mail->Body = "<b>Mail nay duoc gui bang SMTP Gmail dung phpmailer class. - <a href='http://www.pavietnam.vn'>www.pavietnam.vn</a></b>"; //HTML Body
$mail->AltBody = "Mail nay duoc gui bang SMTP Gmail dung phpmailer class. - www.pavietnam.vn"; //Text Body
//$mail->SMTPDebug = 2;
if(!$mail->Send())
{
    echo "<h1>Loi khi goi mail: " . $mail->ErrorInfo. '</h1>';
}
else
{
    echo "<h1>Send mail thanh cong</h1>";
}
?>

