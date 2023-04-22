<?php
include_once("Piedra.php");
include_once("Papel.php");
include_once("Tijera.php");
class FigurasFactory
{
    public function __construct() {

    }

    public function create($jugada, string $jugador){
        switch ($jugada){
            case "piedra":
                return new Piedra($jugador);
            case "papel":
                return new Papel($jugador);
            case "tijera":
                return new Tijera($jugador);
        }
        return null;
    }

}