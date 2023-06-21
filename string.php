<?php

//1. Longitud de un string strlen()

$dato = "Hello World";
echo "Ejemplo de strlen " . strlen($dato);

echo "<br> <br> ------------------------------------------- <br> <br> ";

//2. Encontrar la posicion en un string strpos()

$dato2 = "Este es un ejemplo de uso de strpos()";
echo "Ejempolo strpos: " . strpos($dato2, "de");

echo "<br> <br> ------------------------------------------- <br> <br> ";

//3. Reemplazar texto con str_replace()

$dato3 = "Me especializo en BackEnd";
echo "$dato3 <br>";
echo str_replace("BackEnd", "FrontEnd", $dato3);

echo "<br> <br> ------------------------------------------- <br> <br> ";

//4. Convertir el texto a misucula con strtolower()

$dato4 = "EJEMPLO DE USO DE STRTOLOWER()"; 
echo strtolower($dato4);

echo "<br> <br> ------------------------------------------- <br> <br> ";

//5. Convertir el texto a Mayusculas con strtoupper()

$dato5 = "ejemplo de uso de strtoupper()";
echo strtoupper($dato5);

echo "<br> <br> ------------------------------------------- <br> <br> ";

//6. Obtener la cadena de las posiciones que queramos con substr()

$dato6 = "Ejemplo de uso substr()";
echo substr($dato6, 10, 20);
echo "<br> <br> ------------------------------------------- <br> <br> ";

?>