<?php session_start(); ?>
<!-- the captcha needs the above line -->

<?php
if(isset($_POST['email'])) {

    $email_to = "chinito@elninjari.com";
    $email_to2 = "ninja@elninjari.com";
    $email_subject = "El Ninja Restaurant - " . $_POST['subject'];

    function died($error)
    {
        die($error);
    }

    // validation
    if (!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])
    ) {
        died('One or more of your entries appears to be invalid, please try again.');
    }

    $name = $_POST['name'];
    $email_host = 'do-not-reply@ElNinjaRestaurant.com';
    $email_from = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $captcha = $_POST['captcha'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'Please enter a valid email.<br />';
    }
    
    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'Please enter a valid name.<br />';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The message you entered does not appear to be valid.<br />';
    }

    if (strlen($error_message) > 0) {
        died($error_message);
    }


    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email_from) . "\n";
    $email_message .= "Subject: " . clean_string($subject) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email_host . "\r\n" .
        'Reply-To: ' . $email_host . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    @mail($email_to2, $email_subject, $email_message, $headers);
}
    ?>
     

