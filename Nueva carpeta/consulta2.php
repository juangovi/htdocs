<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  
    body{
        background-image: url("fondo.jpeg");
    }
    .ficha{
        margin: 1%;
        border-style: dashed;
        background-color: antiquewhite;
        text-align: center;
    }
    .imagen{
        margin-left: 45%;
        
    }
    .formulario{
      margin-bottom: 2%;
    }
    .saldo{
        margin-left: 10%;
        margin-right: 10%;
        text-align: center;
        text-decoration: underline;
        margin-bottom: 3%;
        background-color: white;
        
    }
    .titulo{
        text-decoration: underline;

    }
    .titulo2{
      float: left;
    }
    .margen{
      margin-top: 20%;
    }
</style>
</head>
<body>
<?php

$nombreproveedor=$_POST["nombreproveedor"];
$provincia=$_POST["provincia"];
include ("coneccion.php");
$conn=conectar();
$sql = "SELECT * FROM proveedores WHERE provincia = '$provincia' and nombreproveedor = '$nombreproveedor'";
if($result = $conn->query($sql)){
  echo"";
}else{
  echo 'error';
}

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    $nombreprovedor=$row["nombreproveedor"];
    $nombrecontacto=$row["nombrecontacto"];
    $provincias=$row["provincia"];
    $cargo=$row["cargocontacto"];
    $n_empleado=$row["numeroempleado"];
    $direccion=$row["direccion"];
    $fecha=$row["fecha_alta"];
    $email=$row["email"];
    $url=$row["url"];
    $ciudad=$row["ciudad"];
    $cp=$row["codigopostal"];
    $pais=$row["pais"];
    $telefono=$row["telefono"];
    $fax=$row["fax"];
    $iva=$row["tipoiva"];
    $logotipo=$row["logotipo"];
}
}else{
  echo '<meta http-equiv="refresh" content="0; URL=index.php?error=1">';
}
?>
<div class="w3-container w3-teal">
  <div class="titulo2">
  <h1>Jbank</h1>
</div>
  <div class="w3-dropdown-hover w3-right">
    <div class="margen">
      <?php
    echo "<button class='w3-button w3-black'>".$nombreprovedor."</button>";
    ?>
    <div class="w3-dropdown-content w3-bar-block w3-border " style="right:0">
      <a href="index.php" class="w3-bar-item w3-button">cerrar sesion</a>
      <form action="editar.php" method="post" >
        <?php
    echo "<input type='hidden' name='id_cliente' value='".$id_cliente."'>";
    ?>
      <input type="submit" class="w3-bar-item w3-button" value="Editar perfil" name="submit">
    </form>
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-bar-item w3-button">borrar perfil</button>

      <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>eliminar perfil</h2>
      </header>
      <div class="w3-container">
        <p>esta usted 100% seguro de realizar est accion sobre su perfil????? :O</p>
        
      </div>
      <footer class="w3-container w3-teal">
      <form action="eliminar.php" method="post" >
      <?php
    echo "<input type='hidden' name='id_cliente' value='".$id_cliente."'>";
    ?>
    <input type="submit" class="w3-button w3-green" value="segurisimo 100%">
      </form>
      </footer>
    </div>
  </div>
</div>
         
    </div>
    </div>
  </div>
</div>
<div class="ficha">
<div class="imagen"> 
<div class="w3-card-4" style="width:20%">
<?php
    echo "<img src='img/".$logotipo."' alt='f' style='width:100%'>";
?>
    <div class="editar">
      <p>editar</p>
      
    </div>
  </div>
</div><!--imagen-->

</div><!--ficha-->

<div class="ficha">
  <h1>datos personales</h1>
<?php
echo "<p>nombre provedor : ".$nombreprovedor."</p>";
echo "<p>nombre contacto : ".$nombrecontacto."</p>";
echo "<p>cargo : ".$cargo."</p>";
echo "<p>empleados : ".$n_empleado."</p>";
echo "<p>direccion : ".$direccion."</p>";
echo "<p>fecha de alta : ".$fecha."</p>";
$sql = "SELECT Nombre FROM provincias WHERE id ='$provincias'";
if($result = $conn->query($sql)){
  echo"";
}else{
  echo"";
}

if ($result->num_rows > 0) {
while($row2 = $result->fetch_assoc()) {
$pro=$row2["Nombre"];
echo "<p>provincia : ".$pro."</p>";
}
}
echo "<p>email : ".$email."</p>";
echo "<p>url : ".$url."</p>";
echo "<p>email : ".$email."</p>";
echo "<p>ciudad : ".$ciudad."</p>";
echo "<p>codigo postal : ".$cp."</p>";
echo "<p>pais : ".$pais."</p>";
echo "<p>telefono : ".$telefono."</p>";
echo "<p>fax : ".$fax."</p>";
if($iva==1){
  echo "<p>iva : IVA superreducido (4%) </p>";
}
if($iva==2){
  echo "<p>iva : IVA reducido (10%) </p>";
}
if($iva==3){
  "<p>iva : IIVA general (21%)  </p>";
}



?>


</div><!--ficha-->


</div>
</body>
</html>
