<?php
class Endereco
{
    public $Rua;
    public $Bairro;
    public $Cidade;
    public $Estado;
    public $CEP;

    public function __construct($Rua, $Bairro, $Cidade, $Estado, $CEP){
        $this->Rua = $Rua;
        $this->Bairro = $Bairro;
        $this->Cidade = $Cidade;
        $this->Estado = $Estado;
        $this->CEP = $CEP;
    }

    public function Imprimir() {
        return "<br>Rua: " . $this->Rua . ",\n" .
               "Bairro: " . $this->Bairro . ",\n" .
               "Cidade: " . $this->Cidade . ",\n" .
               "Estado: " . $this->Estado . ",\n" .
               "CEP: " . $this->CEP . "\n";
    }

    function __destruct() {
        echo "<br><br>Objeto endereco ($this->Cidade) finalizado.";
    }
}



?>