<?php/*

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$fname = $ POST["fname"];
$lname = $ POST["lname"];
$email = $ POST["email"];
$company = $ POST["company"];
$subject = $ POST["subject"];

require "vendor/autoload. php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true

$mail->Host = "smtp. example. com";
$mail->SMTPSecure = PHPMailer: : ENCRYPTION STARTTLS;
$mail->Port = 587;
$mail->Username = "you@example. com";
$mail->Password = "password";
$mail->setFrom($email, $name);
$mail->addAddress("dave@example. com", "Dave");
$mail->Subject = $subject;
$mail->Body = $message;
$mail->send();
echo "email sent";

if($_POST["message"]) {


mail("mhany2524@gmail.com", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}
*/

echo "<pre>"
    print_r($_POST);
echo '</pre>';
$message_sent=false;
if(isset($_POST['email']) && $_POST['email'] != ''){
    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

        $UserFirstName = $_POST['fname'];
        $UserLastName = $_POST['lname'];
        $UserEmail = $_POST['email'];
        $UserCountry = $_POST['country'];
        $UserCompany = $_POST['company'];
        $Message = $_POST['subject'];
        $to = "mhany@gmail.com";
        $body = "";
    
        $body .= "From: ".$UserFirstName. "\r\n";
        $body .= "From: ".$UserLastName. "\r\n";
        $body .= "From: ".$userEmail. "\r\n";
        $body .= "From: ".$UserCountry. "\r\n";
        $body .= "Email: ".$UserCompany. "\r\n";
        $body .= "Message: ".$Message. "\r\n";
    
        mail($to,$Message,$body)

        $message_sent=true;

    }
}


?>
