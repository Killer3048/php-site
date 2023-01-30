<?php
require("connect.php"); // Подключение к БД

if (isset($_POST['id'])) { // Check if id is set in the POST data

	$id = mysqli_real_escape_string($db, $_POST['id']); // Save the id from the POST data and escape it
	$info = mysqli_real_escape_string($db, $_POST['info']); // Save and escape info from the POST data
	$tooinfo = mysqli_real_escape_string($db, $_POST['tooinfo']); // Save and escape tooinfo from the POST data

	if (isset($_POST['delete'])) { // Check if delete button was pressed
		$query = "DELETE FROM persons WHERE id='$id'"; // SQL query to delete data from the database

		mysqli_query($db, $query); // Execute the query
		header("Location: /ejuiks/index.php"); // Redirect to the index page

		exit; // Exit

	} elseif (isset($_POST['info']) && isset($_POST['tooinfo'])) { // Check if info and tooinfo are set in the POST data

		$query = "UPDATE persons SET info='$info', tooinfo='$tooinfo' WHERE id='$id'"; // SQL query to update data in the database
		mysqli_query($db, $query); // Execute the query
		header("Location: /ejuiks/about.php?id=$id"); // Redirect to the about page with the specified id

		exit; // Exit
	}
}
?>