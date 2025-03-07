<?php
$numero = -5; // Exemplo de valor numérico

switch (true) {
    case ($numero > 0):
        echo "$numero é positivo.\n";
        break;
    case ($numero < 0):
        echo "$numero é negativo.\n";
        break;
    default:
        echo "$numero é igual a zero.\n";
        break;
}
?>
