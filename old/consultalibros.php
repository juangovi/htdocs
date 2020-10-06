<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.consultas{
			float: left;
			width: 40%;
			margin: 2.5%;
			border-style: solid;
			background-color: pink;
		}
		.modal-contenido{
  background-color:aqua;
  width:300px;
  padding: 10px 20px;
  margin: 20% auto;
  position: relative;
}
.modal{
  background-color: rgba(0,0,0,.8);
  position:fixed;
  top:0;
  right:0;
  bottom:0;
  left:0;
  opacity:0;
  pointer-events:none;
}
#miModal:target{
  opacity:1;
  pointer-events:auto;
}
	</style>
</head>
<body>
<?php
$titulo=$_GET["titulo"];
include ("coneccion.php");
$conn=conectar();
$sql = "SELECT * FROM libros WHERE titulo like '%$titulo%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
	echo "<div class='consultas'>titulo: ".$row["titulo"]."<br>".
	"autor:: ".$row["autor"]."<br>".
	"editorial: ".$row["editorial"]."<br>".
	"prestado: ";
	if($row["prestado"]==1){
		echo "si<br>";
	}else{
		echo "no<br>";
	}
	echo
	"fecha Prestamo: ".$row["fechaPrestamo"]."<br>".
	"fecha Devolucion: ".$row["fechaDevolucion"]."<br>".
	"isbn: ".$row["isbn"]."<br>".
	"fecha Alta: ".$row["fechaAlta"]."<br>";
	$idlibros=$row["idlibros"];
	echo "<a href='borrado.php?idlibros=".$idlibros."'>borrar</a>    ";
	echo "<a href='modificar1.php?idlibros=".$idlibros."'>modificar</a></div>";
}
}else{
	echo "no se encuatra el libro";
}
//'borrado.php?idlibros=".$idlibros."'
?>

</body>
</html>
