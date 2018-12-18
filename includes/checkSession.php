<?php
 include_once "functions.php";

 if (!isLoggedIn()) {
 	session_destroy();
 	header("location: login.php");
 }