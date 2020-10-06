
<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro";
$nombre=$_POST["nombre"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE NIF='$nombre'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
   echo "<tr>";
        echo "<td>id_usuario</td><td>nombre</td><td>primer apellido</td><td>segindo apellido</td><td>direccion</td><td>correo electronico</td><td>telefono</td><td>fecha de nacimiento</td><td>NIF</td><td>poblacion</td><td>provincia</td><td>password</td>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id_usuario']."</td>
        <td>".$row['nombre']."</td>
        <td>".$row['apellido1']."</td>
        <td>".$row['apellido2']."</td>
        <td>".$row['direcion']."</td>
        <td>".$row['correo_electronico']."</td>
        <td>".$row['telefono']."</td>
        <td>".$row['Fecha_de_nacimiento']."</td>
        <td>".$row['NIF']."</td>
        <td>".$row['poblacion']."</td>
        <td>".$row['provincia']."</td>
        <td>".$row['password']."</td>
        </tr>" ;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>