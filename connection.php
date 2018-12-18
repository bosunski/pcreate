<?php

// Connect to the database

define("DB_HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "pcblog");


try {
	$conn = new PDO( "mysql:host=" . DB_HOST .";dbname=" . DATABASE, USERNAME, PASSWORD );
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getMessage();
}