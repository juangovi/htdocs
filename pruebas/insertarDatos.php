<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "examen";


$nombre=$_POST["nombre"];
$apellido1=$_POST["apellido1"];
$apellido2=$_POST["apellido2"];
$sexo=$_POST["sexo"];
$fecha=$_POST["fecha"];
$nacionalidad=$_POST["nacionalidad"];
$NIF=$_POST["NIF"];
$email=$_POST["email"];
$residencia=$_POST["residencia"];
$cp=$_POST["cp"];
$direccion=$_POST["direccion"];
$ciudad=$_POST["ciudad"];
$domicilio=$_POST["fiscal"];
$telefono=$_POST["telefono"];
$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];
$pregunta=$_POST["pregunta"];
$respuesta=$_POST["respuesta"];
$codigo=$_POST["codigo"];


// conextarse
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO 49193115w (nombre, apellido1, apellido2,sexo,fecha_nacimiento,nacionalidad,DNI,correo_electronico,residencia,CP,direcion,ciudad,domicilio,telefono,usuario,contraseña,pregunta,respuesta,codigo)
VALUES ('$nombre','$apellido1','$apellido2','$sexo','$fecha','$nacionalidad','$NIF','$email','$residencia','$cp','$direccion','$ciudad','$domicilio','$telefono','$usuario','$contraseña','$pregunta','$respuesta','$codigo')";
if (mysqli_query($conn, $sql)) {
    echo "correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
<form action="formularioExamen.html"method="post">
	<input type="submit" value="volver"><br>
</form>
</body>
</html>