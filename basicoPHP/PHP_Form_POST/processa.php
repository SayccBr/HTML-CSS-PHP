<?php
include_once 'classes/Cliente.class.php';
include_once 'classes/Endereco.class.php';

// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os dados do formulário
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];

    $endereco = new Endereco($rua, $bairro, $cidade, $estado, $cep);
}

// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['sex'];
    $estadoCivil = $_POST['estado_civil'];
    $observacoes = $_POST['obs'];

    $cliente = new Cliente($nome, $email, $sexo, $estadoCivil, $observacoes, $endereco);

    echo "<h2>Dados do Cliente:</h2>";
    echo $cliente->Imprimir();  

    // Destrui o objeto
    unset($cliente); 

    // Destrui o objeto
    unset($endereco); 
}
?>
