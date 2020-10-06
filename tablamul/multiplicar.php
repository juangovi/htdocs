<!DOCTYPE html>
<html>
<head>
	<style>
		.tbla1{
			margin-left:40%;
			margin-bottom: 10%;
		}
		td{
			text-align: center; 
		}
		.tbla2 tr:nth-child(odd){
			background-color:yellow; 
		}
		.tbla2 tr:nth-child(even){
			background-color:blue; 
		}
		.mul10{
			background-color:brown; 
		}
	</style>
<body>
<?php
	$num=$_GET["num"];
	$veces=$_GET["veces"];
if (($num<=100 && $num>=0) && ($veces<=1000 && $veces>=0)){
echo"<table class='tbla1' border='1'>";
	
	for ($i=1; $i <= 10; $i++) { 
		echo "<tr>";
		for ($e=1; $e <=10 ; $e++) { 
			echo "<td>".$i*$e."</td>";
		}
		echo"</tr>";
	}
	echo "</table>";
	echo"<table class='tbla2' border='1'>";
	for($x=1; $x<=$veces; $x++){
		if(($num*$x % 10==0)){
		echo "<tr><td class='mul10'>".$num." x ".$x." = ".$num*$x."</td></tr>";
	}
	else{
		echo "<tr><td>".$num." x ".$x." = ".$num*$x."</td></tr>";
	}

	}
echo "</table>";
}
else
{
	echo "valor incorrecto";
}
?>
</body>
</html>