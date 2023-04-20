<?php
function redirect($url): void {
    header(header:'Location:' . $url);
    exit();
}

/**
 * @return bool|void
 */
function getConexion() {
    $servername = 'Localhost';
    $username = 'root';
    $password = '';
    $database = 'pw';
    $conn= new mysqli($servername, $username, $password, $database) or die();
    return ($conn);
}
