<?php

$estudiantes = array(
    array("nombre"=> "Andres", "edad" => 15),
    array("nombre"=> "Jose", "edad" => 27),
    array("nombre"=> "Ana", "edad" => 19),
    array("nombre"=> "Kevin", "edad" => 16),
);

echo "Estudiantes Menores de Edad";

echo "<br> <br> ";


$estudiantes_menores = array_filter($estudiantes, function ($estudiante)
{
   return $estudiante['edad'] < 18; 
});

print_r($estudiantes_menores);

echo "<br> <br> ------------------------------------------- <br> <br> ";

echo "Estudiantes Mayores de Edad";

echo "<br> <br> ";


$estudiantes_mayores = array_filter($estudiantes, function ($mayor)
{
   return $mayor['edad'] > 18; 
});

print_r($estudiantes_mayores);

?>