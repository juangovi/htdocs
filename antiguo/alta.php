
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
		body{
			background-image: url("fondo.jpeg"); 
		}
		img{
			margin-left: 30%;
			margin-top: 3%;
			margin-bottom: 5%;
		}
        .w3-container{
            background-color: seashell;

        }
    </style>

</head>
<body>
<img src="titulo.png">
<form class="w3-container" action="formularioAlta.php" method="post">
    <br><label>nombre</label>
    <input class="w3-input" input type="text" name="nombre" pattern="[A-Za-z]{1,45}" required="">

    <br><label>apellido</label>
    <input class="w3-input" input type="text" name="apellido" pattern="[A-Za-z]{1,45}" required="">

    <br><label>provincia</label>
    <select class="w3-select" name="provincia" equired="">
        <option value="" disabled selected>selecione...</option>
        <?php
        include ("coneccion.php");
    $conn=conectar();
    $sql = "SELECT * FROM provincias";
    $result = $conn->query($sql);
        if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       echo "<option value='".$row["id"]."'>".$row["Nombre"]."</option>";
    }
    }
    ?>
      </select><br>
    <br><label>fecha de nacimiento</label>
    <input class="w3-input" type="date" name="DNI"" required="">
  
    <br><label>numero de cuenta</label>
    <input class="w3-input" type="text" name="n_cuenta" pattern="[0-1]{1,45}" equired="">

    <br><label>DNI/NIF</label>
    <input class="w3-input" input type="text" name="DNI"" required="">
  
  
    <br><label>contraseña</label>
    <input class="w3-input" type="password" name="contraseña" equired="">

    <br><label>imagen de perfil</label>
    <input class="w3-input" input type="file" name="titulo" required="">
  
    <input type="button" class="w3-button w3-black" value="Registrar">
    
  </form>
<?php
    
?>
</body>
</html>
