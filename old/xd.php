<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		tr:nth-child(odd){
			background-color:yellow; 
		}
		tr:nth-child(even){
			background-color:blue; 
		}
		tr:hover{
			background-color:green;
			cursor:pointer; 
		}
		table,td{
			border-radius: 25px;
		}
	</style>
</head>
<body>
<?php
echo "<table border='1'>";
for($x=0; $x<10; $x++){
	$num=rand(1,100);
echo "<tr>";
		
		if($num<50){
			echo "<td>".$num." menor de 50 </td>";
		}
		elseif ($num==50) {
			echo "<td>".$num." igual de 50 </td>";
		}
		else{
			echo "<td>".$num." mayor de 50 </td>";
		}
		echo "</tr>";
}
echo "</table>"
?>
</body>
</html>