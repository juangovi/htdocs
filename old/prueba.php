<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		div{
			width:10%; 

			
		}
		.años{
			margin-left: 45%;
			text-align: center;
			margin-top: 10%;

		}
		.pares{
			margin-left: 45%;
			text-align: center;
			margin-top: 10%;
			background-color: purple;
		}
		.dni{
			margin-left: 45%;
			background-color: yellow;
			color:red;
			text-align:center;
			margin-top: 10%;
		}
		.meses{
			width: 8%; 
			float: left;

		}
		.pri{
			width: 8%; 
			float: left;
			background-color:blue; 
		}
		.cumple{
			background-color: red;
			width: 8%;
			float: left;
		}
		}
		.bisiesto{
			background-color: green;
			color:white;
			padding-right: 0%;
		}
	</style>
</head>
<body>
	<form action="prueba.php" method="get">
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
	if($x%12+1==2){
		echo "<div class='dni'>";
	}else if($x%2==0){
	echo "<div class='pares'>";
	}else{
		echo "<div class='años'>";

	}

	echo "<img src='calendario/";
	echo $x%12+1;
	echo ".jpg' width='100%'></img>".$x."</div>";
	echo "<div class='pri'>";
	echo "<img src='calendario/";
		echo "1";
		echo "m.jpg' width='90%'></img></div>";
	for ($i=2; $i <=11 ; $i++) { 
		if($i==11){
		echo "<div class='cumple'>";
		}else{
			echo "<div class='meses'>";
		}
		echo "<img src='calendario/";
		echo $i;
		echo "m.jpg' width='90%'></img></div>";
		
	}
	echo "<div class='pri'>";
	echo "<img src='calendario/";
		echo "12";
		echo "m.jpg' width='90%'></img></div>";
	
}

?>
</body>
</html>