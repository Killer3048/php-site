<?php
// Подключение к базе данных
require ("connect.php");

$email = $_POST['email'];
$pass = $_POST['pass'];
$confirm = $_POST['confirm'];

if (empty($email) || empty($pass) || empty($confirm))
{
    // одно или несколько полей не заполнены
    echo 'Пожалуйста, заполните все поля';
}   
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    // некорректный email
    echo 'Пожалуйста, введите корректный email-адрес';
}
elseif ($pass !== $confirm)
{
    // пароли не совпадают
    echo 'Пожалуйста, убедитесь, что пароли совпадают';
}
else
{
    $query = "SELECT * FROM `users` WHERE `email` = '$email'";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user)
    {
        // пользователь уже существует
        echo 'Пользователь с таким email-адресом уже зарегистрирован';
    }
    else
    {
        // регистрация нового пользователя
        $query = "INSERT INTO `users` (`email`, `pass`) VALUES ('$email', '$pass')";
        $result = mysqli_query($db, $query);

        if ($result)
        {
            // успешная регистрация
            echo 'Вы успешно зарегистрировались';
        }
        else
        {
            // ошибка регистрации
            echo 'Извините, произошла ошибка при регистрации. Пожалуйста, попробуйте еще раз';
        }
    }
}
?>
