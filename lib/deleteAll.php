<?php
require("connect.php"); // Подключение к БД

header("Location: /php-site/index.php"); // Редирект

$sql = "DELETE FROM info";
$result = mysqli_query($db, $sql);

if ($result) {
    echo "All rows deleted successfully.";
} else {
    echo "Error deleting rows: " . mysqli_error($db);
}

mysqli_close($db);
exit; // Exit