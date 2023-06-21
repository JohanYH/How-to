<?php

include_once "include2.php";
//El include muestra un Warnign, pero nos sigue generando el codigo (5 + 5) y se coloca varias veces se va repitiendo el mismo codigo
/* 
    include "include3.php";
*/

//El require nos detiene todo el codigo y se coloca varias veces se va repitiendo el mismo codigo

/* 
    require "include2.php";
    require "include2.php"; 
    require "include2.php"; 
*/

// Con el requiere_once y el include_once solo va a tener en cuenta la primara vez que lo llama y las demas veces lo ignora si se coloca varias veces

/* 
    require_once "include2.php";
    include_once "include2.php";
*/

echo "<br> <br> ------------------------------------------- <br> <br> ";

/* echo 5 + 5; */

?>