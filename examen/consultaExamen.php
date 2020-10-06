
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .par{
            background-color: pink;
        }
        .impar{
            background-color: green;
        }
        tr{
            background-color:blue; 
        }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "examen";
$nombre=$_POST["nombre"];
$usuario=$_POST["usuario"];
$email=$_POST["usuario"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM 49193115w WHERE nombre like '$nombre'and (usuario like'$usuario' or correo_electronico like'$email')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
   echo "<tr>";
        echo "<td>nombre</td><td>primer apellido</td><td>segindo apellido</td><td>sexo</td><td>fecha de nacimiento</td><td>nacionalidad</td><td>DNI</td><td>correo electronico</td><td>residencia</td><td>cp</td><td>direccion</td><td>ciudad</td><td>domicilio</td><td>telefono</td><td>usuario</td><td>codigo</td>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "
        <td class='impar'>".$row['nombre']."</td>
        <td class='par'>".$row['apellido1']."</td>
        <td class='impar'>".$row['apellido2']."</td>
        <td class='par'>".$row['sexo']."</td>
        <td class='impar'>".$row['fecha_nacimiento']."</td>
        <td class='par'>".$row['nacionalidad']."</td>
        <td class='impar'>".$row['DNI']."</td>
        <td class='par'>".$row['correo_electronico']."</td>
        <td class='impar'>".$row['residencia']."</td>
        <td class='par'>".$row['CP']."</td>
        <td class='impar'>".$row['direcion']."</td>
        <td class='par'>".$row['ciudad']."</td>
        <td class='impar'>".$row['domicilio']."</td>
        <td class='par'>".$row['telefono']."</td>
        <td class='impar'>".$row['usuario']."</td>
        <td class='par'>".$row['codigo']."</td>
        </tr>" ;
    }
} else {
    echo "usuarios no encontrados";
}
$conn->close();
?>
<form action="formularioConsulta.html"method="post">
    <input type="submit" value="volver"><br>
</form>
</body>
</html>