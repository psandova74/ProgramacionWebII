<?php
include_once('funciones.php');

if(!empty($_POST)){
   subir_fichero('../imagenes','archivo');
}
header(header: "Location: ejercicio9.php" );
