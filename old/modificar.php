<!DOCTYPE html>
<html>
<body>
<?php
$idlibros=$_POST["idlibros"];
$titulo=$_POST["titulo"];
$autor=$_POST["autor"];
$editorial=$_POST["editorial"];
//$prestado=$_POST["prestado"];
$fechaPrestamo=$_POST["fechaPrestamo"];
$fechaDevolicuon=$_POST["fechaDevolucion"];

include ("coneccion.php");
$conn=conectar();
$sql = "UPDATE libros
set titulo='$titulo', autor='$autor', editorial='$editorial', fechaPrestamo='$fechaPrestamo',fechaDevolucion='$fechaDevolicuon'
 WHERE idlibros = '$idlibros'";
$result = $conn->query($sql);
echo "modificado";
?>
</body>
</html>