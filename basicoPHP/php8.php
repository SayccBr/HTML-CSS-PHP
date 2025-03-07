<?php
$numero = 20; // Exemplo de valor numérico

if ($numero % 10 == 0) {
    echo "$numero é divisível por 10.\n";
} elseif ($numero % 5 == 0) {
    echo "$numero é divisível por 5.\n";
} elseif ($numero % 2 == 0) {
    echo "$numero é divisível por 2.\n";
} else {
    echo "$numero não é divisível por 10, 5 ou 2.\n";
}
?>
<?