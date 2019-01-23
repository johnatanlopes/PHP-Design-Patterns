<?php

class Aprovado implements EstadoDeUmOrcamento {

    public function aplica(Orcamento $Orcamento) {
        $Orcamento->setValor($Orcamento->getValor() - $Orcamento->getValor() * 0.05);
    }

    public function aprova(Orcamento $Orcamento) {
        throw new Exception("Este orcamento ja se encontra aprovado");
    }

    public function reprova(Orcamento $Orcamento) {
        throw new Exception("Um orcamento aprovado nao pode ser reprovado");
    }

    public function finaliza(Orcamento $Orcamento) {
        $Orcamento->setEstado(new Finalizado());
    }

}