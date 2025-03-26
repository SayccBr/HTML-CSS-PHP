<?php

include_once 'classes/Endereco.class.php';
include_once 'classes/Cliente.class.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $sexo = $_POST['sex'] ?? '';
    $estado_civil = $_POST['estado_civil'] ?? '';
    $observacoes = $_POST['obs'] ?? '';
    
    $rua = $_POST['rua'] ?? '';
    $bairro = $_POST['bairro'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $estado = $_POST['estado'] ?? '';
    $cep = $_POST['cep'] ?? '';
    
    // Instancia um objeto Endereco
    $endereco = new Endereco($rua, $bairro, $cidade, $estado, $cep);
    
    // Instancia um objeto Cliente
    $cliente = new Cliente($nome, $email, $sexo, $estado_civil, $observacoes, $endereco);
    
    // Exibe os dados
    echo "<h2>Dados do Cliente Cadastrado</h2>";
    echo $cliente->Imprimir();
} else {
    echo "<p>Erro: método de requisição inválido.</p>";
}

?>
