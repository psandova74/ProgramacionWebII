<?php

include "funciones.php";

$nombre = isset($_GET["nombre"])? $_GET["nombre"]:'Sin Nombre';
$edad = isset($_GET["edad"])? $_GET["edad"]:18;

echo 'Hola ' . $nombre . '!';
echo '<br>';

esMayorDeDedad($edad);

?>
