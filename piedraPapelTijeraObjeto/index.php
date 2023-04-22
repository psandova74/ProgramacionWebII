<?php
include_once("FigurasFactory.php");

echo "<H1>piedra papel y tijera</H1>";
$figurasFactory = new FigurasFactory();

$jugada1 = $figurasFactory->create($_GET["j1"] ,"jugador1");
$jugada2 = $figurasFactory->create($_GET["j2"] ,"jugador2");


echo $jugada1->jugar($jugada2);
