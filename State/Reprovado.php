<?php

class Reprovado implements EstadoDeUmOrcamento {

    public function aplica(Orcamento $Orcamento) {
        throw new Exception("Um orcamento reprovado não pode receber descontos");
    }

    public function aprova(Orcamento $Orcamento) {
        throw new Exception("Apenas orcamentos em aprovacao podem ser aprovados");
    }

    public function reprova(Orcamento $Orcamento) {
        throw new Exception("Este orcamento ja se encontra reprovado");
    }

    public function finaliza(Orcamento $Orcamento) {
        throw new Exception("Apenas orcamentos aprovados podem ser finalizados");
    }

}