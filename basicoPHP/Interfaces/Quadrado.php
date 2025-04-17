<?php
class Quadrado extends FiguraGeometrica {
    private $lado;

    public function __construct($lado) {
        parent::__construct("Quadrado");
        $this->lado = $lado;
    }

    public function calculaArea() {
        return $this->lado * $this->lado;
    }
}
?>