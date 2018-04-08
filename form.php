<?php
if (isset($_POST['name']) || isset($_POST['email']) || isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (!empty($name) && !empty($email) && !empty($message)) {
        $from = 'From: ' . $name . '<' . $email . '> \r\n Reply-to: ' . $email;
        $subject = "Contact Form Enquiry";
        $message = " Name : ".$name."\n Email : ".$email."\n Message : ".$message;
        if (mail("admin@civilmachines.com", $subject, $message, $from)) {
            echo json_encode('success');
        } else {
            echo json_encode('failed');
        }
    }
}
?>