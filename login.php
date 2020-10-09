<?php
// Start the session
session_start();
?>
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
  <h3 class="w3-bar-item">iniciar sesion</h3>
  <form class="w3-container" action="inicio.php" method="post">
  	<label>Nick o correo electronico</label>
	<input class="w3-input" type="text" name="nick">
	
	<label>contraseña</label>
	<input class="w3-input" type="password" name="contraseña"><br>
	<div class="bloque">
	<input type="submit" class="w3-button w3-black" value="Iniciar">
	</div>
	</form>
	<?php
if (isset($_POST["error"])) {
	echo "el usuario ya existe";
}
?>
</div>


<!-- Page Content -->
<div style="margin-right:25%">



<img src="fondo2.jpg" alt="fondo" style="width:100%">


</div>

 
      
</body>
</html>
