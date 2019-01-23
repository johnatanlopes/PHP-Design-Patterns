<?php

class SemDesconto implements Desconto {

    public function desconto(Orcamento $Orcamento) {
        return 0;
    }

    public function setProximo(Desconto $proximo) {
        // Faz nada - Cumpri sua obrigação na interface desconto
    }

}