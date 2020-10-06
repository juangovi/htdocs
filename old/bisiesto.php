<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table{
			margin-left: 4%;
			float:left; 
		}
		.bisiesto{
			background-color: green;
			color:white;
			padding-right: 0%;
		}
	</style>
</head>
<body>
	<form action="bisiesto.php" method="get">
escribe año maximo<input type="text" name="año1" placeholder="el que tu quieres"><br>
escribe año minimo<input type="text" name="año2" placeholder="el que tu quieres"><br>
<input type="submit">
</form>
<?php
if(isset($_GET["año1"])){
$añomax=$_GET["año1"];
$añoemp=$_GET["año2"];
}
else{
	$añomax=null;
	$añoemp=null;
}
echo "<table border='1'>";
$c=0;
for ($x=$añoemp; $x<=$añomax; $x++){
	$c++;
	echo "<tr>";
	if ((($x % 4==0 & $x % 100!=0) | $x % 400==0) & $añomax!=null) {
		echo "<td class='bisiesto'>".$x."</td><td class='bisiesto'><div ><img src='bisiesto.png'width='100px'></img></div></td>";
	}
	elseif($añomax!=null){
		echo "<td>".$x."</td><td><img src='nobisiesto.jpg' width='100px'></img></td>";
	}
	echo "</tr>";
	if ($c>=($añomax-$añoemp)/6){
		echo "</table>";
		echo "<table border='1'>";
		$c=0;
	}
}
echo "</table>";
?>
</body>
</html>