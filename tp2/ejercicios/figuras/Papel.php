<?php
class Papel {
    private  $jugador;
    public function __construct($jugador){
        $this->jugador = $jugador;
    }

    public function jugar($jugada) {
        return $jugada->jugasContraPapel($this);
    }
    public function jugasContraPiedra($oponente){
        return $this->ganaste();
    }
    public function jugasContraPapel($oponente){
        return "empate";
    }
    public function jugasContraTijera($oponente){
        return $oponente->ganaste();
    }
    public function ganaste() {
        return $this->jugador;
    }
}