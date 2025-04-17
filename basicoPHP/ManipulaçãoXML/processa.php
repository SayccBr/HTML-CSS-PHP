<?php
include_once 'classes/Cliente.class.php';
include_once 'classes/Endereco.class.php';

// Carrega o arquivo XML
$xml = simplexml_load_file('xml.xml');

// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Cria um novo cliente dentro do XML
    $novoCliente = $xml->addChild('cliente');

    // Dados do cliente
    $novoCliente->addChild('nome', $_POST['nome']);
    $novoCliente->addChild('email', $_POST['email']);
    $novoCliente->addChild('sexo', $_POST['sex']);
    $novoCliente->addChild('estado_civil', $_POST['estado_civil']);
    $novoCliente->addChild('obs', $_POST['obs']);

    // Cria o subnó <endereco>
    $endereco = $novoCliente->addChild('endereco');
    $endereco->addChild('rua', $_POST['rua']);
    $endereco->addChild('bairro', $_POST['bairro']);
    $endereco->addChild('cidade', $_POST['cidade']);
    $endereco->addChild('estado', $_POST['estado']);
    $endereco->addChild('cep', $_POST['cep']);

    // Salva de volta no arquivo
    $xml->asXML('xml.xml');
}

// Carrega o XML novamente para exibir
$xml = simplexml_load_file('xml.xml');

if ($xml === false) {
    echo "Erro ao carregar o XML";
} else {
    echo "<pre>";
    var_dump($xml);
    echo "</pre>";
}
?>
