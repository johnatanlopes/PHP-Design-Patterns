<?php

// Nomralmente quando passamos uma api para ser consumida outras empresas precisam saber somente da faxada
// Disponibilizando somente os métodos que precisa
// Facilita a outra empresa que vai fazer a integração com nosso sistema, sem se preocupar com nome da classe, local, conflitos
// Mas, normalmente o Facade gera o problema de códigos muito grandes
// Pode o programador errar e colocar a regra de negócio aqui
// Fica díficil de realizar a manutenção quando crescer muito

class EmpresaFacade {

    public function criaContrato($nome, $valor) {
        return new Contrato($nome, $valor);
    }

    public function criaItem($item, $valor) {
        return new Item($item, $valor);
    }

    public function criaPedido($nome, $valor) {
        return new Pedido($nome, $valor);
    }

    public function finalizaPedido(Pedido $pedido) {
        // Diversas classes são chamadas
    }

}