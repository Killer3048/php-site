<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adders with my god</title>
  <link rel="stylesheet" href="static/style.css">
  <link rel="icon" href="static/images/icon.png">
</head>
<?php session_start() ?> 
<body class="body">

  <header class="header">
    <a href="#" class="header__logo"><img class="header__logo-image" src="static/images/logo.svg" alt="лого"></a>
    <nav class="header__nav">
  <ul class="header__menu">
    <li class="header__menu-item">
      <a href="/php-site" class="header__menu-link">Главная</a>
    </li>
    <li class="header__menu-item">
      <a href="#" class="header__menu-link">О нас</a>
    </li>
    <li class="header__menu-item">
      <a href="#" class="header__menu-link">Сервис</a>
    </li>
    <li class="header__menu-item">
      <?php if (isset($_SESSION['email'])) { ?>
        <a href="/php-site/lib/exit.php" class="header__menu-link">Выход</a>
      <?php } else { ?>
        <a href="/php-site/auth.php" class="header__menu-link">Авторизация</a>
      <?php } ?>
    </li>
  </ul>
</nav>

  </header>

 <!-- <section class='modal-container'>
    <div class="modal" id="modal">
      <div class='question' id="question">Ты гей ?</div>
      <div class="buttons">
        <button class="yes-btn">Да</button>
        <button class="no-btn">Нет</button>
      </div>
    </div>
    <div class="gay-container">
      <img class="gay" src="https://sun9-76.userapi.com/c304907/u35479/-6/w_57083d2b.jpg" alt="gay">
    </div>
  </section> -->

  <form class="form" action="lib/add.php" method="post">
    <h2 class="form__title">Форма добавления</h2>
    <input class="form__input" type="text" name="info" placeholder="Введите info">
    <input class="form__input" type="text" name="tooinfo" placeholder="Введите tooinfo">
    <input class="form__btn form__submit" type="submit" value="Добавить">
  </form>

  <form class='form__deleteAll' action="lib/deleteAll.php" method="post">
    <input class='form__btn btn__deleteAll' type="submit" value="Удалить всё">
  </form>
  <table class="table">
    <?php
        require "lib/connect.php";
        $queryAll = "SELECT * from `info` ";
        $all = mysqli_query($db, $queryAll);
        if (!$all) {
            die("Ошибка сбора данных");
        }
        $all = mysqli_fetch_all($all, MYSQLI_ASSOC);
        ?>
    <thead class="table__head">
      <tr class="table__row">
        <th class="table__cell table__cell--head">ID</th>
        <th class="table__cell table__cell--head">ИНФО</th>
        <th class="table__cell table__cell--head">ТУИНФО</th>
        <th class="table__cell table__cell--head">Ссылка</th>
      </tr>
    </thead>
    <?php
            foreach($all as $val){
            ?>
    <tr class="table__row">
      <td class="table__cell"> <?= empty($val['id']) ? "Нет данных" : $val['id'] ?></td>
      <td class="table__cell"> <?= empty($val['info']) ? "Нет данных" : $val['info'] ?></td>
      <td class="table__cell"> <?= empty($val['tooinfo']) ? "Нет данных" : $val['tooinfo'] ?></td>
      <td class="table__cell"><a class="table__link" href="about.php?id=<?=$val['id']?>">Нажми</a></td>
    </tr>
    <?php
            }
            ?>
    </tbody>
  </table>
  <script src="static/script.js"></script>
</body>

</html>