<?php
// Criando um array multidimensional de clientes
$clientes = [
    ['nome' => 'Carlos', 'cpf' => '12345678900', 'rg' => '123456', 'telefone' => '1112345678'],
    ['nome' => 'Ana', 'cpf' => '23456789011', 'rg' => '234567', 'telefone' => '1123456789'],
    ['nome' => 'Paulo', 'cpf' => '34567890122', 'rg' => '345678', 'telefone' => '1134567890'],
    ['nome' => 'Mariana', 'cpf' => '45678901233', 'rg' => '456789', 'telefone' => '1145678901'],
    ['nome' => 'Jorge', 'cpf' => '56789012344', 'rg' => '567890', 'telefone' => '1156789012']
];

// Imprimindo o conteúdo do array
foreach ($clientes as $cliente) {
    echo "Nome: " . $cliente['nome'] . "<br>";
    echo "CPF: " . $cliente['cpf'] . "<br>";
    echo "RG: " . $cliente['rg'] . "<br>";
    echo "Telefone: " . $cliente['telefone'] . "<br><br>";
}
?>
