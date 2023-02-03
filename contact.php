<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["user_name"];
  $email = $_POST["user_email"];
  $message = $_POST["user_message"];

  // Validate the form data
  if (empty($name) || empty($email) || empty($message)) {
    echo "Please fill out all the fields.";
    exit;
  }

  // Send the email
  $to = "dynamics-mechanics@gmail.com";
  $subject = "Contact Form Submission from $name";
  $body = "You have received a message from $name ($email):\n\n$message";
  $headers = "From: $email\r\nReply-To: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "Your message has been sent successfully.";
  } else {
    echo "Failed to send the message. Please try again later.";
  }
}

?>
