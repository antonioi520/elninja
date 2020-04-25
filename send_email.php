<?php session_start(); ?>
<!-- the captcha needs the above line -->

<?php
if(isset($_POST['email'])) {

    $email_to = "MiAlmaRestaurant1@gmail.com";
    $email_subject = "Mi Alma Restaurant - " . $_POST['subject'];

    function died($error)
    {
        //echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        //echo "These errors appear below.<br /><br />";
        //echo $error . "<br /><br />";
        //echo "Please fix before resubmitting.<br /><br />";
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
    $email_host = 'do-not-reply@MiAlmaRestaurant.com';
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

    // it was recommended to have this after form submission error checks
    /*include_once 'securimage/securimage.php';

    $securimage = new Securimage();*/

    // captcha validation
    /*if (!isset($_POST['captcha'])
    ) {
        died('Please enter a security code.');
    }*/

    // exit on failure, else send form to email
    /*if ($securimage->check($_POST['captcha_code']) == false) {
        // the code was incorrect
        $error_message .= 'The security code entered was incorrect.<br />';
        died($error_message);
        //echo "The security code entered was incorrect.<br /><br />";
        //echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
        exit;
    }*/

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
}
    ?>
     
    <!-- include success html here -->
     
    Your message has been sent, thank you!
     

