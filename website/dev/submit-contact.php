<?php

if ($_POST['submitted']) {

    $to = 'treadsetters7@gmail.com';

    $subject = $_POST['about'] . 'From: ' . $_POST['fname'] . ' ' . $_POST['lname'] . ' | Contact Form.';

    $message = 'Contact form submission. ' . "\r\n"
            . 'From: ' . $_POST['fname'] . ' ' . $_POST['lname'] . "\r\n"
            . 'Email Address: ' . $_POST['email'] . "\r\n"
            . 'Phone Number: ' . $_POST['phone'] . "\r\n"
            . 'Zip Code: ' . $_POST['zip'] . "\r\n\r\n"
            . 'Subject: ' . $_POST['about'] . "\r\n"
            . 'Message: ' . $_POST['comments'];
    $message = wordwrap($message, 70, "\r\n");

    $headers = 'From: Tread Setters Contact Form <contactform@treadsetterstires.com>' . "\r\n"
        . 'Cc: larry.l.sharpe@gmail.com' . "\r\n"
        . 'Reply-To: admin@treadsetterstires.com' . "\r\n"
        . 'X-Mailer: PHP/' . phpversion();


    $subject2 = 'Thank You For Contacting Tread Setters Tires!';
    $message2 = 'We have received your message and will respond within two working days.' . "\r\n\r\n"
                . 'Here is what you sent us:' . "\r\n\r\n"
                . 'Subject: ' . $_POST['about'] . "\r\n"
                . 'Message: ' . $_POST['comments'];
    $headers2 = 'From: Tread Setters Contact Form <contactform@treadsetterstires.com>' . "\r\n"
        . 'Reply-To: admin@treadsetterstires.com' . "\r\n"
        . 'X-Mailer: PHP/' . phpversion();


    mail($to, $subject, $message, $headers);
    mail($_POST['email'], $subject2, $message2, $headers2);


    header("location: /contact-successful");


} else {
    header("location: /contact-tread-setters-tires");
}