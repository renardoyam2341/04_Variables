<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PHPScriptdemo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

if ($result) {
while ($row = $result->fetch_assoc()) {
echo "<br>Name: " . $row["FirstName"]." ".$row["LastName"]. "<br>ID: ".$row["StudentID"]. "<br>Email: " .$row["email"]. "<br>Phone: " .$row["Phone"]."<br>";
}
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

?>