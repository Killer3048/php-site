<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adders with my god</title>
    <link rel="stylesheet" href="static/style.css">
    <link rel="icon" href="static/images/icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="body">

<form class="form" action="lib/add.php" method="post">
    <h2 class="form__title">Форма добавления</h2>
    <input class="form__input" type="text" name="info" placeholder="Введите info" required>
    <input class="form__input" type="text" name="tooinfo" placeholder="Введите tooinfo">
    <input class="form__submit" type="submit" value="Добавить">
</form>

    <table class="table">
    <?php
        require "lib/connect.php";
        $queryAll = "SELECT * from `persons` ";
        $all = mysqli_query($db, $queryAll);
        if (!$all) {
            die("Error fetching data: " . mysqli_error($db));
        }
        $all = mysqli_fetch_all($all, MYSQLI_ASSOC);
        if (!empty($all))
        ?>
        <thead class="table__head">
            <tr class="table__row">
                <th class="table__cell table__cell--head">ID</th>
                <th class="table__cell table__cell--head">ИНФО</th>
                <th class="table__cell table__cell--head">ТУИНФО</th>
            </tr>
        </thead>
        <tbody class="table__body">
            <?php
            foreach($all as $val){
            ?>
            <tr class="table__row">
                <td class="table__cell"> <?= empty($val['id']) ? "Нет данных" : $val['id'] ?></td>
                <td class="table__cell"> <?= empty($val['info']) ? "Нет данных" : $val['info'] ?></td>
                <td class="table__cell"> <?= empty($val['tooinfo']) ? "Нет данных" : $val['tooinfo'] ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script src="static/script.js"></script>
</body>
</html>