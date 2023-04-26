<?php
/**
 * buscar()
 *
 * Recibe una palabra a buscar y un texto, y devuelve cuántas ocurrencias hubo de la misma en el texto.
 *
 * @param string $clave Palabra a buscar
 * @param string $texto texto donde buscarlo
 * @return boolean
 */
function buscar($clave, $texto) {
    $n_ocurrencias = 0;  // contador de ocurrencias
    $n_caracteres_clave = strlen($clave);  // longitud de la clave a buscar

    for ($i = 0; $i < strlen($texto) - $n_caracteres_clave + 1; $i++) {
        // Recorremos el texto caracter a caracter, deteniéndonos en las posibles ocurrencias de la clave
        if (substr($texto, $i, $n_caracteres_clave) == $clave) {
            $n_ocurrencias += 1;
        }
    }

    return $n_ocurrencias;
}

/**
 * subir_fichero()
 *
 * Sube una imagen al servidor  al directorio especificado teniendo el Atributo 'Name' del campo archivo.
 *
 * @param string $directorio_destino Directorio de destino dónde queremos dejar el archivo
 * @param string $nombre_fichero Atributo 'Name' del campo archivo
 * @return boolean
 */
function subir_fichero($directorio_destino, $nombre_fichero)
{
    $tmp_name = $_FILES[$nombre_fichero]['tmp_name'];
    //si hemos enviado un directorio que existe realmente y hemos subido el archivo
    if (is_dir($directorio_destino) && is_uploaded_file($tmp_name)) {
        $img_file = $_FILES[$nombre_fichero]['name'];
        $img_type = $_FILES[$nombre_fichero]['type'];
        echo 1;
        // Si se trata de una imagen
        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
                strpos($img_type, "jpg")) || strpos($img_type, "png"))) {
            //¿Tenemos permisos para subir la imágen?
            echo 2;
            if (move_uploaded_file($tmp_name, $directorio_destino . '/' . $img_file)) {
                return true;
            }
        }
    }
    //Si llegamos hasta aquí es que algo ha fallado
    return false;
}

/**
 * piedrapapeltijera()
 * Recibe una palabra a buscar y un texto, y devuelve cuántas ocurrencias hubo de la misma en el texto.
 * @return String
 */
function piedrapapeltijera(){
    $resultado=rand(1,3);
    switch ($resultado){
        case 1:
            return "piedra";
        case 2:
            return "papel";
        case 3:
            return "tijera";
    }
}

/**
 * fizzBuzz()
 *
 * Devuelve uno de los valores validos Piedra Papel o Tijera.
 * @param numero Para evaluar
 * @return retorna el numero o palabra segun corresponda
 */
function fizzBuzz($number){
    if ($number % 3 == 0 && $number % 5 == 0) {
        return "FizzBuzz";
    } else if ($number % 3 == 0) {
        return "Fizz";
    } else if ($number % 5 == 0) {
        return "Buzz";
    }
}

