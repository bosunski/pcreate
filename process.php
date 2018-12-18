<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";

include "connection.php";

$result = $conn->query($sql);

$user = $result->fetch(PDO::FETCH_ASSOC);

if(empty($user)) {
	$_SESSION['error'] = "Username and OR password is incorrect";
	header("location: login.php");
}

if($password != $user['password']) {
	$_SESSION['error'] = "Username and OR password is incorrect";
	header("location: login.php");
}

$_SESSION['username'] = $user['username'];

header('location: new_post.php');