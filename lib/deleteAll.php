<?php
require("connect.php"); // Подключение к БД

header("Location: /index.php"); // Redirect to the about page with the specified id

$sql = "DELETE FROM info";
$result = mysqli_query($db, $sql);

if ($result) {
    echo "All rows deleted successfully.";
} else {
    echo "Error deleting rows: " . mysqli_error($db);
}

mysqli_close($db);
exit; // Exit