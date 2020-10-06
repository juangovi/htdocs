<!DOCTYPE html>
<html>
<body>
<?php
$titulo=$_GET["idlibros"];
include ("coneccion.php");
$conn=conectar();
$sql = "SELECT * FROM libros WHERE idlibros = $titulo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
	?>
		<form action="modificar.php" method="post">
titulo<input type="text" name="titulo" pattern="[A-Za-z0-9]{1,45}" required="" value=<?php echo "'".$row["titulo"]."'";?>><br>
autor<input type="text" name="autor" pattern="[A-Za-z]{1,45}" required="" value=<?php echo "'".$row["autor"]."'";?>><br>
editorial<input type="text" name="editorial" pattern="[A-Z a-z]{1,45}" required="" value=<?php echo "'".$row["editorial"]."'";?>><br>
prestado<input type="checkbox" name="prestado" value="1" value=<?php echo "'".$row["prestado"]."'";?>><br>
fecha Prestamo<input type="date" name="fechaPrestamo" value=<?php echo "'".$row["fechaPrestamo"]."'";?>><br>
fecha Devolucion<input type="date" name="fechaDevolucion" value=<?php echo "'".$row["fechaDevolucion"]."'";?>><br>
isbn<input type="text" name="isbn" required="" size="45" required="" disabled="true" value=<?php echo "'".$row["isbn"]."'";?>><br>
fecha Alta<input type="date" name="fechaAlta" step="2" disabled="true" value=<?php echo "'".$row["fechaAlta"]."'";?>><br>
<input type="hidden" name="idlibros" value=<?php echo "'".$row["idlibros"]."'";?>>
<input type="submit" value="modificar">
</form>
<?php
}
}else{
	echo "no se encuatra el libro";
}
//'borrado.php?idlibros=".$idlibros."'
?>


</body>
</html>