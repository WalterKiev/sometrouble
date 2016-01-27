<!DOCTYPE html>
<html>
<head>
<title>Hello Page</title>
</head>
<body>
<?php
$mysqli = new mysqli('127.0.0.1', 'admin', 'admin', 'main');
$sql = "SELECT keyword FROM main WHERE id = 1";
$result = $mysqli->query($sql);
$db_row = $result->fetch_assoc();
echo 'Hello, ' . $db_row['keyword'] . '<br> build # is number';
?>
</body>
</html>
