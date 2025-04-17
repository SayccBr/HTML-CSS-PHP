<?php
abstract class FiguraGeometrica implements AreaCalculavel {
    protected $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    abstract public function calculaArea();
}
?>