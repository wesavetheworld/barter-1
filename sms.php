<?php
/* watch the video for detailed instructions */
$to = "03457286380@vmobl.com";
$from = "muhammadawais95@gmail.com";
$message = "This is a text message\nNew line...";
$headers = "From: $from\n";
mail($to, '', $message, $headers);
?>