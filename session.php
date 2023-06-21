<?php

//1. Iniciamos Sesion

session_start();

//1.2 Asignamos valores para la sesion

/* $_SESSION['usuario'] = 'Andres';
$_SESSION['contraseña'] = '123'; */


/* $usuario = "Andres";
$contraseña = "123"; */

//2. Ejemplos
echo "El Usuario es: " . $_SESSION['usuario'];
echo "<br> <br> ------------------------------------------- <br> <br> ";
echo "La Contraseña es: " . $_SESSION['contraseña'];
echo "<br> <br> ------------------------------------------- <br> <br> ";
echo "Ahora el Usuario es: " . $usuario;
echo "<br> <br> ------------------------------------------- <br> <br> ";
echo "Ahora la Contraseña es: " . $contraseña;
 
?>