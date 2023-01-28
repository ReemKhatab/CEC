<?php

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
        $to = "mohamed@cecegy.com";
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
