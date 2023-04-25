<?php
session_start();
require("connect.php");

if (isset($_POST['email']) && isset($_POST['pass'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM `users` WHERE `email`='$email' AND `pass`='$pass'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        header("Location: /php-site/index.php");
        exit;
    } else {
        header("Location: /php-site/index.php");
        exit;
    }
}
?>
