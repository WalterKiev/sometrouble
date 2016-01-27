<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "main";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM main";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         echo "Hello, " . $row["keyword"]. "<br> current build is build#";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
