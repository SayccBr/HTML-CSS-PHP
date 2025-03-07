// biblioteca.inc.php
<?php
function verificarParOuImpar($numero) {
    if ($numero % 2 == 0) {
        return "$numero é par.\n";
    } else {
        return "$numero é ímpar.\n";
    }
}

function maiorNumero($num1, $num2) {
    if ($num1 > $num2) {
        return "$num1 é o maior número.\n";
    } else {
        return "$num2 é o maior número.\n";
    }
}

function calcularImpostoDeRenda($salario) {
    $imposto = 0;

    if ($salario <= 1903.98) {
        $imposto = 0;
    } elseif ($salario <= 2826.65) {
        $imposto = ($salario * 0.075) - 142.80;
    } elseif ($salario <= 3751.05) {
        $imposto = ($salario * 0.15) - 354.80;
    } elseif ($salario <= 4664.68) {
        $imposto = ($salario * 0.225) - 636.13;
    } else {
        $imposto = ($salario * 0.275) - 869.36;
    }

    return "O imposto de renda devido é: R$ " . number_format($imposto, 2, ',', '.') . "\n";
}
?>
