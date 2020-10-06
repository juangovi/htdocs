
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
  <?php
  if(isset($_POST["repetido"])){
    $error=0;
    $nombreprovedor=$_POST["nombreprovedor"];
    $nombrecontacto=$_POST["nombrecontacto"];
    $provincia=$_POST["provincia"];
    $cargo=$_POST["cargo"];
    $n_empleado=$_POST["n_empleado"];
    $direccion=$_POST["direccion"];
    $fecha=$_POST["fecha_alta"];
    $email=$_POST["email"];
    $url=$_POST["url"];
    $ciudad=$_POST["ciudad"];
    $cp=$_POST["cp"];
    $pais=$_POST["pais"];
    $telefono=$_POST["telefono"];
    $fax=$_POST["fax"];
    $iva=$_POST["iva"];
  }else{
    $error=0;
    $nombreprovedor="";
    $nombrecontacto="";
    $provincia="";
    $cargo="";
    $n_empleado="";
    $direccion="";
    $fecha="";
    $email="";
    $url="";
    $ciudad="";
    $cp="";
    $pais="";
    $telefono="";
    $fax="";
    $iva="";
  }
  ?>
<img src="titulo.png">
<form class="w3-container" action="altaExamen.php" method="post" enctype="multipart/form-data">
    <br><label>nombre del proveedor</label>
    <input class="w3-input" input type="text" name="nombreprovedor" <?php echo "value='".$nombreprovedor."'";?> pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,25}+[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,25}+[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,25}" title="no se adminten numeros ni caracteres especiales" required="">

    <br><label>nombre del contacto</label>
    <input class="w3-input" input type="text" name="nombrecontacto" <?php echo "value='".$nombrecontacto."'";?> title="no se adminten numeros ni caracteres especiales" required="">

    <br><label>cargo del contacto</label>
    <input class="w3-input" type="text" name="cargo" required=""  pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,25}+[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,25}+[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,25}" <?php echo "value='".$cargo."'";?> title="10 numeros">

    <br><label>numero de empleado</label>
    <input class="w3-input" type="text" name="n_empleado" <?php echo "value='".$n_empleado."'";?> required="" pattern="[0-9]{0,5}" title="5 numeros">

    <br><label>direccion</label>
    <input class="w3-input" type="text" name="direccion"<?php echo "value='".$direccion."'";?> required="">

    <br><label>URL</label>
    <input class="w3-input" type="url" name="url" required="" <?php echo "value='".$url."'";?>title="10 numeros">

    <br><label>correo electronico</label>
    <input class="w3-input" type="email"<?php echo "value='".$email."'";?> name="email" required="">

    <br><label>ciudad</label>
    <input class="w3-input" type="text" name="ciudad" <?php echo "value='".$ciudad."'";?> required="">

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

      <br><label>codigo postal</label>
    <input class="w3-input" type="text" name="cp" <?php echo "value='".$cp."'";?> pattern="[0-9]{5}" required="">

     <br><label>pais</label>
    <input class="w3-input" type="text" <?php echo "value='".$pais."'";?> name="pais" required="">

     <br><label>telefono</label>
    <input class="w3-input" type="text" name="telefono"  <?php echo "value='".$telefono."'";?>required="" pattern="[0-9]{9}" title="10 numeros">

      <br><label>fecha de alta</label>
    <input class="w3-input" type="date" name="fecha_alta" <?php echo "value='".$fecha."'";?> required="">

     <br><label>fax</label>
    <input class="w3-input" type="text" name="fax" required=""<?php echo "value='".$fax."'";?> pattern="[0-9]{9}" title="9 numeros">

    <br><label>logotipo</label>
    <input type="file" class="w3-input"  name="fileToUpload" id="fileToUpload"><br>

    <input type="hidden" name="repetido" value="repetido">

    <select class="w3-select" name="iva" required="">
        <option value="" disabled selected>selecione...</option>
        <option value="1" >IVA superreducido (4%)</option>
        <option value="2" >IVA reducido (10%)</option>
        <option value="3" >IVA general (21%)</option>
        </select><br>

    <input type="submit" class="w3-button w3-black" value="Registrar" name="submit">

  
  <?php
  if(isset($_POST["nombreprovedor"])){
    $error=0;
    $error_fax=0;
    $errorn_empleados=0;
    $error_telefono=0;
    $nombreprovedor=$_POST["nombreprovedor"];
    $nombrecontacto=$_POST["nombrecontacto"];
    $provincia=$_POST["provincia"];
    $cargo=$_POST["cargo"];
    $n_empleado=$_POST["n_empleado"];
    if($n_empleado<1){
      $error=1;
      $errorn_empleados=1;
    }
    $direccion=$_POST["direccion"];
    $fecha=$_POST["fecha_alta"];
    $email=$_POST["email"];
    $url=$_POST["url"];
    $ciudad=$_POST["ciudad"];
    $cp=$_POST["cp"];
    $pais=$_POST["pais"];
    $telefono=$_POST["telefono"];
    if($telefono>999999999 || $telefono<100000000){
      $error=1;
      $error_telefono=1;
    }
    $fax=$_POST["fax"];
    if($telefono>999999999 || $telefono<100000000){
      $error=1;
      $error_fax=1;
    }
    $iva=$_POST["iva"];
    //if(isset($_POST["fileToUpload"])){
    $uploadOk = 1;
    $camposValidar=array();
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $nombreFoto=$_FILES['fileToUpload']['name'];


//validar campos
    //VALIDAR IMAGEN
// Check if image file is a actual image or fake image
if(isset($_POST["fileToUpload"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    //echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
   
    $uploadOk = 0;
  }
}


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {

  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {

  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0 || $error == 1) {
  echo "<p style='color:red;'>error en los campos:</p>";
    if($error_telefono==1){
      echo " tlefono";
    }
    if($uploadOk == 0){
      echo " imagen";
    }
    if($errorn_empleados==1){
      echo " empleados";
    }
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

//fin imagen

$sql = "INSERT INTO proveedores (nombreproveedor, nombrecontacto, cargocontacto, numeroempleado, direccion, url, email, ciudad, provincia, codigopostal, pais, telefono, fecha_alta, fax, logotipo, tipoiva) VALUES ('$nombreprovedor','$nombrecontacto','$cargo','$n_empleado','$direccion','$url','$email','$ciudad','$provincia','$cp','$pais','$telefono','$fecha','$fax','$nombreFoto','$iva')";
if (mysqli_query($conn, $sql)) {
    echo"<meta http-equiv='refresh' content='0; URL=consulta.php'>";
    
} else {
    echo "<p style='color:red;'>este usuario ya existe</p>";
}


    }
    else{
        echo "";
    }
    ?>
    </form>

</body>
</html>
