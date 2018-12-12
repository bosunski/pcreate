<?php
    require "connection.php";

    $sql = "SELECT * FROM students";

    $result = $conn->query($sql);
    $students = $result->fetchAll(PDO::FETCH_ASSOC);
//    foreach ($students as $row) {
////        echo $row['id'];
////        echo "|" . $row['name'];
////        echo "|" . $row['level'];
////        echo "<br>";
//    }
?>

<html>
<head>
	<title>Student List</title>
</head>
<body>
<h1>
    There are <?=count($students); ?> in this School
</h1>
<table border="1">
	<thead>
		<tr>
			<td>S/N</td>
			<td>Name</td>
			<td>Level</td>
			<td>Action</td>
		</tr>
	</thead>

	<tbody>
        <?php
            foreach ($students as $key => $row) {
                $key = $key + 1;
                $name = $row['name'];
                $level = $row['level'];
                $id = $row['id'];
                echo '<tr>
                        <td>' . $key . '</td>
                        <td>' . $name . '</td>
                        <td>' . $level . '</td>
                        <td>
                            <a href="delete.php?id=' . $id . '">Delete</a>
                        </td>
                    </tr>';
            }
        ?>
	</tbody>
</table>
</body>
</html>
