<?php
session_start();

$title = $_POST['title'];
$content = $_POST['content'];

if (empty($title)) {
	$_SESSION['error'] = "Title cannot be empty";
	header("location: new_post.php");
	exit;
}

if (empty($content)) {
	$_SESSION['error'] = "Content cannot be empty";
	header("location: new_post.php");
	exit;
}

include "connection.php";

$content = $conn->quote($content);
$title = $conn->quote($title);

$sql = "INSERT INTO posts VALUES(null, $title, $content, NOW())";

$result = $conn->exec($sql);

if ($result) {
	$_SESSION['message'] = "Post Created successfully.";

	header("location: new_post.php");
	exit;
}