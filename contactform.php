<?php
if(isset($_POST['submit'])){
    $to = "hello@martidoke.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$message,$headers);
    echo "Mail Sent. Thank you, " . $name . ". I will be in touch shortly.";
    }
?>
