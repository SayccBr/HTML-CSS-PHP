<?php
 class Livros extends Dados
{
    private $nome_editora;
    private $ano_publicacao;

    public function __construct($nome_editora, $ano_publicacao, $indentificacao, $nome, $data_aquisicao, $lista_autores){
        //chamda do método construtor da classe-pai.
        parent::__construct($indentificacao, $nome, $data_aquisicao, $lista_autores);

        $this->nome_editora = $nome_editora;
        $this->ano_publicacao = $ano_publicacao;
    }

    public function Imprimir() {
        return "Nome da editora: " . $this->nome_editora . ".<br>" . 
               "Ano de publicacao: " . $this->ano_publicacao . ".<br>" .
               "Nome: " . $this->nome . ".<br>" . 
                "Indentificação: ". $this->indentificacao . "<br>" .
               "Data de aquisicao: " . $this->data_aquisicao . ".<br>" . 
               "Lista de autores: " . $this->lista_autores . "";
    }

    public function __destruct() {
        echo "<br><br>Objeto Livros ($this->nome_editora) finalizado.";
    }
}

?>
