<?php
$db = mysqli_connect(
    '127.0.0.1', "u1918010_admin", "Killer-2005", "u1918010_data");
    if(!$db){
    die('нет соединения'. mysqli_connect_error());
    };
?>