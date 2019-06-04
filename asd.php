<?php
$servername = "localhost";
$username = "root";
$password = "up18235";
$dbname = "authentication";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Guest (Id, Email, Name)
VALUES ('2', 'asd2@example.com', 'Benjii')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>
    
</body>
</html>