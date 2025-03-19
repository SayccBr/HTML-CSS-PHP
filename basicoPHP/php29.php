<?php
// Criando dois arrays com números aleatórios
$array1 = [];
$array2 = [];
for ($i = 0; $i < 50; $i++) {
    $array1[] = rand(0, 1000);
    $array2[] = rand(0, 1000);
}

// Mesclando os dois arrays
$array3 = array_merge($array1, $array2);

// Ordenando o terceiro array
sort($array3);

// Imprimindo o conteúdo do array ordenado
foreach ($array3 as $numero) {
    echo $numero . "<br>";
}
?>
