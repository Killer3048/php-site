<?php
require "connect.php"; // Подключение файла подключения к БД

$info = $_POST["info"]; // Сохранение значения переменной info из POST данных
$tooinfo = $_POST["tooinfo"]; // Сохранение значения переменной tooinfo из POST данных

$queryAdd = "INSERT INTO info( id,info, tooinfo ) values (NULL, '$info','$tooinfo')"; // SQL-запрос для добавления данных в таблицу info
$add = mysqli_query($db, $queryAdd); // Выполнение запроса

// Если запрос не удался, вывод сообщения об ошибке
if (!$add)
{
    die('error add' . mysqli_error($db));
}

header('Location: /php-site/index.php'); // Перенаправление на страницу index.php
exit(); // Выход из скрипта

?>
