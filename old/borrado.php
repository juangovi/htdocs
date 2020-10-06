<?php
$idlibros=$_GET["idlibros"];
include ("coneccion.php");
$conn=conectar();
$sql = "DELETE FROM libros WHERE idlibros = '$idlibros'";
$result = $conn->query($sql);
echo "borrado";

?>