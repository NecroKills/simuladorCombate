<?php

require_once 'Unidade.php';
class Arqueiro extends Unidade {
    public function __construct($nome) {
        parent::__construct($nome);
        $this->setHp(100);
        $this->setDefesa(10);
        $this->setAtaque(30);
    }

    public function vencerContra(Unidade $inimigo) {
        return $inimigo instanceof Cavaleiro;
    }
}