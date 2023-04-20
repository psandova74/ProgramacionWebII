<?php
include_once('funciones.php');
if(empty($_GET['id']) ){
    redirect(url: 'index.php');
}

$conn = getConexion();

$id = $_GET["id"];
$sql = "delete from  pokemones where idPokemon =" . $id ;

$result= $conn->query($sql);
$conn->error;

redirect(url: 'index.php?message=baja');

