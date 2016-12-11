<?php

$name = $_POST('name');
$email = $_POST('email');
$sub = $_POST('subject');
$message = $_POST('message');

$to = 'hall.ryan.r@gmai.com';
$subject = $sub;


mail($to, $subject, $message, "From: " . $name);

?>