<?php
require("connect.php"); // Подключение к БД

if (isset($_POST['id']) && isset($_POST['info']) && isset($_POST['tooinfo'])) { // Проверка, есть ли все необходимые POST-данные (id, info и tooinfo)


	$id = mysqli_real_escape_string($db, $_POST['id']); // Сохранение идентификатора из данных POST
	$info = mysqli_real_escape_string($db, $_POST['info']); // Сохранение идентификатора из данных POST
	$tooinfo = mysqli_real_escape_string($db, $_POST['tooinfo']); // Экранирование и сохранение идентификатора из данных POST




	$query = "UPDATE persons SET info='$info', tooinfo='$tooinfo' WHERE id='$id'"; // SQL-запрос для обновления данных в бд
    mysqli_query($db, $query); // Выполнение запроса



    
	header("Location: /ejuiks/about.php?id=$id"); // Редирект на страницу с выводом по одному, с указанным идентификатором
	exit; //выход.
}
?>