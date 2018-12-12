<?php

// Connect to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "project_create";


try {
	$conn = new PDO( "mysql:host=$servername;dbname=$database", $username, $password );
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getMessage();
}