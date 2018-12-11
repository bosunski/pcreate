<?php

// validation Happens here
$errors = [];
if (true) {
	$errors[] = "Email is not valid";
}

// Once validation is complete i.e no error
if (empty($errors)) {
	$baseURL = 'https://v2.budgetier.com.ng/mail';
	$getQuery = "?to=$to&name=$name&sender_name=$sender_name&from=$from&message=$message";
	$fullURL = $baseURL . $getQuery;
	header("location: $fullURL");
} else {
	foreach ($errors as $error) {
		echo $error . '<br>';
	}
}
// Redirect to the API to sent=d the mail