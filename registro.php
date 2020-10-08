<!DOCTYPE html>
<html>
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
}else {
    echo "<p style='color:red;'>algo salio mal</p>";
    echo "<form action='index.php' id='form' method='post'><input type='hidden' name='error' value='1'></form>";
    }
}
?>
<script>
    var form = document.getElementById("form").submit();
</script>
</html>