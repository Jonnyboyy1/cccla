<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Customize the email content
  $subject = 'New Form Submission';
  $to = 'jhonbrady83@gmail.com';
  $headers = "From: $name <$email>";

  // Send the email
  mail($to, $subject, $message, $headers);
}
?>