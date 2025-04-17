<?php

require_once 'Matematica.class.php';

echo "Teste de métodos da classe Matematica:\n";

// Soma
echo "\nSoma:\n";
echo "Soma 1: " . Matematica::Soma(10, 5) . "\n";
echo "Soma 2: " . Matematica::Soma(7, 3.2) . "\n";
echo "Soma 3: " . Matematica::Soma(0, 0) . "\n";

// Subtração
echo "\nSubtração:\n";
echo "Subtracao 1: " . Matematica::Subtracao(10, 5) . "\n";
echo "Subtracao 2: " . Matematica::Subtracao(7, 3.2) . "\n";
echo "Subtracao 3: " . Matematica::Subtracao(0, 0) . "\n";

// Multiplicação
echo "\nMultiplicação:\n";
echo "Multiplicacao 1: " . Matematica::Multiplicacao(10, 5) . "\n";
echo "Multiplicacao 2: " . Matematica::Multiplicacao(7, 3.2) . "\n";
echo "Multiplicacao 3: " . Matematica::Multiplicacao(0, 0) . "\n";

// Divisão
echo "\nDivisão:\n";
echo "Divisao 1: " . Matematica::Divisao(10, 5) . "\n";
echo "Divisao 2: " . Matematica::Divisao(7, 3.5) . "\n";
echo "Divisao 3: " . Matematica::Divisao(10, 0) . "\n"; // Teste de divisão por zero

// Mostrar total de utilizações
echo "\nTotal de utilizações: " . Matematica::$utilizacoes . "\n";
