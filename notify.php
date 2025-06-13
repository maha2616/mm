<?php
$to = "contestbattlezone@gmail.com";  // 🔁 Replace this with your email
$subject = "💰 New UPI Payment Notification";
$message = "Someone has clicked 'I Have Paid ₹100'. Check your UPI app for confirmation.";
$headers = "From: notify@yourdomain.com";

mail($to, $subject, $message, $headers);
echo "Thank you! We'll unlock your access soon.";
?>
