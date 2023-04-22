<?php
include_once("figuras/FigurasFactory.php");

echo "<h1>Piedra Papel o Tijera</h1><br>Jugador1: " . $_GET["j1"] . "<br>Jugador2: " .$_GET["j2"] ."<br>";

$figurasFactory = new FigurasFactory();

$jugada1 = $figurasFactory->create($_GET["j1"] , "jugador1");
$jugada2 = $figurasFactory->create($_GET["j2"] , "jugador2");

echo "Resultado: " . $jugada1->jugar($jugada2);


