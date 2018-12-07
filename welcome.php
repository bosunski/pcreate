<?php
define('END', "<br>");

//var_dump($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['password_confirmation'];

if (!isset($_POST['gender'])) {
	echo "Please select a gender" . END;
}

if (empty($name)) {
	echo "Please input name" . END;
}

if (empty($password)) {
	echo "Please input password" . END;
}

if (empty($email)) {
	echo "Please input email" . END;
}

if (empty($cpassword)) {
	echo "Please input password again" . END;
}

if ($password !== $cpassword) {
	echo "Passwords do not match" . END;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "Invalid email, please check the email you inputted" . END;
}

if (strlen($password) < 8) {
	echo "Password is too short, it must not be less than 8" . END;
}

if (preg_match('/[^A-Za-z\s]/', $name)) {
	echo "Name can only contain Alphabets" . END;
}