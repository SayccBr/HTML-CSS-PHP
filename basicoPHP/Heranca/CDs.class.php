<?php
 class CDs extends Dados
{
    private $genero;
    private $faixa;

    public function __construct($genero, $faixa, $indentificacao, $nome, $data_aquisicao, $lista_autores){
        //chamda do método construtor da classe-pai.
        parent::__construct($indentificacao, $nome, $data_aquisicao, $lista_autores);

        $this->genero = $genero;
        $this->faixa = $faixa;
    }

    public function Imprimir() {
        return "Genero: " . $this->genero . ".<br>" . 
               "Faixa: " . $this->faixa . ".<br>" . 
               "Nome: " . $this->nome . ".<br>" . 
                "Indentificação: ". $this->indentificacao . "<br>" .
               "Data da aquisicao: " . $this->data_aquisicao . ".<br>" . 
               "Lista de autores: " . $this->lista_autores . "";
    }

    public function __destruct() {
        echo "<br><br>Objeto CDs ($this->genero) finalizado.";
    }
}

?>
