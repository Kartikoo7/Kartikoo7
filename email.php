<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["Name"];
  $email = $_POST["E-mail address"];
  $message = $_POST["Type your message here..."];

  // Set up the email parameters
  $to = "foreignerme5@gmail.com"; // Replace with your email address
  $subject = "New message from contact form";
  $headers = "From: $email";
  $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully.";
  } else {
    echo "Error sending message.";
  }
}
?>