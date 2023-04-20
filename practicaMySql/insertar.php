<?php
include_once('funciones.php');

if(empty($_POST['numero']) || empty($_POST['tipo']) ||
    empty($_POST['nombre']) || empty($_POST['descripcion'])  ||
    empty($_POST['imagen']) ){
        redirect(url: 'index.php');
}
$conn = getConexion();

$numero = $_POST["numero"];
$tipo = $_POST["tipo"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$imagen = $_POST["imagen"];

$sql = "insert into pokemones (numero, tipo, nombre, descripcion, imagen) values (?,?,?,?,?)";

//preparar el SQL (interpretarlo)
$statment= $conn->prepare($sql);

//ejecutar esa consulta
echo $numero . " ". $tipo  . " ". $nombre . " ".  $descripcion . " ".  $imagen;
$statment->bind_param("iisss", $numero,$tipo, $nombre, $descripcion, $imagen);
$result = $statment->execute();

redirect(url: 'index.php?message=alta');
