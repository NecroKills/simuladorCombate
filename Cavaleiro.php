<?php

require_once 'Unidade.php';

class Cavaleiro extends Unidade {
    public function __construct($nome) {
        parent::__construct($nome);
        $this->setHp(100);
        $this->setDefesa(20);
        $this->setAtaque(25);
    }

    public function vencerContra(Unidade $inimigo) {
        return $inimigo instanceof Piqueiro;
    }
}