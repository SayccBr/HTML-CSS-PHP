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
        return "Nome: " . $this->Nome . ".<br>" . 
               "Email: " . $this->Email . ".<br>" . 
               "Sexo: " . $this->Sexo . ".<br>" . 
               "Estado Civil: " . $this->EstadoCivil . ".<br>" . 
               "Observações: " . $this->Observacoes . ".<br>" . 
               "<br>Endereço- \n" . $this->Endereco_cliente->Imprimir();
    }

    function __destruct() {
        echo "<br><br>Objeto cliente ($this->Nome) finalizado.";
    }
}

?>
