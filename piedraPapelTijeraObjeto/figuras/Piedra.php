<?php
class Piedra {
    private $jugador;
    public function __construct($jugador){
        $this->jugador = $jugador;
    }

    public function jugar($jugada) {
        return $jugada->jugasContraPiedra($this);
    }
    public function jugasContraPiedra($oponente){
        return "empate";
    }
    public function jugasContraPapel($oponente){
        return $oponente->ganaste();
    }
    public function jugasContraTijera($oponente){
        return $this->ganaste();
    }
    public function ganaste() {
        return $this->jugador;
    }
}