<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];

    $emailTo = "juanbracho16@gmail.com"
    $headers = "From: ".$emailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$messaage;


    mail($emailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}