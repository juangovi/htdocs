<!DOCTYPE html>
<html>
<title>jbank</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
	.bloque input{
		float: left;
	}.bloque{
		text-align: right;
	}
	.opciones{
		font-size: 80%;
	}

</style>
<body>
	

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-card" style="width:25%;right:0;">
  <h3 class="w3-bar-item">registrarse</h3>
  <form class="w3-container" action="" method="post">
  	<label>Nick</label>
	<input class="w3-input" type="text" name="nick">

	<label>correo electronico</label>
	<input class="w3-input" type="email" name="email">
	
	<label>contraseña</label>
	<input class="w3-input" type="password" name="contraseña"><br>
	<div class="bloque">
	<input type="submit" class="w3-button w3-black" value="Registrar">
	</div>
	
	</form>
	 <?php
        include ("coneccion.php");
    	$conn=conectar();
    	 if(isset($_POST["nick"])){
    	$nick=$_POST["nick"];
    	$email=$_POST["email"];
    	$contraseña=md5($_POST["contraseña"]);
    	$hoy = date("m.d.y");
    	$token=md5($nick.$hoy.$email);
    
    $sql = "INSERT INTO  usuarios (Usuario_nick,Usuario_email,Usuario_clave,Usuario_token_aleatorio) 
    VALUES ('$nick','$email','$contraseña','$token')";
if (mysqli_query($conn, $sql)) {
    echo"registrado";
 
} else {
    echo "<p style='color:red;'>algo salio mal</p>";
}

  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 
  $mensage="
<html>
<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
<head>
	
	<style>
		h1{
			text-align: center;
		}
	</style>
</head>
<body>
<h1>bienvenido a mi pagina
<a class='w3-button w3-black' href='http://juanantonio.dx.am/verificacion.php?tk=".$token."'>Link Button</a></h1>
</body>
</html>";

$success = mail($email, "verifica tu correo", $mensage,$headers);
if (!$success) {
    $errorMessage = error_get_last()['message'];
}
}
?>
</div>

<!-- Page Content -->
<div style="margin-right:25%">



<img src="fondo2.jpg" alt="fondo" style="width:100%">


</div>
 
      
</body>
</html>
