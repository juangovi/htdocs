
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
            width:40%;
		}
        .w3-container{
            background-color: seashell;

        }
    </style>

</head>
<body>
<img src="titulo.png">
<form class="w3-container" action="consulta2.php" method="post" enctype="multipart/form-data">
    <br><label>nombre</label>
    <input class="w3-input" input type="text" name="nombreproveedor" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,25}+[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,25}+[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,25}" title="no se adminten numeros ni caracteres especiales" required="">

    <br><label>provincia</label>
    <select class="w3-select" name="provincia" required="">
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

    <input type="submit" class="w3-button w3-black" value="Buscar" name="submit">

  

    </form>

</body>
</html>
