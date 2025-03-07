<?php
$mes_num = 7; // Exemplo de número do mês

$meses = [
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
];

if (isset($meses[$mes_num])) {
    echo "O mês correspondente é: " . $meses[$mes_num] . "\n";
} else {
    echo "Não existe mês com este número.\n";
}
?>
