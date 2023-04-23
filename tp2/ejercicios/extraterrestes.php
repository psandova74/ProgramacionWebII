<?php

if ($_POST) {
    $nombre = $_POST['nombre'];
    $planeta = $_POST['planeta'];
    $datos = array('nombre' => $nombre, 'planeta' => $planeta);
    $archivo = 'visitas.json';
    if (file_exists($archivo)) {
        $datos_anteriores = file_get_contents($archivo);
        $array_datos = json_decode($datos_anteriores);
        array_push($array_datos, $datos);
        $nueva_visita = json_encode($array_datos);
        file_put_contents($archivo, $nueva_visita);
    } else {
        $array_datos = array();
        array_push($array_datos, $datos);
        $nueva_visita = json_encode($array_datos);
        file_put_contents($archivo, $nueva_visita);
    }
}

header(header: "Location: ejercicio12.php" );