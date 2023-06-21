<?php

//1. Informacion de php a Convertir en Formato Json

$datos = array(
    'nombre' => 'Juan',
    'apellido' => 'Perez',
    'edad' => '20'
);

//2. Imprimir los datos Originales

var_dump($datos);

echo "<br> <br>";

//3. Funcion Json, para convertir en php a Json

$datosNuevos = json_encode($datos);

//3.1 Imprimir los datos convertidos

var_dump($datosNuevos);

// ---------- Part 2 Json Encode ---------

echo "<br> <br> ------------------------------------------- <br> <br> ";
echo "Part 2, Json_Enconde";

$campers = '[
    {
        "nombre": "Sebastian",
        "edad": "19",
        "telefono": 3028323257
    },
    {
        "nombre": "Kevin",
        "edad": "17",
        "telefono": 3028353352
    }
]';

echo "<br> <br>";

var_dump($campers);

echo "<br> <br>";

$campersNuevos = json_encode($campers, true);

var_dump($campersNuevos);

foreach($campersNuevos[1] as $key => $value){
    echo $value;
    echo "<br> <br> ";
}

?>