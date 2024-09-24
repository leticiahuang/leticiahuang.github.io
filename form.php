<?php
if (isset($_POST['email'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    $to = "leticia.ytube@gmail.com";
    $subject = "Mail from Leticia's website";
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($to, $subject, $comment, $headers);
}
?>


