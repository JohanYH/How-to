<?php

//1. Creacio de Contraseña

$contraseña = "123";


//2. Crear un hash seguro para la contraseña
$hash = password_hash($contraseña, PASSWORD_DEFAULT);
echo $hash;
//3. Verificar la contraseña ingresada por el usuario

$ingreso = "1234";

if (password_verify($ingreso, $hash)) {
    echo "<br> <br>";
    echo "Contraseña Correcta";
}else {
    echo "<br> <br>";
    echo "Contraseña Incorrecta";
}


?>