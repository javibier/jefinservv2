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
    <div class="parallax"></div>
    <header class="col-12">
        <div class="col-6">
            <h1><a href="../index.html">je financial services</a></h1>
        </div>
    </header>

    <?=$thankYou ?>

    <div class="col-12" id="contactform">
    <form method="post" action="subscriberform.php">
        <label>Name:</label>
        <input name="sender"><br>

        <label>Email address:</label>
        <input name="senderEmail"><br>

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea><br>

        <input type="submit" name="submit">
    </form>
    </div>
    <footer>
                <div class="col-12">
                    <h5>Powered by <em><span><a href="http://www.jechevarria.com" target="_BLANK">javibier</a></span></em></h5>
                </div>
            </footer>

</body>

</html>