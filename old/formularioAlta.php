<!DOCTYPE html>
<html>
<body>
<?php

$titulo=$_POST["titulo"];
$autor=$_POST["autor"];
$editorial=$_POST["editorial"];
if(isset($_POST["prestado"])){
	$prestado=$_POST["prestado"];
}
else{
	$prestado=0;
}
$fechaPrestamo=$_POST["fechaPrestamo"];
$fechaDevolucion=$_POST["fechaDevolucion"];
$isbn=$_POST["isbn"];
$fechaAlta=$_POST["fechaAlta"];
include ("coneccion.php");
// conextarse
$conn=conectar();

// Check connection

$sql = "INSERT INTO libros (titulo,autor,editorial,prestado,fechaPrestamo,fechaDevolucion,isbn,fechaAlta)
VALUES ('$titulo','$autor','$editorial','$prestado','$fechaPrestamo','$fechaDevolucion','$isbn','$fechaAlta')";
if (mysqli_query($conn, $sql)) {
    echo "correcto";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
<form action="formularioAlta.html"method="post">
	<input type="submit" value="volver"><br>
</form>
</body>
</html>