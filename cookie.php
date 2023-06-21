<?php

//1. Creamos las Cookies

setcookie("EjemploCookie", "Hola Mundo");
setcookie("EjemploCookie2", "Estoy aprendiendo PHP", time() + 3600);
setcookie("EjemploCookie3", "Cookie con Fecha", strtotime('2023-12-31 23:59:59'));

//1.2 Llamamos la cookie utilizando la variable superglobal $_COOKIE

echo "Mi primera Cookie es: " . $_COOKIE["EjemploCookie"];
echo "<br> <br> ------------------------------------------- <br> <br> ";
echo "Mi segunda Cookie es: " . $_COOKIE["EjemploCookie2"];
echo "<br> <br> ------------------------------------------- <br> <br> ";
echo "Mi Tercera Cookie es: " . $_COOKIE["EjemploCookie3"];

?>
