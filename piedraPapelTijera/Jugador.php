<?php
class Jugador {
    private string $jugada;
    public function __construct($jugada) {
        $this->jugada=$jugada;
    }
    public function getJugada() {
        return $this->jugada;
    }
    public function juegaContra($getJugada) {
        if($this->jugada == $getJugada){
            echo 'empate';
        } else if ($this->jugada == 'piedra' && $getJugada == 'papel') {
            echo 'jugador2';
        } else if ($this->jugada == 'piedra' && $getJugada == 'tijera') {
            echo 'jugador1';
        } else if ($this->jugada == 'papel' && $getJugada == 'tijera') {
            echo 'jugador2';
        } else if ($this->jugada == 'papel' && $getJugada == 'piedra') {
            echo 'jugador1';
        } else if ($this->jugada == 'tijera' && $getJugada == 'papel') {
            echo 'jugador1';
        } else if ($this->jugada == 'tijera' && $getJugada == 'piedra') {
            echo 'jugador2';
        }
    }
}