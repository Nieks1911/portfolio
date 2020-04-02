<?php

if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'niekschouten1911@gmail.com';
    $subject = 'Email received from portfolio!';
    $body = '<html lang="en">
                <body>
                    <h2>Message:</h2>
                    <hr>
                    <p>Name
                    <br>
                    ' . $fullname . '</p>
                    <p>Email
                    <br>
                    ' . $email . '</p>
                    <p>Message
                    <br>
                    ' . $message . '</p>
                </body>
            </html>';

    $headers = "From: " . $fullname . " <" . $email . ">\r\n";
    $headers .= "Reply-to: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset-utf-8";

    $send = mail($to, $subject, $body, $headers);
    if ($send) {
        echo '<br>';
        echo 'Thanks for contacting me. I will respond as soon as possible!';
    } else {
        echo 'Error, failed to sent email... please try again.';
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONTACT</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="flex">
    <div class="header">
        <a href="../html/index.html">
            <img id="pixelheart" src="../images/heart pixel art 254x254.png" alt="heart">
        </a>
        <h1 class="title">To Learn & To Create</h1>
        <h3 id="name">Niek Schouten</h3>
    </div>
</div>

<div class="container">
    <div class="intro">
        <h1>CONTACT</h1>
    </div>
</div>

<form action="" method="post">
    <input type="text" name="fullname" placeholder="Full name">
    <br>
    <input type="text" name="email" placeholder="Email">
    <br>
    <input type="text" name="subject" placeholder="Subject">
    <br>
    <textarea name="message" placeholder="Message"></textarea>
    <button type="submit">Send away!</button>
</form>

<div class="grid">
    <div class="footer">
        <a href="../html/index.html">HOME</a> -
        <a href="../html/about.html">ABOUT</a> -
        <a href="../html/allprojects.html">ALL PROJECTS</a> -
        <a href="../php/contact.php">CONTACT</a>
    </div>
</div>

</body>
</html>
