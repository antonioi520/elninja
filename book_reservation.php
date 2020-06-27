<?php session_start(); ?>
<!-- the captcha needs the above line -->

<?php
if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['comp_name'])
    && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['zip'])
    && isset($_POST['country']) && isset($_POST['event_name']) && isset($_POST['event_type'])
    && isset($_POST['event_desc']) && isset($_POST['attendees']) && isset($_POST['date'])
    && isset($_POST['hours_start']) && isset($_POST['hours_end'])) {

    $email_to = "younglubackup@gmail.com";
    $email_subject = "El Ninja Reservations - " . $_POST['event_name'];

    function died($error)
    {
        die($error);
    }

    // validation
    if (!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['comp_name']) ||
        !isset($_POST['address']) ||
        !isset($_POST['city']) ||
        !isset($_POST['state']) ||
        !isset($_POST['zip']) ||
        !isset($_POST['country']) ||
        !isset($_POST['event_name']) ||
        !isset($_POST['event_type']) ||
        !isset($_POST['event_desc']) ||
        !isset($_POST['attendees']) ||
        !isset($_POST['date']) ||
        !isset($_POST['hours_start']) ||
        !isset($_POST['hours_end']) ||
        !isset($_POST['hours_start_str']) ||
        !isset($_POST['hours_end_str'])
    ) {
        died('One or more of your entries appears to be invalid, please try again.');
    }

    $name = $_POST['name'];
    $email_host = 'do-not-reply@ElNinja.net';
    $email_from = $_POST['email'];
    $captcha = $_POST['captcha'];
    $phone = $_POST['phone'];
    $comp_name = $_POST['comp_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $event_name = $_POST['event_name'];
    $event_type = $_POST['event_type'];
    $event_desc = $_POST['event_desc'];
    $attendees = $_POST['attendees'];
    $date = $_POST['date'];
    $hours_start = $_POST['hours_start'];
    $hours_end = $_POST['hours_end'];
    $hours_start_str = $_POST['hours_start_str'];
    $hours_end_str = $_POST['hours_end_str'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'Please enter a valid email.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'Please enter a valid name.<br />';
    }

    if (strlen($event_desc) < 2) {
        $error_message .= 'The message you entered does not appear to be valid.<br />';
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
    $email_message .= "Company/Organization Name: " . clean_string($comp_name) . "\n";
    $email_message .= "Address: " . clean_string($address) . "\n";
    $email_message .= "City: " . clean_string($city) . "\n";
    $email_message .= "State/Province: " . clean_string($state) . "\n";
    $email_message .= "Postal/Zip Code: " . clean_string($zip) . "\n";
    $email_message .= "Country: " . clean_string($country) . "\n";
    $email_message .= "Event Name: " . clean_string($event_name) . "\n";
    $email_message .= "Event Type: " . clean_string($event_type) . "\n";
    $email_message .= "Event Description: " . clean_string($event_desc) . "\n";
    $email_message .= "Estimated Number of Attendees: " . clean_string($attendees) . "\n";
    $email_message .= "Event Date (YYYY-MM-DD): " . clean_string($date) . "\n";
    $email_message .= "Event Start Time: " . clean_string($hours_start_str) . "\n";
    $email_message .= "Event End Time: " . clean_string($hours_end_str) . "\n";

    if ($event_type == "Concert/Live Performance" || $event_type == "Business Event" || $event_type == "Convention")
    {
        $email_to = "younglubackup@gmail.com"; //special events email
    }
    else {
        $email_to = "younglubackup@gmail.com"; //all other event types
    }

    // create email headers
    $headers = 'From: ' . $email_host . "\r\n" .
        'Reply-To: ' . $email_host . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
}
?>
 
<!-- include success html here -->
 
Your message has been sent, thank you!
 

