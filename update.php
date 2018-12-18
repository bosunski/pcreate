<?php
require "connection.php";
$id = $_POST['id'];
$name = $_POST['name'];
$level = $_POST['level'];

$sql = "UPDATE students SET name='$name', level='$level' WHERE id=$id";

$result = $conn->exec($sql);

if ($result) {
	echo "Student data Updated";
} else {
	echo "Something just happen right now";
}