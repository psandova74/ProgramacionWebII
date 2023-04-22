<?php
$jugador1 = $_GET["j1"];
$jugador2 = $_GET["j2"];
echo "<h1>Piedra Papel o Tijera</h1><br>Jugador1: " . $jugador1 . "<br>Jugador2: " . $jugador2;
echo "<br><br>Version 1 <br>";
echo "Resultado: ";
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
}

//--------------------------------------

include_once("Jugador.php");
echo "<br><br>Version 2 <br>";
$jugador1 = new Jugador($_GET["j1"]);
$jugador2 = new Jugador($_GET["j2"]);

echo "Resultado: ";
$jugador1->juegaContra($jugador2->getJugada());

//--------------------------------------

