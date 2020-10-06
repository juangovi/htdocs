<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro";
$nombre=$_POST["nombre"];
$apellido1=$_POST["apellido1"];
$apellido2=$_POST["apellido2"];
$direcion=$_POST["direcion"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$fecha=$_POST["fecha"];
$NIF=$_POST["NIF"];
$poblacion=$_POST["poblacion"];
$provincia=$_POST["provincia"];
$password2=$_POST["password"];

// conextarse
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO usuarios (nombre,apellido1,apellido2,direcion,correo_electronico,telefono,fecha_de_nacimiento,NIF,poblacion,provincia,password)
VALUES ('$nombre','$apellido1','$apellido2','$direcion','$email','$telefono','$fecha','$NIF','$poblacion','$provincia','$password2')";
if (mysqli_query($conn, $sql)) {
    echo "correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
<form action="formulario.html"method="post">
	<input type="submit" value="volver"><br>
</form>
</body>
</html>