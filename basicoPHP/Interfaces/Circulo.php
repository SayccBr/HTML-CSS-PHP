<?php
class Circulo extends FiguraGeometrica {
    private $raio;

    public function __construct($raio) {
        parent::__construct("Circulo");
        $this->raio = $raio;
    }

    public function calculaArea() {
        return pi() * $this->raio * $this->raio;
    }
}
?>