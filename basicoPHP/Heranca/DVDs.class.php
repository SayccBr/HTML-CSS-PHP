<?php
 class DVDs extends Dados
{
    private $tipo;
    private $descricao;

    public function __construct($tipo, $descricao, $indentificacao, $nome, $data_aquisicao, $lista_autores){
        //chamda do método construtor da classe-pai.
        parent::__construct($indentificacao, $nome, $data_aquisicao, $lista_autores);

        $this->tipo = $tipo;
        $this->descricao = $descricao;
    }

    public function Imprimir() {
        return "Tipo: " . $this->tipo . ".<br>" . 
               "Descricao: " . $this->descricao . ".<br>" . 
               "Nome: " . $this->nome . ".<br>" . 
                "Indentificação: ". $this->indentificacao . "<br>" .
               "Data da aquisicao: " . $this->data_aquisicao . ".<br>" . 
               "Lista de autores: " . $this->lista_autores . "";
    }

    public function __destruct() {
        echo "<br><br>Objeto DVDs ($this->tipo) finalizado.";
    }
}

?>
