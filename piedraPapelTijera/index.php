<?php
$jugador1 = $_GET["j1"];
$jugador2 = $_GET["j2"];
echo "Version 1 <br>";
echo $jugador1 . "<br>" . $jugador2;
echo "<br>Resultado: ";
echo ($jugador1 == "piedra");

if($jugador1 == $jugador2){
    echo 'empate';
} elseif (($jugador1 == "piedra") && ($jugador2 == "papel") ){
    echo 'jugador2';
} elseif ($jugador1 == 'piedra' && $jugador2 == 'tijera') {
    echo 'jugador1';
} elseif ($jugador1 == 'papel' && $jugador2 == 'tijera') {
    echo 'jugador2';
} elseif ($jugador1 == 'papel' && $jugador2 == 'piedra') {
    echo 'jugador1';
} elseif ($jugador1 == 'tijera' && $jugador2 == 'papel') {
    echo 'jugador1';
} elseif ($jugador1 == 'tijera' && $jugador2 == 'piedra') {
    echo 'jugador2';
} else{
    echo "sale por aca";
}
//--------------------------------------
include_once("Jugador.php");
echo "<br>Version 2 <br>";
$jugador1 = new Jugador($_GET["j1"]);
$jugador2 = new Jugador($_GET["j2"]);

$jugador1->juegaContra($jugador2->getJugada());

//--------------------------------------

