<?php
$db = mysqli_connect(
    '127.0.0.1', "root", "", "info");
    if(!$db){
    die('нет соединения'. mysqli_connect_error());
    };
?>