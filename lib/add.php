<?php

require "connect.php";

$info = $_POST["info"]; 
$tooinfo = $_POST["tooinfo"];

$queryAdd = "INSERT INTO `persons`( `id`,`info`, `tooinfo` ) values (NULL, '$info','$tooinfo')"; 
$add = mysqli_query($db, $queryAdd);


if(!$add){
    die('error add' . mysqli_error($db));
}

header('Location: /ejuiks/index.php');
exit();
?>