<?php
// Инициализация сессии
session_start();

// Удаление всех данных сессии
session_destroy();

// Перенаправление на страницу входа
header("Location: /php-site/index.php");
exit();
?>