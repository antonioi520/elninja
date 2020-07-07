<?php session_start(); ?>
<!-- the captcha needs the above line -->

<?php
if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['phone'])
    && isset($_POST['event_type']) && isset($_POST['attendees']) && isset($_POST['date'])
    && isset($_POST['hours_start']) && isset($_POST['special_request'])) {

    $email_to = "antonioi19961@gmail.com";
    $email_to2 = "younglubackup@gmail.com";
    //$email_to = "chinito@elninjari.com";
    //$email_to2 = "ninja@elninjari.com";
    $email_subject = "El Ninja Reservations - " . $_POST['name'];

    function died($error)
    {
        die($error);
    }

    // validation
    if (!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['event_type']) ||
        !isset($_POST['other_type']) ||
        !isset($_POST['attendees']) ||
        !isset($_POST['date']) ||
        !isset($_POST['special_request']) ||
        !isset($_POST['hours_start']) ||
        !isset($_POST['hours_start_str'])
    ) {
        died('One or more of your entries appears to be invalid, please try again.');
    }

    $name = $_POST['name'];
    $email_host = 'do-not-reply@ElNinja.net';
    $email_from = $_POST['email'];
    $captcha = $_POST['captcha'];
    $phone = $_POST['phone'];
    $event_type = $_POST['event_type'];
    $other_type = $_POST['other_type'];
    $attendees = $_POST['attendees'];
    $date = $_POST['date'];
    $hours_start = $_POST['hours_start'];
    $hours_start_str = $_POST['hours_start_str'];
    $special_request = $_POST['special_request'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'Please enter a valid email.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'Please enter a valid name.<br />';
    }

    if (strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Reservation Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email_from) . "\n";
    $email_message .= "Phone: " . clean_string($phone) . "\n";
    $email_message .= "Event Type: " . clean_string($event_type) . "\n";
    $email_message .= "Other Event Type: " . clean_string($other_type) . "\n";
    $email_message .= "Estimated Number of Attendees: " . clean_string($attendees) . "\n";
    $email_message .= "Event Date (YYYY-MM-DD): " . clean_string($date) . "\n";
    $email_message .= "Event Start Time: " . clean_string($hours_start_str) . "\n";
    $email_message .= "Special Request: " . clean_string($special_request) . "\n";

    // create email headers
    $headers = 'From: ' . $email_host . "\r\n" .
        'Reply-To: ' . $email_host . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    @mail($email_to2, $email_subject, $email_message, $headers);
}
?>
 
<!-- include success html here -->
 
Your message has been sent, thank you!
 

