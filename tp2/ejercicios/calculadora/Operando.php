<?php

class Operando
{
    private $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function resolverEcuacion() {
        return $this->valor;
    }
}