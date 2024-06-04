<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    echo "<h1>Thank You, $name!</h1>";
    echo "<p>Your message: $message</p>";
}
?>
