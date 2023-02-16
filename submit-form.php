<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'parasaashish56@gmail.com';
  $subject = 'New Inquiry from Keyhole Products Website';
  $message = "Name: $name\nEmail: $email\nMessage:\n$message";
  $headers = "From: $email\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo 'Your message has been sent successfully!';
  } else {
    echo 'There was a problem sending your message. Please try again later.';
  }
}
?>