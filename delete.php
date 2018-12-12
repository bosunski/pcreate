<?php
	require "connection.php";
	$id = $_GET['id'];

	$sql = "DELETE FROM students WHERE id = $id";

	$result = $conn->exec($sql);

	if ($result) {
		echo "Student Deleted Successfully";
	} else {
		echo "Unable to delete student - Back off!!!";
	}