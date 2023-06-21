<?php

$codigo_script = '<script> alert("Hola, soy un script malicioso")</script>';

/* echo $codigo_script; */

$Ejemplo_sanitized = filter_var($codigo_script, FILTER_SANITIZE_STRING);
echo "<br> <br> ------------------------------------------- <br> <br> ";
echo $Ejemplo_sanitized;
echo "<br> <br> ------------------------------------------- <br> <br> ";

?>