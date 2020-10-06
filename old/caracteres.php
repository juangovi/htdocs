<!DOCTYPE html>
<html>
<body>
	<form action="caracteres.php" method="get">
escribe una frase<input type="text" name="frase" placeholder="abc"><br>
<input type="submit">

</form>

<?php
if(isset($_GET["frase"])){
$frase=$_GET["frase"];
}
else{
	$frase="";
}

$abc = array('A' => "0", 'B' => "0",'C' => "0",'D' => "0",'E' => "0",'F' => "0",'G' => "0",'H' => "0",'I' => "0",'J' => "0",'K' => "0",'L' => "0",'M' => "0",'N' =>"0", "Ñ"=>"0",'O' => "0",'P' => "0",'Q' => "0",'R' => "0",'S' => "0",'T' => "0",'U' => "0",'V' => "0",'W'=>"0",'X' => "0",'Y' => "0",'Z' => "0");
$letras=count_chars($frase,3);
$letras=$letras." ";
$letras=strtoupper($letras);
$palabras=explode(" ",$frase);
for ($e=0; $e < count($palabras); $e++) { 
	

for ($i=0; $i <strlen($palabras[$e]) ; $i++) {
	 $byte = substr($palabras[$e],$i,1);
	 $letra= strtoupper($byte);
	 $abc[$letra]++;
}
}
ordenar($abc,$letras);
function ordenar($abc,$letras){
$con=1;
while ( $con< strlen($letras)) {
$mayor=0;
$mletra="";
for ($i=0; $i < strlen($letras); $i++) {
	$ascii=substr($letras,$i,1);
	if ($abc[$ascii]>$mayor) {
		$mayor=$abc[$ascii];
		$mletra=$ascii;
	 } 
}
	echo "el caracter ".$mletra. " en codigo ascii ".ord(strtolower($mletra)). " aparece ".$abc[$mletra]." veces<br>";
	$abc[$mletra]=0;
	$con++;
}
}
?>
</body>
</html>