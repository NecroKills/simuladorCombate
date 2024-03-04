<?php

abstract class Unidade {
    protected $nome;
    protected $hp;
    protected $defesa;
    protected $ataque;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getAtaque() {
        return $this->ataque;
    }

    public function setAtaque($ataque)
    {
        $this->ataque = $ataque;
        return $this;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function setHp($hp)
    {
        $this->hp = $hp;
        return $this;
    }

    public function getDefesa()
    {
        return $this->defesa;
    }

    public function setDefesa($defesa)
    {
        $this->defesa = $defesa;
        return $this;
    }

    public function __construct($nome) {
        $this->setNome($nome);
    }

    abstract public function vencerContra(Unidade $inimigo);

    public function sofrerDano($dano): bool
    {
        $dano -= $this->getDefesa();

        if ($dano > 0) {
            $this->setHp($this->getHp() - $dano);
            if ($this->getHp() <= 0) {
                echo $this->getNome() . " foi derrotado!\n";
                return true;
            }
        } else {
            // Se o dano for menor ou igual à defesa, a unidade sofre um dano mínimo de 1
            $this->setHp($this->getHp() - 1);
            if ($this->getHp() <= 0) {
                echo $this->getNome() . " foi derrotado!\n";
                return true;
            }
        }

        return false;
    }

}