
<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro";
$email=$_POST["email"];
//$nombre="49193115w";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM usuarios WHERE correo_electronico='$nombre'";
$result = $conn->query($sql);
if($result){
    echo "correcto";
}