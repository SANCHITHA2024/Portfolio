<?php

$fname = $_POST['fname'];
$email = $_POST['email'];
$num = $_POST['num'];
$sub = $_POST['sub'];
$msg = $_POST['msg'];

$mailheader = "From:".$fname."<".$email.">\r\n";

$recipient = "sanchithadevinda@gmail.com";

mail($recipient, $sub, $msg, $mailheader) or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="home" id="home">
    <div class="home-content">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <h2>Go back to the </h2> <p><a href="index.html">homepage</a>.</p>
    </div>
    </section
</body>
</html>
';


?>