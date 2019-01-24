<?php

class Subtracao implements Expressao {

    private $esquerdo;
    private $direito;

    public function __construct(Expressao $esquerdo, Expressao $direito) {
        $this->esquerdo = $esquerdo;
        $this->direito = $direito;
    }

    public function avalia() {
        $esquerdo = $this->esquerdo->avalia();
        $direito = $this->direito->avalia();

        return $esquerdo - $direito;
    }

}