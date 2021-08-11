<?php

if($_POST["submit"]) {
    $recipient="javier@jefinserv.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content= "JE Financial Services | Accountant with a passion for accounting, finance and numbers" />
        <title>JE Financial Services - Services</title>
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/services.css">
    </head>

<body>
    <header class="col-12">
        <div class="col-6">
            <h1><a href="../index.html">je financial services</a></h1>
        </div>
    </header>

    <?=$thankYou ?>

    <form method="post" action="subscriberform.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>

</body>

</html>