<?php

class Exercito {
    private $unidades;
    private $nome;

    public function __construct() {
        $this->setUnidades(array());
    }

    public function adicionarUnidade(Unidade $unidade) {
        $unidades = $this->getUnidades();
        $unidades[] = $unidade;
        $this->setUnidades($unidades);
    }

    public function getUnidades() {
        return $this->unidades;
    }

    public function setUnidades(array $unidades): Exercito
    {
        $this->unidades = $unidades;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return Exercito
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

}