<?php
abstract class Dados
{
    protected $indentificacao;
    protected $nome;
    protected $data_aquisicao;
    protected $lista_autores;

    public function __construct($indentificacao, $nome, $data_aquisicao, $lista_autores){
        $this->indentificacao = $indentificacao;
        $this->nome = $nome;
        $this->data_aquisicao = $data_aquisicao;
        $this->lista_autores = $lista_autores;
    }

    public function Imprimir() {
        return "Nome: " . $this->nome . ".<br>" . 
                "Indentificação: ". $this->data_aquisicao .
               "Data de aquisicao: " . $this->data_aquisicao . ".<br>" . 
               "Lista de autores: " . $this->lista_autores . "";
    }

    function __destruct() {
        echo "<br><br>Objeto Dados ($this->indentificacao) finalizado.";
    }
}

?>
