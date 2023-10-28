<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  // Define your email and phone number to receive the contact form details
  $to = "gichinijonathan@gmail.com";
  $subject = "Contact Form Submission from $name";
  $messageBody = "Name: $name\nEmail: $email\nPhone Number: $phone\nMessage:\n$message";

  // Send the email
  mail($to, $subject, $messageBody);

  
  header("https://nathan02-99.github.io/");
}
?>
