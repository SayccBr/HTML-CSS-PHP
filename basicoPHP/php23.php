<?php
// a) Função para gerar um número aleatório com X casas decimais
function gera_decimal_aleatorio($minimo, $maximo, $qtd_casas_decimais = 2) {
    $valor = rand($minimo * pow(10, $qtd_casas_decimais), $maximo * pow(10, $qtd_casas_decimais)) / pow(10, $qtd_casas_decimais);
    return number_format($valor, $qtd_casas_decimais, ',', '.');
}

// b) Função para formatar um dado número em Reais
function formata_reais($numero) {
    return 'R$ ' . number_format($numero, 2, ',', '.');
}
?>
