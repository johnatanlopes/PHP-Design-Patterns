<?php

class Numero implements Expressao {

    private $numero;

    public function __construct($numero) {
        $this->numero = $numero;
    }

    public function avalia() {
        return $this->numero;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function aceita(Impressora $Impressora) {
        $Impressora->visitaNumero($this);
    }

}