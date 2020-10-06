<!DOCTYPE html>
<html>
<body>
	<form action="burbuja.php" method="get">
escribe los numeros separados por comas<input type="text" name="num" placeholder="1,2,3"><br>
<input type="submit"><br>
<?php
if(isset($_GET["num"])){
$frase=$_GET["num"];
}
else{
	$frase="";
}
$com=0;
$numeros = explode(",",$frase);
while ($com==0) {
$com=1;
for ($i=1; $i <count($numeros) ; $i++) { 
	if ($numeros[$i-1]<$numeros[$i]) {
		$reserva=$numeros[$i-1];
		$numeros[$i-1]=$numeros[$i];
		$numeros[$i]=$reserva;
		$com=0;
	}
	}
}
for ($i=0; $i <count($numeros) ; $i++) { 
		echo $numeros[$i]."<br>";
	}


?>
</body>
</html>