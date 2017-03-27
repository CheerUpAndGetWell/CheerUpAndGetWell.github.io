<?php
  $email = $_POST['email'];
  $message = $_POST['message'];

  mail( "zachmazzie@gmail.com", "Feedback Form Results",
    $message, "From: $email" );
  header( "Location: http://www.google.com" );
?>
