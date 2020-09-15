<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'kinggod2356@gmail.com'

    $email_subject = "New Request From User";

    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                        "User Request: $message.\n";
    

    $to = "adityamodz1234@gmail.com";

    $headers = "Form: $visitor_email \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");





?>