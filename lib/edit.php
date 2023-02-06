<?php
// Подключение к базе данных
require("connect.php");

// Проверка, задан ли id в данных POST (то есть были ли переданы  в форме эти данные)
if (isset($_POST['id'])) { 
	$id = mysqli_real_escape_string($db, $_POST['id']); // Сохранение id из данных POST и экранирование его
	$info = mysqli_real_escape_string($db, $_POST['info']); // Сохранение и экранирование info из данных POST
	$tooinfo = mysqli_real_escape_string($db, $_POST['tooinfo']); // Сохранение и экранирование tooinfo из данных POST
	
	// Проверка, была ли нажата кнопка "удалить"
	if (isset($_POST['delete'])) { 
		
		$query = "DELETE FROM info WHERE id='$id'"; // SQL-запрос для удаления данных из базы данных
		mysqli_query($db, $query); // Выполнение запроса
		header("Location: /php-site/index.php"); // Редирект на страницу индекса
		
		exit; // Выход
	} 


// Проверка, заданы ли info и tooinfo в данных POST в форме  редактирования
elseif (isset($_POST['info']) && isset($_POST['tooinfo'])) {

	$query = "UPDATE info SET info='$info', tooinfo='$tooinfo' WHERE id='$id'"; // SQL-запрос для обновления данных в базе данных
	mysqli_query($db, $query); // Выполнение запроса
	header("Location: /php-site/about.php?id=$id"); // Перенаправление на страницу "about" с указанным идентификатором

	exit; // Выход
	}
	}