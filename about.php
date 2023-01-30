<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="static/style.css">
</head>


<body class="body">
<?php
require("lib/connect.php"); // Подключение "connect.php ", библиотека для установления соединения с базой данных
    $id = $_GET['id']; //Присвоите значение "id" из строки запроса URL переменной "$id"

	$queryOne = "SELECT * FROM info WHERE id = '$id'"; //Выполните SQL-запрос для выбора всех столбцов из таблицы "info", где "id" равно "$id"
	$one = mysqli_query($db, $queryOne);
	$one = mysqli_fetch_assoc($one); // Извлечение первой строки результата запроса в виде ассоциативного массива и сохранение ее в переменной "$one"
	if(!$one){
		die('Ошибка вывода');
	}
?>
<title>ID: <?= empty($one['id']) ? "Нет данных" : $one['id'] ?></title>





<h1 class="title">ID: <?= empty($one['id']) ? "Нет данных" : $one['id'] ?></h1>
<table class="table">

	<thead class="table__head">
		<tr class="table__row">
			<th class="table__cell table__cell--head">ИНФО</th>
			<th class="table__cell table__cell--head">ТУИНФО</th>
		</tr>
	</thead>

	<tbody class="table__body">
		<tr class="table__row">
			<td class="table__cell"><?= empty($one['info']) ? "Нет данных" : $one['info'] ?></td>
			<td class="table__cell"><?= empty($one['tooinfo']) ? "Нет данных" : $one['tooinfo'] ?></td>
		</tr>
	</tbody>

  </table>


  <form class="form" action="lib/edit.php" method="post">
	    <h2 class="form__title">Форма редактирования</h2>
		<input class="form__input" type="hidden" name="id" value="<?= $one['id'] ?>">
		<input class="form__input" type="text" name="info" value="<?= $one['info'] ?>" placeholder="Изменить инфо">
		<input class="form__input" type="text" name="tooinfo" value="<?= $one['tooinfo'] ?>" placeholder="Изменить туинфо">
		
		<div class="buttons">
			<button class="form__btn form__submit" type="submit">Сохранить</button>
			<button class="form__btn form__delete" type="submit" name="delete">Удалить</button>
		</div>
	</form>

	<script src="static/script.js"></script>

	<script>
const btn = document.querySelector('.form__btn');
btn.addEventListener('click', function() {
    btn.style.width = '40%';
    btn.style.padding = '5px 10px';
    btn.style.backgroundColor = '#6F6F6F';
});
</script>
</body>