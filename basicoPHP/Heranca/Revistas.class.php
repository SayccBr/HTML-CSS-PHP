<?php
 class Revistas extends Dados
{
    private $ano_publi;
    private $volume;
    private $editora;
    private $assunto;

    public function __construct($ano_publi, $volume, $editora, $assunto, $indentificacao, $nome, $data_aquisicao, $lista_autores){
        //chamda do método construtor da classe-pai.
        parent::__construct($indentificacao, $nome, $data_aquisicao, $lista_autores);

        $this->ano_publi = $ano_publi;
        $this->volume = $volume;
        $this->editora = $editora;
        $this->assunto = $assunto;
    }

    public function Imprimir() {
        return "Ano_publi: " . $this->ano_publi . ".<br>" . 
               "Volume: " . $this->volume . ".<br>" . 
               "Editora: " . $this->editora . "<br>" .
               "Assunto: " . $this->assunto . "<br>" .
               "Nome: " . $this->nome . ".<br>" . 
                "Indentificação: ". $this->indentificacao . "<br>" .
               "Data de aquisicao: " . $this->data_aquisicao . ".<br>" . 
               "Lista de autores: " . $this->lista_autores . "";
    }

    public function __destruct() {
        echo "<br><br>Objeto Dados ($this->indentificacao) finalizado.";
    }
}

?>
