<!DOCTYPE html>
<html>
<body>
<?php

?>
</body>
</html>


<form action="multiplicar.php" method="get">
escribe un numerico xd<input type="text" name="num" placeholder="12"><br>
escribe otro numerico<input type="text" name="veces" placeholder="123"><br>
<input type="submit">

</form>
$frase=$_GET["num"];


if(isset($_POST["frase"])){
$frase=$_GET["frase"];
}
else{
	$frase="";
}
echo "<tr>";
        echo "<td>".$row['id_usuario']."</td><td>".$row['nombre']."</td><td>".$row['apellido1']."</td<td>".$row['apellido2']."</td><td>".$row['direcion']."</td><td>".$row['correo_electronico']."</td><td>".$row['telefono']."</td> <td>".$row['Fecha_de_nacimiento']."</td><td>".$row['NIF']."</td><td>".$row['poblacion']."</td><td>".$row['provincia']."</td><td>".$row['password']."</td></tr>" ;
}



 echo "<table border='1'>";
   echo "<tr>";
        echo "<td>id_usuario</td><td>nombre</td><td>primer apellido</td><td>segindo apellido</td><td>direccion</td><td>correo electronico</td><td>telefono</td><td>fecha de nacimiento</td><td>NIF</td><td>poblacion</td><td>provincia</td><td>password</td>";
    echo "</tr>";
    <select name="grado">
    	<option value="xd"></option>
    	<!DOCTYPE html>
<html>
<body>

<h2>Radio Buttons</h2>

<form>
  <input type="radio" id="male" name="gender" value="male">hola <br>
 
  <input type="radio" id="female" name="gender" value="female"> paco<br>
 
  <input type="radio" id="other" name="gender" value="other">jos<br>
  
  <input type="radio" id="other" name="hose" value="other">jos<br>
  
</form> 

</body>
</html>