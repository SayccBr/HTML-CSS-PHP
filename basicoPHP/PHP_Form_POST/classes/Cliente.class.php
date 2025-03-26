<?php

include_once 'classes/Endereco.class.php';

class Cliente
{
    public $Nome;
    public $Email;
    public $Sexo;
    public $EstadoCivil;
    public $Observacoes;

    public $Endereco_cliente;

    public function __construct($Nome, $Email, $Sexo, $EstadoCivil, $Observacoes, Endereco $Endereco_cliente) {
        $this->Nome = $Nome;
        $this->Email = $Email;
        $this->Sexo = $Sexo;
        $this->EstadoCivil = $EstadoCivil;
        $this->Observacoes = $Observacoes;
        $this->Endereco_cliente = $Endereco_cliente;
    }

    public function Imprimir() {
        return "Nome: " . $this->Nome . ",\n" . 
               "Email: " . $this->Email . ",\n" . 
               "Sexo: " . $this->Sexo . ",\n" . 
               "Estado Civil: " . $this->EstadoCivil . ",\n" . 
               "Observações: " . $this->Observacoes . "\n" . 
               "<br><br>Endereço: \n" . $this->Endereco_cliente->Imprimir();
    }

    function __destruct() {
        echo "<br><br>Objeto cliente ($this->Nome) finalizado.";
    }
}

?>
