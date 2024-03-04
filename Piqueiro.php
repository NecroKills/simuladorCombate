<?php

require_once 'Unidade.php';

class Piqueiro extends Unidade {
    public function __construct($nome) {
        parent::__construct($nome);
        $this->setHp(100);
        $this->setDefesa(30);
        $this->setAtaque(20);
    }

    public function vencerContra(Unidade $inimigo) {
        return $inimigo instanceof Arqueiro;
    }
}