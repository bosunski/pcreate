<?php
require "connection.php";

function randomName() {
	$alphabets = "abcdefghijklmnopqrstuvwxyz";
	$alphabets = str_shuffle($alphabets);

	$name = substr($alphabets, 0, 5);
	return ucfirst($name);
}

function ransomLevel()
{
	$levels = [100, 200, 300, 400, 500, 600];
	shuffle($levels);

	return $levels[0];
}
$name = "Bosun";
//$id = $_GET['id'];
for ($i = 0; $i < 100; $i++) {
	$name = randomName();
	$level = ransomLevel();
	$insertSql = "INSERT INTO students (id, name, level) VALUES (null, '$name', $level)";

	try {
		$done = $conn->exec($insertSql);
		echo "Data Deleted Successfully!";

	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
//$deleteSql = "DELETE FROM students WHERE id = $id";

