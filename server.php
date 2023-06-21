<?php

//1. Informacion con $_SERVER

$URL = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$NAME = $_SERVER['SCRIPT_NAME'];
$PORT = $_SERVER['SERVER_PORT'];
$PROTOCOLO = $_SERVER['SERVER_PROTOCOL'];

//2. Monstrarlo en Pantalla

echo $URL;
echo "<br> <br> ------------------------------------------- <br> <br> ";
echo $NAME;
echo "<br> <br> ------------------------------------------- <br> <br> ";
echo $PORT;
echo "<br> <br> ------------------------------------------- <br> <br> ";
echo $PROTOCOLO

?>