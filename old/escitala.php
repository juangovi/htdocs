<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $string = $_POST["texto"]; //"E rln uo u d.nl acdymniaa  ud heoboecr ugema  r rom na a,cneqore";
        //$string =str_replace(' ', '', $string);
        echo $string."<br>";
        $linea = 5;//5
        $textos = strlen($string); //obtengo la lonjitud de una cadena string
        $longitud =$_POST["medida"] ;//ceil($textos / $linea); //pretendo dividir el string en filas con ceil, para impedir decimals fuera de lugar
        $palo = array();
        
        
        
        for($i = 0; $i < $linea/*5*/; $i++){
            for($j = 0; $j < $longitud; $j++){
                $posicionLetra = (($i * $longitud/*4*/) + $j);
                $letra = substr($string, $posicionLetra, 1);
                $palo[$i][$j] = $letra; //abcde
                                        //fghij
                                        //
            }
        }
        
        $descodificado = "";
        for($i = 0; $i < $longitud; $i++){
            for($j = 0; $j < $linea; $j++){
                $descodificado = $palo[$j][$i];
				 echo "$descodificado";
          
			
            }
			
        }
        
       
        
				// echo "<pre>".print_r($palo, true)."</pre>";
               // var_dump($string, $linea);
        ?>
    </body>
</html>
