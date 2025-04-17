<?php
class Retangulo extends FiguraGeometrica {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        parent::__construct("Retangulo");
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calculaArea() {
        return $this->base * $this->altura;
    }
}
?>