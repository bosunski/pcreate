<?php
	require "connection.php";
	$id = $_GET['id'];

	$sql = "SELECT * FROM students WHERE id=$id";

	$result = $conn->query($sql);
	$student = $result->fetch(PDO::FETCH_ASSOC);

	if (!$student) {
		echo "Unable to find student with ID: $id";
		exit;
	}

	if ($student['level'] > 400) {
		echo "You cannot edit this Student.";
		exit;
	}
?>

<html>
<head>
	<title>Student List</title>
</head>
<body>
<h1>
	Editing profile for <?=$student['name']; ?>
</h1>

<form action="update.php" method="post">
	<input type="hidden" name="id" value="<?=$student['id']; ?>">
	Name: <input type="text" name="name" value="<?=$student['name']; ?>"><br>
	Level: <input type="text" name="level" value="<?=$student['level']; ?>"><br>

	<button type="submit">Update Profile</button>

</form>
</body>
</html>
