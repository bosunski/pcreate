<?php
session_start();

include_once "includes/functions.php";
if (isLoggedIn()) {
	session_destroy();
	$_SESSION = [];
	header("location: login.php");
}

header("location: login.php");