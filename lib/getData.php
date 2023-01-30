require("connect.php"); // Connect to the database

$sql = "SELECT * FROM info";
$result = mysqli_query($db, $sql);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

mysqli_close($db);

echo json_encode($data);