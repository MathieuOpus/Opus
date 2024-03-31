<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'mathieu.martineau@houseplanhub.co'; // Replace with your company's email address
  $subject = 'Contact Us Form Submission';
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $mail_body = "Name: $name\nEmail: $email\nMessage: $message";
  
  // Send email
  if (mail($to, $subject, $mail_body, $headers)) {
    echo "Your message has been sent successfully!";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>
